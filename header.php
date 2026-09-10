<?php
/**
 * Everything above the page content: the <head>, the icon sprite, the site
 * header and the navigation. Every page starts by requiring this file.
 *
 * A page sets a few variables and then requires it:
 *
 *     <?php
 *     $route       = '/about';
 *     $title       = 'About Dr. Anvesh Dharanikota | ...';
 *     $description = 'One sentence for Google and for link previews.';
 *     require __DIR__ . '/header.php';
 *     ?>
 *     ... the page content ...
 *     <?php require __DIR__ . '/footer.php';
 *
 * Only $route, $title and $description are worth setting on an ordinary page.
 * Everything else below has a sensible default.
 *
 * To change the logo, the menu or anything else that appears on every page,
 * edit the markup further down this file once. To add a tracking code, put it
 * in header-include.php instead and leave this file alone.
 */

// This file is an include, not a page. Refuse a direct request for it. The
// check is here rather than only in .htaccess so that it still holds on a
// server that ignores .htaccess.
if (realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'] ?? '')) {
    http_response_code(403);
    exit('Forbidden');
}

$site_url = 'https://dranveshdharanikota.com';

// ---------------------------------------------------------------------------
// Page settings, with the default used when a page does not set one.
// ---------------------------------------------------------------------------
$route       = $route       ?? '/';            // the address, e.g. '/services/hpb'
$title       = $title       ?? 'Dr. Anvesh Dharanikota';
$description = $description ?? '';
$robots      = $robots      ?? 'index,follow'; // 'noindex,follow' to hide a page
$og_type     = $og_type     ?? 'article';      // 'website' on the homepage only

// Link-preview text. Defaults to the page title and description, so most pages
// never set these; set them when the preview should read differently.
$og_title       = $og_title       ?? $title;
$og_description = $og_description ?? $description;
$og_image       = $og_image       ?? $site_url . '/photos/anvesh.webp';

// Schema.org JSON-LD for this page. See any page file for the shape.
$schema = $schema ?? '';

// The floating WhatsApp chat button. The 404 page turns it off.
$show_chat = $show_chat ?? true;

// The canonical address is always the site plus the route, so it is derived
// rather than repeated on every page.
$canonical = $site_url . $route;

/**
 * A stylesheet or script URL with the file's modification time appended.
 *
 * .htaccess tells browsers to keep CSS and JS for a year and marks them
 * immutable, which is right for speed but means an edit would otherwise not
 * reach anyone who had already loaded the site. Changing the file changes the
 * URL, so the new version is fetched at once and an unchanged one still comes
 * from cache. Nothing needs doing by hand after an edit.
 */
function asset($path)
{
    $file = __DIR__ . $path;
    return is_file($file) ? $path . '?v=' . filemtime($file) : $path;
}

/**
 * Mark the link to the current page in the navigation.
 *
 * The menu below is written as plain HTML, with no PHP mixed into it, so it
 * stays easy to read and edit. This function takes that markup and adds the
 * is-current class and aria-current="page" to whichever link points at the
 * page being shown. Add a menu item and it is handled automatically.
 */
function dr_mark_current_nav($html, $route)
{
    $h = e($route);
    $rules = array(
        // desktop: a plain top-level link
        '<a class="nav-link nav-link--default" href="' . $h . '">'
            => '<a class="nav-link is-current" aria-current="page" href="' . $h . '">',
        // desktop: a top-level link that also opens a dropdown
        '<a class="nav-link nav-link--parent" href="' . $h . '" aria-expanded='
            => '<a class="nav-link nav-link--parent is-current" href="' . $h . '" aria-current="page" aria-expanded=',
        // desktop: an item inside a dropdown
        '<a class="dropdown-link" href="' . $h . '">'
            => '<a class="dropdown-link" href="' . $h . '" aria-current="page">',
        // mobile menu: a section heading link
        '<a class="mobile-nav__link mobile-nav__link--default" href="' . $h . '">'
            => '<a class="mobile-nav__link is-current" href="' . $h . '" aria-current="page">',
        // mobile menu: an item under a heading
        '<a class="mobile-nav__sublink mobile-nav__sublink--default" href="' . $h . '">'
            => '<a class="mobile-nav__sublink is-current" href="' . $h . '" aria-current="page">',
    );
    return str_replace(array_keys($rules), array_values($rules), $html);
}

/**
 * Print a value into markup, escaped so that &, <, > and a double quote
 * cannot break out of the attribute they sit in.
 *
 * Write titles and descriptions as ordinary text in the page files, with a
 * real & rather than &amp;. This turns it into &amp; on the way out.
 */
