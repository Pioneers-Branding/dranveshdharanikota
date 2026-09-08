# Dr. Anvesh Dharanikota — website

PHP, CSS and JavaScript. No framework, no build step, no Node, no database, no
dependencies. Edit a file, save it, upload it.

The PHP does one job: the parts every page shares — the `<head>`, the site
header and menu, the footer — live in one file each instead of being copied
into all thirty pages. Change the phone number in `footer.php` and it changes
everywhere. Nothing else about the site is dynamic.

Converted from the React (Vite) single-page application that ran at
dranveshdharanikota.com. Design, copy, imagery, URLs and behaviour are
unchanged; only the implementation changed.

## The shared files

| File | What it holds |
| --- | --- |
| `header.php` | The `<head>`, the icon sprite, the logo, the menu |
| `footer.php` | The footer, the floating chat button, the closing tags |
| `header-include.php` | Empty. Where tracking and verification codes go |
| `icons.php` | Every line icon the site uses |
| `css/custom.css` | Empty. Where your own CSS goes |

**To add Google Analytics, Google Tag Manager, a Search Console verification
tag or a Meta Pixel**, paste the snippet into `header-include.php` and save.
It appears on every page. Nothing else needs touching.

## Editing a page

Every page is one file, and it looks like this:

```php
<?php
$route       = '/about';
$title       = 'About Dr. Anvesh Dharanikota | Surgical Oncologist, Hyderabad';
$description = 'One sentence, used by Google and by link previews.';

require __DIR__ . '/header.php';
?>
        <div class="page page--default">
          <h1 class="page-title">About Dr. Anvesh</h1>
          ...
        </div>
<?php require __DIR__ . '/footer.php';
```

The settings at the top, then the page's own markup, then the footer line. The
markup in the middle is ordinary HTML: indented, one element per line, with
class names that say what the thing is. To change wording, edit the text.

Write titles and descriptions as plain text, with a real `&` rather than
`&amp;`. They are escaped on the way out.

`$route` is the page's address. It sets the canonical URL and tells the menu
which item to highlight, so it must match the file name: `services/hpb.php`
uses `'/services/hpb'`.

Optional settings, each with a sensible default:

| Variable | Default | Use it when |
| --- | --- | --- |
| `$og_title`, `$og_description` | the page title and description | the link preview should read differently |
| `$og_image` | `photos/anvesh.webp` | the page has its own preview image |
| `$og_type` | `article` | the homepage, which uses `website` |
| `$robots` | `index,follow` | hiding a page, with `noindex,follow` |
| `$schema` | none | the page carries Schema.org JSON-LD |
| `$show_chat` | `true` | hiding the chat button, as `404.php` does |

## Adding a page

Copy the closest existing page, change the settings at the top and replace the
markup. Then add it to `sitemap.xml`, and to the menu in `header.php` if it
belongs there. A new menu item highlights itself automatically.

## Running it locally

PHP includes a web server, so nothing needs installing beyond PHP itself:

```
php -S localhost:8000 router.php
```

Then open http://localhost:8000.

`router.php` is a development convenience, not part of the site. The built-in
server has no `.htaccess`, so on its own it would 404 on `/about` even though
`about.php` is sitting right there. The router applies the one rule the real
host applies, and serves `404.php` for a miss. Nothing on the server uses it.

Opening the files directly with `file://` will not work. PHP files must be run
by a server, and links and assets are written from the site root.

## URL policy

Every page keeps the exact address it had on the React site: no trailing slash
and no file extension. Each page is one `.php` file named after its route, and
the server maps the clean URL onto that file.

`/services/gi-thoracic` → `services/gi-thoracic.php` → responds 200

`.htaccess` (Apache or LiteSpeed, which is what Hostinger runs) sets
`DirectorySlash Off` and rewrites internally, so the clean URL never
redirects. It also 301s the addresses this site used before it was PHP, so old
links still land correctly. For Nginx:

```nginx
location / {
  try_files $uri $uri.php =404;
}
error_page 404 /404.php;
```

Links in the markup are written as the clean URL, root-absolute, exactly as a
visitor sees it: `<a href="/services/gi-thoracic">`. Renaming a page means
renaming one file, updating its `$route`, and updating the links to it.

A wrong address reaches `404.php` through a rewrite rule rather than through
`ErrorDocument`, because OpenLiteSpeed ignores `ErrorDocument` in `.htaccess`.
`404.php` therefore sends its own 404 status on the first line, so the page
answers 404 and not 200 however it was reached. `ErrorDocument` is still in
`.htaccess` for Apache; whichever the server honours, the visitor gets the same
page.

