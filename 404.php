<?php
// Send the 404 status from PHP rather than relying on the server's
// ErrorDocument setting. OpenLiteSpeed ignores ErrorDocument in .htaccess, so
// on that server this page is reached by a rewrite instead, and a rewrite on
// its own would answer 200 and tell Google the missing page exists.
// Harmless when Apache does use ErrorDocument: the status is already 404.
http_response_code(404);

$route          = '/404';
$title          = 'Page Not Found | Dr. Anvesh Dharanikota';
$description    = 'The page you are looking for could not be found. Browse surgical oncology services, techniques and patient resources from Dr. Anvesh Dharanikota in Hyderabad.';
$og_description = 'The page you are looking for could not be found.';
$robots         = 'noindex,follow';
$show_chat      = false;   // no chat button on the error page

require __DIR__ . '/header.php';
?>
        <div class="page page--default">
          <section class="resources__section">
            <div class="container-6">
              <h1 class="page-title page-title--default">Page Not Found</h1>
              <p class="lede-11">The page you are looking for does not exist or has moved.</p>
              <div class="block-33"><a class="button-17" href="/">Back to Home</a><a class="button-18" href="/services">Browse Services</a><a class="button-18" href="/contact">Contact the Clinic</a></div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/footer.php';