function e($value)
{
    return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta name="robots" content="<?= e($robots) ?>">
    <meta name="author" content="Dr. Anvesh Dharanikota">
    <link rel="icon" type="image/png" href="/photos/favicon.png">
    <link rel="apple-touch-icon" href="/photos/favicon.png">
    <meta name="theme-color" content="#720509">
    <meta property="og:type" content="<?= e($og_type) ?>">
    <meta property="og:site_name" content="Dr. Anvesh Dharanikota">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="<?= e($og_title) ?>">
    <meta property="og:description" content="<?= e($og_description) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e($og_image) ?>">
    <meta property="og:image:alt" content="<?= e($og_title) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($og_title) ?>">
    <meta name="twitter:description" content="<?= e($og_description) ?>">
    <meta name="twitter:image" content="<?= e($og_image) ?>">
    <meta name="geo.region" content="IN-TG">
    <meta name="geo.placename" content="Gachibowli, Hyderabad">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(asset('/css/style.css')) ?>">
    <link rel="stylesheet" href="<?= e(asset('/css/custom.css')) ?>">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">
    <script>document.documentElement.className+=" js";</script>
<?php if ($schema !== '') { echo $schema, "\n"; } ?>
<?php require __DIR__ . '/header-include.php'; ?>
  </head>
  <body>
    <div class="app-container">
<?php require __DIR__ . '/icons.php'; ?>
<?php
// The navigation is plain HTML. dr_mark_current_nav() adds the current-page
// marker afterwards, which is why no PHP appears inside the menu itself.
ob_start();
?>
      <a class="skip-link" href="#main-content">Skip to main content</a>
      <header class="site-header">
        <div class="container container--default">
          <div class="site-header__bar">
            <div class="inline-row inline-row--default">
              <a class="header__link" href="/" aria-label="Dr. Anvesh Dharanikota - home">
                <img src="/photos/logo-anvesh.png" alt="Dr. Anvesh Dharanikota" class="header__image" width="458" height="163" fetchpriority="high" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                <div class="logo-fallback" aria-hidden="true"><span class="header__label">DA</span></div>
              </a>
            </div>
            <nav class="primary-nav" aria-label="Primary">
              <div class="relative-box group">
                <a class="nav-link nav-link--default" href="/">Home</a>
              </div>
              <div class="relative-box group" data-nav-group>
                <div class="relative-box">
                  <a class="nav-link nav-link--parent" href="/about" aria-expanded="false" aria-haspopup="true" aria-controls="nav-dd-1">
                    <span>About</span>
                    <svg class="icon icon--sm" aria-hidden="true"><use href="#i-chevron-down"></use></svg>
                  </a>
                  <div class="dropdown-panel nav-dropdown" id="nav-dd-1">
                    <div>
                      <a class="dropdown-link" href="/about">About Dr. Anvesh</a>
                      <a class="dropdown-link" href="/awards">Awards &amp; Honors</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative-box group" data-nav-group>
                <div class="relative-box">
                  <a class="nav-link nav-link--parent" href="/services" aria-expanded="false" aria-haspopup="true" aria-controls="nav-dd-2">
                    <span>Services</span>
                    <svg class="icon icon--sm" aria-hidden="true"><use href="#i-chevron-down"></use></svg>
                  </a>
                  <div class="dropdown-panel nav-dropdown" id="nav-dd-2">
                    <div>
                      <a class="dropdown-link" href="/services/gi-thoracic">GI &amp; Thoracic Overview</a>
                      <a class="dropdown-link" href="/services/esophageal-cancer-treatment-hyderabad">Esophageal Cancer</a>
                      <a class="dropdown-link" href="/services/stomach-gastric-cancer-treatment-hyderabad">Stomach (Gastric) Cancer</a>
                      <a class="dropdown-link" href="/services/colorectal-cancer-treatment-hyderabad">Colorectal Cancer</a>
                      <a class="dropdown-link" href="/services/hpb-liver-pancreatic-cancer-treatment-hyderabad">HPB (Liver,Pancreas,Gallbladder)</a>
                      <a class="dropdown-link" href="/services/lung-cancer-treatment-hyderabad">Lung Cancer</a>
                      <a class="dropdown-link" href="/services/gynecologic-cancer-treatment-hyderabad">Gynecologic Oncology</a>
                      <a class="dropdown-link" href="/services/head-neck-cancer-treatment-hyderabad">Head &amp; Neck Oncology</a>
                      <a class="dropdown-link" href="/services/urological-cancer-treatment-hyderabad">Uro-Oncology</a>
                      <a class="dropdown-link" href="/services/bone-cancer-treatment-hyderabad">Musculoskeletal Oncology</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative-box group" data-nav-group>
                <div class="relative-box">
                  <a class="nav-link nav-link--parent" href="/techniques" aria-expanded="false" aria-haspopup="true" aria-controls="nav-dd-3">
                    <span>Key Techniques</span>
                    <svg class="icon icon--sm" aria-hidden="true"><use href="#i-chevron-down"></use></svg>
                  </a>
                  <div class="dropdown-panel nav-dropdown" id="nav-dd-3">
                    <div>
                      <a class="dropdown-link" href="/techniques/robotic-surgery">Robotic Surgery</a>
                      <a class="dropdown-link" href="/techniques/crs-hipec">CRS &amp; HIPEC</a>
                      <a class="dropdown-link" href="/techniques/vats">VATS (Thoracic)</a>
                      <a class="dropdown-link" href="/services/breast-cancer-treatment-hyderabad">Breast Oncoplastic Surgery</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative-box group" data-nav-group>
                <div class="relative-box">
                  <a class="nav-link nav-link--parent" href="/resources" aria-expanded="false" aria-haspopup="true" aria-controls="nav-dd-4">
                    <span>Resources</span>
                    <svg class="icon icon--sm" aria-hidden="true"><use href="#i-chevron-down"></use></svg>
                  </a>
                  <div class="dropdown-panel nav-dropdown" id="nav-dd-4">
                    <div>
                      <a class="dropdown-link" href="/publications">Research &amp; Publications</a>
                      <a class="dropdown-link" href="/media">Media &amp; Press</a>
                      <a class="dropdown-link" href="/videos">Video Library</a>
                      <a class="dropdown-link" href="/testimonials">Testimonials</a>
                      <a class="dropdown-link" href="/gallery">Gallery</a>
                      <a class="dropdown-link" href="/faqs">FAQs</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative-box group">
                <a class="nav-link nav-link--default" href="/contact">Contact</a>
              </div>
            </nav>
            <button type="button" class="menu-toggle" id="mobile-menu-toggle" aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu"><span data-icon="open"><svg class="icon icon--md" aria-hidden="true"><use href="#i-menu"></use></svg></span><span data-icon="close" hidden><svg class="icon icon--md" aria-hidden="true"><use href="#i-x"></use></svg></span></button>
          </div>
          <div class="mobile-nav" id="mobile-menu" hidden>
            <div class="stack stack--xs">
              <a class="mobile-nav__link mobile-nav__link--default" href="/">Home</a>
            </div>
            <div class="stack stack--xs">
              <a class="mobile-nav__link mobile-nav__link--default" href="/about">About</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/about">About Dr. Anvesh</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/awards">Awards &amp; Honors</a>
            </div>
            <div class="stack stack--xs">
              <a class="mobile-nav__link mobile-nav__link--default" href="/services">Services</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/gi-thoracic">GI &amp; Thoracic Overview</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/esophageal-cancer-treatment-hyderabad">Esophageal Cancer</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/stomach-gastric-cancer-treatment-hyderabad">Stomach (Gastric) Cancer</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/colorectal-cancer-treatment-hyderabad">Colorectal Cancer</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/hpb-liver-pancreatic-cancer-treatment-hyderabad">HPB (Liver,Pancreas,Gallbladder)</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/lung-cancer-treatment-hyderabad">Lung Cancer</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/gynecologic-cancer-treatment-hyderabad">Gynecologic Oncology</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/head-neck-cancer-treatment-hyderabad">Head &amp; Neck Oncology</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/urological-cancer-treatment-hyderabad">Uro-Oncology</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/bone-cancer-treatment-hyderabad">Musculoskeletal Oncology</a>
            </div>
            <div class="stack stack--xs">
              <a class="mobile-nav__link mobile-nav__link--default" href="/techniques">Key Techniques</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/techniques/robotic-surgery">Robotic Surgery</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/techniques/crs-hipec">CRS &amp; HIPEC</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/techniques/vats">VATS (Thoracic)</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/services/breast-cancer-treatment-hyderabad">Breast Oncoplastic Surgery</a>
            </div>
            <div class="stack stack--xs">
              <a class="mobile-nav__link mobile-nav__link--default" href="/resources">Resources</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/publications">Research &amp; Publications</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/media">Media &amp; Press</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/videos">Video Library</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/testimonials">Testimonials</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/gallery">Gallery</a>
              <a class="mobile-nav__sublink mobile-nav__sublink--default" href="/faqs">FAQs</a>
            </div>
            <div class="stack stack--xs">
              <a class="mobile-nav__link mobile-nav__link--default" href="/contact">Contact</a>
            </div>
          </div>
        </div>
      </header>
<?php
echo dr_mark_current_nav(ob_get_clean(), $route);
?>
      <main id="main-content" tabindex="-1">