The rewrite rules sit at the top level of `.htaccess`, outside any `<IfModule>`
wrapper, for the same reason. Apache reads them either way, and OpenLiteSpeed
is more likely to see them there.

**The host must run PHP.** Any ordinary shared host does. Netlify does not, so
`netlify.toml` no longer applies; it is kept only in case the site ever goes
back to plain HTML.

## If every page 404s except the homepage

The rule that maps `/about` onto `about.php` is not running. The homepage still
works because the server serves `index.php` for `/` on its own, without being
told to. Two checks tell you which of the two causes it is:

1. Open `/about.php`, with the extension. If the About page loads, every file
   uploaded correctly. If it 404s too, the upload was incomplete.
2. Open `/index.php`. If `.htaccess` is being applied it bounces to `/` and
   drops the `index.php`. If it stays put, `.htaccess` is being ignored.

**If `.htaccess` is simply missing**, remember it is a hidden file, so File
Manager and most FTP clients skip it unless you switch hidden files on. Windows
also tends to save it as `htaccess.txt`, which the server ignores. Check that
it sits in the same folder as `index.php` and is named exactly `.htaccess`.

**If `.htaccess` is present and still ignored**, the web server is not reading
it. That is the situation this site is in. The host runs OpenLiteSpeed under
CyberPanel, which does not read `.htaccess` unless it is switched on.
`rewrite-rules.txt` in this folder has the fix, both the one setting that turns
`.htaccess` back on and a paste-ready copy of the rules for the panel's own
Rewrite Rules box.

`server-check.php` reports all of this at once. Upload it, open
`https://your-domain.com/server-check.php`, read it, then delete it from the
server. It is a temporary tool and is not part of the site.

The shared includes do not depend on any of this. `header.php`, `footer.php`,
`icons.php` and `header-include.php` each refuse a direct request in PHP, so
`/header.php` returns 403 whether or not `.htaccess` is being read.

## Layout

One page, one file. No folder is created just to hold a single page.

```
/
├── index.php                   homepage
├── about.php  awards.php  contact.php  faqs.php  gallery.php
├── media.php  publications.php  resources.php  testimonials.php
├── thank-you.php  videos.php
├── services.php                hub for the 11 service pages
├── techniques.php              hub for the 4 technique pages
├── 404.php  robots.txt  sitemap.xml
│
├── header.php                  shared: head, menu, icon sprite
├── footer.php                  shared: footer, chat button
├── header-include.php          shared: your tracking codes
├── icons.php                   shared: the icon sprite
│
├── .htaccess                   Apache / LiteSpeed
├── netlify.toml                no longer in use, see above
├── router.php                  local preview only
├── server-check.php            temporary diagnostic, delete after use
├── rewrite-rules.txt           notes for the host, not uploaded
├── services/                   11 pages, one file each
├── techniques/                 4 pages, one file each
├── css/style.css  css/custom.css
├── js/main.js
└── photos/                     49 images
```

`services/` and `techniques/` exist only because the pages inside them sit one
level down in the URL: `/services/hpb` is `services/hpb.php`.

Upload the whole folder, `.htaccess` included. `router.php`, `server-check.php`
and `README.md` are the only files the live site does not use. `.htaccess`
denies direct requests for the shared includes, so `/header.php` returns 403
rather than a stray fragment of markup.

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

The site uses 51 line icons. Rather than repeating the path data at each of the
1,321 places an icon appears, every page carries one hidden sprite and each icon
references it:

```html
<svg class="icon" aria-hidden="true"><use href="#i-calendar"></use></svg>
```

The sprite lives in `icons.php`, which `header.php` prints just inside
`.app-container` on every page. To add an icon, paste one more `<symbol>` into
that file and reference it the same way. Size and colour come from the class:
`.icon`, `.icon--sm`, `.icon--lg`, `.icon--accent`, `.icon--on-dark`.

Every page carries the whole sprite rather than only the icons visible in its
markup. That is deliberate: `js/main.js` swaps some icons in at runtime, so a
trimmed sprite would leave those references pointing at nothing. The FAQ
accordion is the clearest case — it trades `i-plus` for `i-minus` on click, and
`i-minus` appears nowhere in the markup. The cost is about 1.8KB per page once
the server gzips it.

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
