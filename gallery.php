<?php
$route          = '/gallery';
$title          = 'Facility & Practice Photo Gallery | Dr. Anvesh Dharanikota';
$description    = 'A visual tour of the advanced facilities, surgical procedures and patient care environments at Dr. Anvesh Dharanikota\'s practice in Gachibowli.';
$og_title       = 'Facility & Practice Gallery - Dr. Anvesh Dharanikota';
$og_description = 'A visual tour of the facilities, surgical procedures and patient care environments at the surgical oncology practice of Dr. Anvesh Dharanikota, Arete Hospitals.';
$og_image       = 'https://dranveshdharanikota.com/photos/gallery/image-1.webp';

$galleryDir = __DIR__ . '/photos/gallery/';
$images = array_diff(scandir($galleryDir), array('..', '.'));
$valid_extensions = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
$gallery_images = [];
foreach ($images as $img) {
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    if (in_array($ext, $valid_extensions)) {
        $gallery_images[] = $img;
    }
}
$gallery_images = array_values($gallery_images);

$itemListElement = [];
foreach($gallery_images as $index => $imgName) {
    $itemListElement[] = [
        "@type" => "ListItem",
        "position" => $index + 1,
        "item" => [
            "@type" => "ImageObject",
            "name" => "Facility and practice gallery photo " . ($index + 1),
            "contentUrl" => "https://dranveshdharanikota.com/photos/gallery/" . $imgName,
            "width" => 800,
            "height" => 600
        ]
    ];
}

$schemaJSON1 = '{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/gallery#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"Gallery","item":"https://dranveshdharanikota.com/gallery"}]}';
$schemaJSON2 = '{"@context":"https://schema.org","@type":["WebPage","ImageGallery"],"@id":"https://dranveshdharanikota.com/gallery#webpage","url":"https://dranveshdharanikota.com/gallery","name":"Facility and Practice Gallery","headline":"Facility and Practice Gallery","description":"A visual tour of our advanced facilities, surgical procedures, and patient care environments.","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","@id":"https://dranveshdharanikota.com/#website","url":"https://dranveshdharanikota.com/","name":"Dr. Anvesh Dharanikota"},"breadcrumb":{"@id":"https://dranveshdharanikota.com/gallery#breadcrumb"},"primaryImageOfPage":{"@type":"ImageObject","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-1.webp","width":800,"height":600},"about":{"@type":"Physician","@id":"https://dranveshdharanikota.com/#physician","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/"},"publisher":{"@id":"https://dranveshdharanikota.com/#physician"},"mainEntity":{"@id":"https://dranveshdharanikota.com/gallery#imagelist"}}';
$schemaJSON3 = json_encode([
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "@id" => "https://dranveshdharanikota.com/gallery#imagelist",
    "name" => "Facility and Practice Gallery",
    "description" => "Photographs from the facility and practice gallery of Dr. Anvesh Dharanikota: a visual tour of advanced facilities, surgical procedures, and patient care environments.",
    "numberOfItems" => count($gallery_images),
    "itemListOrder" => "https://schema.org/ItemListOrderAscending",
    "itemListElement" => $itemListElement
], JSON_UNESCAPED_SLASHES);

$schema = <<<SCHEMA
    <script type="application/ld+json">{$schemaJSON1}</script>
    <script type="application/ld+json">{$schemaJSON2}</script>
    <script type="application/ld+json">{$schemaJSON3}</script>
SCHEMA;

require __DIR__ . '/header.php';
?>
        <div class="page page--default">
          <section class="facility-practice-gallery__section" style="background: linear-gradient(to right, rgb(114, 5, 9), rgb(0, 32, 80))">
            <div class="breadcrumb-bar">
              <nav aria-label="Breadcrumb">
                <ol class="breadcrumb__list">
                  <li class="header__link">
                    <div tabindex="0">
                      <a class="breadcrumb__link" href="/">
                        <svg class="icon icon--sm icon--leading" aria-hidden="true"><use href="#i-home"></use></svg>
                        Home
                      </a>
                    </div>
                  </li>
                  <li class="header__link">
                    <svg class="breadcrumb__separator" aria-hidden="true"><use href="#i-chevron-right"></use></svg>
                    <span class="breadcrumb__current"> Gallery </span>
                  </li>
                </ol>
              </nav>
            </div>
            <div class="container container--relative">
              <div class="block-27" data-reveal>
                <div class="eyebrow eyebrow--on-dark" data-reveal><span class="label-3">GALLERY</span></div>
                <h1 class="page-title page-title--on-dark"> Facility and Practice Gallery </h1>
                <p class="page-lede page-lede--on-dark"> A visual tour of our advanced facilities, surgical procedures, and patient care environments. </p>
              </div>
            </div>
          </section>
          <section class="section-16">
            <div class="container container--relative">
              <div class="grid-10">
                <?php foreach ($gallery_images as $index => $img): ?>
                <div class="block-8 luxury-card group" data-gallery-index="<?php echo $index; ?>" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/<?php echo htmlspecialchars($img); ?>" alt="Photo <?php echo $index + 1; ?> of <?php echo count($gallery_images); ?> from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" <?php echo $index > 0 ? 'loading="lazy" ' : ''; ?>decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/footer.php';
