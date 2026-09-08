<?php
$route          = '/thank-you';
$title          = 'Appointment Request Received | Dr. Anvesh Dharanikota';
$description    = 'Your appointment request has been submitted successfully. Our team will review it and contact you within 24-48 hours to confirm your consultation.';
$og_title       = 'Thank You — Your Appointment Request Was Received';
$og_description = 'Our team will review your request and contact you within 24-48 hours to confirm your consultation with Dr. Anvesh Dharanikota in Hyderabad.';
$og_image       = 'https://dranveshdharanikota.com/photos/logo-anvesh.png';
$robots         = 'noindex,follow';

$schema = <<<'SCHEMA'
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/thank-you#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"Thank You","item":"https://dranveshdharanikota.com/thank-you"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","@id":"https://dranveshdharanikota.com/thank-you#webpage","url":"https://dranveshdharanikota.com/thank-you","name":"Thank You!","headline":"Thank You!","description":"Your appointment request has been submitted successfully. Our team will review your information and contact you within the next 24-48 hours to confirm your consultation.","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","@id":"https://dranveshdharanikota.com/#website","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/"},"breadcrumb":{"@id":"https://dranveshdharanikota.com/thank-you#breadcrumb"},"primaryImageOfPage":{"@type":"ImageObject","url":"https://dranveshdharanikota.com/photos/logo-anvesh.png","width":458,"height":116}}</script>
SCHEMA;

require __DIR__ . '/header.php';
?>
        <div class="row-5">
          <div class="card-12" data-reveal>
            <div class="icon-tile-15" data-reveal>
              <svg class="icon-20" aria-hidden="true"><use href="#i-check-circle"></use></svg>
            </div>
            <h1 class="title-6" data-reveal>Thank You!</h1>
            <p class="lede-10" data-reveal>Your appointment request has been submitted successfully. Our team will review your information and contact you within the next 24-48 hours to confirm your consultation.</p>
            <div class="header-7" data-reveal>
              <h3 class="subheading-9">What to Expect Next</h3>
              <ul class="stack-8">
                <li class="media-row"><span class="label-7">1.</span><span>You will receive a confirmation call or email from our team to finalize your appointment details.</span></li>
                <li class="media-row"><span class="label-7">2.</span><span>Please have your medical records and any relevant test results ready for the consultation.</span></li>
                <li class="media-row"><span class="label-7">3.</span><span>For urgent matters, please contact us directly via phone for immediate assistance.</span></li>
              </ul>
            </div>
            <div class="block-26" data-reveal>
              <div tabindex="0">
                <a class="button-13" href="/">
                  <svg class="icon icon--default" aria-hidden="true"><use href="#i-home"></use></svg>
                  <span>Return to Homepage</span>
                </a>
              </div>
              <div tabindex="0">
                <a href="tel:+919440233339" class="button-14">
                  <svg class="icon icon--default" aria-hidden="true"><use href="#i-phone"></use></svg>
                  <span>Call for Urgency</span>
                </a>
              </div>
            </div>
          </div>
        </div>
<?php require __DIR__ . '/footer.php';
