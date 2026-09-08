# Dr. Anvesh Dharanikota — website

Plain HTML, CSS and JavaScript. No framework, no build step, no Node, no
dependencies. Edit a file, save it, upload it.

Converted from the React (Vite) single-page application that ran at
dranveshdharanikota.com. Design, copy, imagery, URLs and behaviour are
unchanged; only the implementation changed.

## Editing it

Every page is a normal HTML file you can open and read. Markup is indented, one
element per line, with class names that say what the thing is:

```html
<section class="section">
  <div class="container">
    <h2 class="section-title">Understanding GI &amp; Thoracic Cancers</h2>
    <p class="lede">Gastrointestinal (GI) and thoracic oncology focuses on …</p>
  </div>
</section>
```

To change wording, edit the text. To change a colour or spacing, find the class
in `css/style.css` and edit the rule there. Nothing is generated at request
time and nothing needs compiling.

## Running it locally

With Python installed:

```
python serve.py
```

Then open http://localhost:8000.

`serve.py` is a development convenience, not part of the site. It exists
because `python -m http.server` has no `.html` fallback, so `/about` would 404
there even though `about.html` is sitting next to it. The script adds the same
rule the production hosts already apply, and serves `404.html` for a miss.
Nothing on the server needs it.

Opening the files directly with `file://` will not work, because links and
assets are written from the site root.

## URL policy

Every page keeps the exact address it had on the React site: no trailing slash
and no `.html` suffix. Each page is one file named after its route, and the
server maps the clean URL onto that file.

`/services/gi-thoracic` → `services/gi-thoracic.html` → responds 200

`.htaccess` (Apache or LiteSpeed, which is what Hostinger runs) sets
`DirectorySlash Off` and rewrites internally, so the clean URL never redirects.
`netlify.toml` covers Netlify, which behaves this way by default. For Nginx:

```nginx
location / {
  try_files $uri $uri.html =404;
}
error_page 404 /404.html;
```

Links in the markup are written as the clean URL, root-absolute, exactly as a
visitor sees it: `<a href="/services/gi-thoracic">`. Renaming a page means
renaming one file and updating the links that point at it.

## Layout

One page, one file. No folder is created just to hold a single page.

```
/
├── index.html                  homepage
├── about.html  awards.html  contact.html  faqs.html  gallery.html
├── media.html  publications.html  resources.html  testimonials.html
├── thank-you.html  videos.html
├── services.html               hub for the 11 service pages
├── techniques.html             hub for the 4 technique pages
├── 404.html  robots.txt  sitemap.xml
├── .htaccess                   Apache / LiteSpeed
├── netlify.toml                Netlify
├── serve.py                    local preview only, not uploaded
├── services/                   11 pages, one file each
├── techniques/                 4 pages, one file each
├── css/style.css
├── js/main.js
└── photos/                     49 images
```

`services/` and `techniques/` exist only because the pages inside them sit one
level down in the URL: `/services/hpb` is `services/hpb.html`.

Upload the whole folder. `serve.py` and `README.md` are the only files the site
does not use; leaving them in place does no harm, since a static host serves
them and nothing links to either.

## The stylesheet

`css/style.css` is organised in four labelled sections:

1. **Base** — browser reset, element defaults, keyframes.
2. **Components** — one rule per named object: `.site-header`, `.nav-link`,
   `.card`, `.btn`, `.accordion__trigger`, `.section-title` and so on. This is
   where almost every visual change belongs.
3. **Behaviour and accessibility** — the scroll reveal, the accordion collapse,
   the skip link, focus rings, reduced-motion handling.
4. **Built by the script** — the gallery lightbox, the video modal, and the
   state classes the script toggles.

Naming follows a light BEM convention. A base class carries what every variant
shares; a modifier carries only what differs:

```css
.btn            { /* shared */ }
.btn.btn--primary { /* the filled version only */ }
```

State is a separate class the script adds and removes: `.is-open`,
`.is-active`, `.is-current`, `.is-hidden`, `.is-revealed`. The script never
rewrites a `class` attribute wholesale, so markup and styling stay separable.

## Icons

The site uses 50 line icons. Rather than repeating the path data at each of the
1,321 places an icon appears, each page carries one hidden sprite and every icon
references it:

```html
<svg class="icon" aria-hidden="true"><use href="#i-calendar"></use></svg>
```

The sprite sits just inside `.app-container` at the top of each page. To add an
icon, add a `<symbol>` to that sprite and reference it the same way. Size and
colour come from the class: `.icon`, `.icon--sm`, `.icon--lg`, `.icon--accent`,
`.icon--on-dark`.

## The script

`js/main.js` is about 500 lines of plain JavaScript with no libraries. It
replaces React, React DOM, React Router and framer-motion:

| Behaviour | Function |
| --- | --- |
| Mobile menu, Escape to close, closes on desktop resize | `initMobileMenu` |
| Header dropdowns, hover and keyboard, ARIA state | `initDropdowns` |
| FAQ accordions, plus/minus swap, height animation | `initAccordions` |
| Services and FAQ filters plus FAQ search, one pass | `initFilters` |
| Testimonial video rail | `initVideoRail` |
| Gallery lightbox, arrow keys, focus trap | `initGallery` |
| Video modal on the video and media pages | `initVideoModal` |
| Floating chat widget and WhatsApp buttons | `initWhatsApp` |
| Get Directions | `initDirections` |
| Scroll reveal | `initReveal` |
| Smooth in-page anchors offset by the fixed header | `initAnchors` |
| YouTube thumbnail fallback | `initThumbFallback` |
| Appointment form validation | `initForm` |

With JavaScript disabled every page still renders complete: reveal animations
are gated behind a `js` class set inline in the head, and FAQ answers stay open
rather than collapsed and unreachable.

## Carried over from the React site, needs a content decision

These are faults in the original site, not in the conversion. They were left
alone because fixing them means supplying content, which is the practice's call.

1. **Eleven of the fourteen Video Library entries point at YouTube IDs that do
   not exist.** Only `y40uIAvMTQg`, `thPQzJ22h9Q` and `15hNmkBJsBM` resolve, and
   their real titles do not match the titles shown on the page. The other eleven
   return YouTube's grey placeholder. All four patient testimonial videos are
   fine. Replace the eleven IDs, or remove those cards.
2. **The footer links to `/privacy`, `/terms` and `/disclaimer` on every page,
   and none of those pages exist.** They now reach the 404 page. Supply the
   three pages or drop the links.
3. **The "Google Scholar" card on `/publications` has `href="#"`.** It needs the
   real profile URL or it should stop being a link.
4. **The FAQ plus/minus icon on service pages has no circle behind it.** The
   React source wrote its class names with spaces inside them, so they never
   applied. The appearance is preserved as-is; the class is
   `.accordion__icon--unstyled` if you want the two to match.
5. **Four stock photographs on `/techniques` are hot-linked from Unsplash.** A
   fifth already stopped loading and now uses the site's own `CRS-HIPEC.webp`.
   Copying the rest into `photos/` would remove the risk.
6. **Footer links are 20px tall**, under the 24px minimum target size in
   WCAG 2.2. It comes from the original footer spacing.
7. **Heading levels skip in a few places**, inherited from the React markup and
   left alone so the document outline is unchanged.

## Note on `.htaccess`

It forces HTTPS and strips `www`, matching the canonical tags. If the host
already does this, delete that block. The HTTPS rule checks both `%{HTTPS}` and
`X-Forwarded-Proto` so it cannot loop behind a TLS-terminating proxy.
