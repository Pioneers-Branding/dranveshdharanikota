<?php
$route          = '/resources';
$title          = 'Patient Resources & Education | Dr. Anvesh Dharanikota';
$description    = 'Browse patient resources from Dr. Anvesh Dharanikota: gallery, video library, media coverage, FAQs, research publications and patient testimonials.';
$og_title       = 'Resources | Dr. Anvesh Dharanikota, Surgical Oncologist';
$og_description = 'Educational materials and patient resources from Dr. Anvesh Dharanikota — gallery, video library, media and press, FAQs, publications and patient testimonials.';

$schema = <<<'SCHEMA'
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/resources#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"Resources","item":"https://dranveshdharanikota.com/resources"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"CollectionPage","@id":"https://dranveshdharanikota.com/resources#webpage","url":"https://dranveshdharanikota.com/resources","name":"Resources","headline":"Resources","description":"Educational materials and patient resources from Dr. Anvesh Dharanikota, Senior Consultant Surgical Oncologist.","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","@id":"https://dranveshdharanikota.com/#website","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/"},"breadcrumb":{"@id":"https://dranveshdharanikota.com/resources#breadcrumb"},"about":{"@type":"Physician","@id":"https://dranveshdharanikota.com/#physician","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/"},"primaryImageOfPage":{"@type":"ImageObject","url":"https://dranveshdharanikota.com/photos/anvesh.webp"},"mainEntity":{"@id":"https://dranveshdharanikota.com/resources#resource-list"}}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"ItemList","@id":"https://dranveshdharanikota.com/resources#resource-list","name":"Patient Resources","description":"Educational materials and patient resources","itemListOrder":"https://schema.org/ItemListUnordered","numberOfItems":4,"itemListElement":[{"@type":"ListItem","position":1,"name":"Gallery","url":"https://dranveshdharanikota.com/gallery"},{"@type":"ListItem","position":2,"name":"Video Library","url":"https://dranveshdharanikota.com/videos"},{"@type":"ListItem","position":3,"name":"Media & Press","url":"https://dranveshdharanikota.com/media"},{"@type":"ListItem","position":4,"name":"FAQs","url":"https://dranveshdharanikota.com/faqs"}]}</script>
SCHEMA;

require __DIR__ . '/header.php';
?>
        <div class="page page--default">
          <section class="resources__section">
            <div class="resources__container">
              <h1 class="page-title page-title--default">Resources</h1>
              <p class="resources__lede">Educational materials and patient resources</p>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/footer.php';
