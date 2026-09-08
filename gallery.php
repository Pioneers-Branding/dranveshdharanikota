<?php
$route          = '/gallery';
$title          = 'Facility & Practice Photo Gallery | Dr. Anvesh Dharanikota';
$description    = 'A visual tour of the advanced facilities, surgical procedures and patient care environments at Dr. Anvesh Dharanikota\'s practice in Gachibowli.';
$og_title       = 'Facility & Practice Gallery - Dr. Anvesh Dharanikota';
$og_description = 'A visual tour of the facilities, surgical procedures and patient care environments at the surgical oncology practice of Dr. Anvesh Dharanikota, Arete Hospitals.';
$og_image       = 'https://dranveshdharanikota.com/photos/gallery/image-1.webp';

$schema = <<<'SCHEMA'
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/gallery#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"Gallery","item":"https://dranveshdharanikota.com/gallery"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":["WebPage","ImageGallery"],"@id":"https://dranveshdharanikota.com/gallery#webpage","url":"https://dranveshdharanikota.com/gallery","name":"Facility and Practice Gallery","headline":"Facility and Practice Gallery","description":"A visual tour of our advanced facilities, surgical procedures, and patient care environments.","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","@id":"https://dranveshdharanikota.com/#website","url":"https://dranveshdharanikota.com/","name":"Dr. Anvesh Dharanikota"},"breadcrumb":{"@id":"https://dranveshdharanikota.com/gallery#breadcrumb"},"primaryImageOfPage":{"@type":"ImageObject","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-1.webp","width":800,"height":600},"about":{"@type":"Physician","@id":"https://dranveshdharanikota.com/#physician","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/"},"publisher":{"@id":"https://dranveshdharanikota.com/#physician"},"mainEntity":{"@id":"https://dranveshdharanikota.com/gallery#imagelist"}}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"ItemList","@id":"https://dranveshdharanikota.com/gallery#imagelist","name":"Facility and Practice Gallery","description":"Photographs from the facility and practice gallery of Dr. Anvesh Dharanikota: a visual tour of advanced facilities, surgical procedures, and patient care environments.","numberOfItems":14,"itemListOrder":"https://schema.org/ItemListOrderAscending","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 1","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-1.webp","width":800,"height":600}},{"@type":"ListItem","position":2,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 2","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-2.webp","width":800,"height":600}},{"@type":"ListItem","position":3,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 3","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-3.webp","width":800,"height":600}},{"@type":"ListItem","position":4,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 4","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-4.webp","width":800,"height":600}},{"@type":"ListItem","position":5,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 5","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-5.webp","width":800,"height":600}},{"@type":"ListItem","position":6,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 6","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-6.webp","width":800,"height":600}},{"@type":"ListItem","position":7,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 7","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-7.webp","width":800,"height":600}},{"@type":"ListItem","position":8,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 8","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-8.webp","width":800,"height":600}},{"@type":"ListItem","position":9,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 9","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-9.webp","width":800,"height":600}},{"@type":"ListItem","position":10,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 10","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-10.webp","width":800,"height":600}},{"@type":"ListItem","position":11,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 11","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-11.webp","width":800,"height":600}},{"@type":"ListItem","position":12,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 12","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-12.webp","width":800,"height":600}},{"@type":"ListItem","position":13,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 13","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-13.webp","width":800,"height":600}},{"@type":"ListItem","position":14,"item":{"@type":"ImageObject","name":"Facility and practice gallery photo 14","contentUrl":"https://dranveshdharanikota.com/photos/gallery/image-14.webp","width":800,"height":600}}]}</script>
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
                <div class="block-8 luxury-card group" data-gallery-index="0" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-1.webp" alt="Photo 1 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="1" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-2.webp" alt="Photo 2 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="2" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-3.webp" alt="Photo 3 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="3" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-4.webp" alt="Photo 4 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="4" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-5.webp" alt="Photo 5 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="5" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-6.webp" alt="Photo 6 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="6" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-7.webp" alt="Photo 7 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="7" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-8.webp" alt="Photo 8 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="8" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-9.webp" alt="Photo 9 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="9" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-10.webp" alt="Photo 10 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="10" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-11.webp" alt="Photo 11 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="11" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-12.webp" alt="Photo 12 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="12" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-13.webp" alt="Photo 13 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-gallery-index="13" role="button" tabindex="0" aria-haspopup="dialog" data-reveal>
                  <div class="card-6">
                    <div class="block-7">
                      <img src="/photos/gallery/image-14.webp" alt="Photo 14 of 14 from the facility and practice gallery of Dr. Anvesh Dharanikota" class="zoom-image" width="800" height="600" loading="lazy" decoding="async">
                      <div class="decoration">
                        <svg class="key-areas-expertise__icon" aria-hidden="true"><use href="#i-maximize"></use></svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/footer.php';
