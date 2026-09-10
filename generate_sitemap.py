import os
import glob
from datetime import datetime

directory = r"c:\Users\GCV\Desktop\Dr Anvesh"
domain = "https://dranveshdharanikota.com"

# Exclude list (shared includes and non-pages)
exclude_files = [
    "header.php", "footer.php", "header-include.php", "icons.php",
    "router.php", "server-check.php", "404.php"
]

php_files = glob.glob(os.path.join(directory, "**", "*.php"), recursive=True)

sitemap_urls = []

for filepath in php_files:
    basename = os.path.basename(filepath)
    if basename in exclude_files:
        continue
    
    # Get relative path without .php
    rel_path = os.path.relpath(filepath, directory)
    rel_path = rel_path.replace("\\", "/")
    
    if rel_path == "index.php":
        url_path = "/"
        priority = "1.0"
    else:
        url_path = f"/{rel_path[:-4]}"
        priority = "0.8"
        
    if "services/" in url_path or "techniques/" in url_path:
        priority = "0.9"

    sitemap_urls.append(f"""  <url>
    <loc>{domain}{url_path}</loc>
    <changefreq>monthly</changefreq>
    <priority>{priority}</priority>
  </url>""")

sitemap_content = f"""<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
{"\n".join(sitemap_urls)}
</urlset>"""

with open(os.path.join(directory, "sitemap.xml"), "w", encoding="utf-8") as f:
    f.write(sitemap_content)

robots_content = f"""User-agent: *
Allow: /

Sitemap: {domain}/sitemap.xml
"""

with open(os.path.join(directory, "robots.txt"), "w", encoding="utf-8") as f:
    f.write(robots_content)

print("Generated sitemap.xml and robots.txt")
