<?php
/**
 * Extra code for the <head> of every page.
 *
 * header.php includes this file just before </head>, so whatever you put here
 * appears on every page of the site. This is the place for anything you are
 * told to "paste into the header":
 *
 *   - Google Analytics / Google tag (gtag.js)
 *   - Google Tag Manager
 *   - Google Search Console verification
 *   - Meta (Facebook) Pixel
 *   - Any other tracking or verification snippet
 *
 * Paste the snippet below the ?> on the next line, exactly as it was given to
 * you, tags and all. Nothing else in the site needs to change.
 *
 * Leave this file otherwise empty. Do not print anything visible from here:
 * it runs inside <head>, where visible output would break the page.
 *
 * Example, once you have a real measurement id:
 *
 *   <!-- Google tag (gtag.js) -->
 *   <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX"></script>
 *   <script>
 *     window.dataLayer = window.dataLayer || [];
 *     function gtag(){dataLayer.push(arguments);}
 *     gtag('js', new Date());
 *     gtag('config', 'G-XXXXXXX');
 *   </script>
 */

// This file is an include, not a page. Refuse a direct request for it.
if (realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'] ?? '')) {
    http_response_code(403);
    exit('Forbidden');
}
?>
