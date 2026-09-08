#!/usr/bin/env python3
"""Local preview server. Development only - the real site needs nothing but a
static host plus .htaccess or netlify.toml.

Python's built-in server has no .html fallback, so /about would 404 even though
about.html is sitting right there. This adds the one rule the production hosts
already apply: a clean URL is served from the file of the same name plus .html.

    python serve.py            serves . on http://localhost:8000
    python serve.py 3000       serves . on http://localhost:3000
"""

import os
import sys
from functools import partial
from http.server import HTTPServer, SimpleHTTPRequestHandler

ROOT = os.path.dirname(os.path.abspath(__file__))


class CleanURLHandler(SimpleHTTPRequestHandler):
    def translate_path(self, path):
        local = super().translate_path(path)
        # Only fill in .html when the request names no file of its own, so
        # /css/style.css and /photos/... keep resolving normally.
        if not os.path.isfile(local) and os.path.isfile(local + ".html"):
            return local + ".html"
        return local

    def send_error(self, code, message=None, explain=None):
        page = os.path.join(ROOT, "404.html")
        if code == 404 and os.path.isfile(page):
            with open(page, "rb") as f:
                body = f.read()
            self.send_response(404)
            self.send_header("Content-Type", "text/html; charset=utf-8")
            self.send_header("Content-Length", str(len(body)))
            self.end_headers()
            if self.command != "HEAD":
                self.wfile.write(body)
            return
        super().send_error(code, message, explain)


if __name__ == "__main__":
    port = int(sys.argv[1]) if len(sys.argv) > 1 else 8000
    handler = partial(CleanURLHandler, directory=ROOT)
    print(f"Serving {ROOT} at http://localhost:{port}  (Ctrl+C to stop)")
    try:
        HTTPServer(("", port), handler).serve_forever()
    except KeyboardInterrupt:
        print()
