<?php
$route          = '/testimonials';
$title          = 'Patient Testimonials & Reviews | Dr. Anvesh Dharanikota';
$description    = 'Watch video testimonials and read written reviews from patients of Dr. Anvesh Dharanikota, surgical oncologist in Hyderabad, sharing their care and recovery.';
$og_title       = 'Patient Testimonials – Dr. Anvesh Dharanikota';
$og_description = 'Real stories from patients of Dr. Anvesh Dharanikota — video testimonials and written reviews about their surgery, care and recovery.';

$schema = <<<'SCHEMA'
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/testimonials#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"Testimonials","item":"https://dranveshdharanikota.com/testimonials"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"MedicalWebPage","@id":"https://dranveshdharanikota.com/testimonials#webpage","url":"https://dranveshdharanikota.com/testimonials","name":"Patient Testimonials","headline":"Patient Testimonials","description":"Real stories from patients who experienced exceptional care and successful outcomes, shared as video testimonials and written reviews.","inLanguage":"en-IN","breadcrumb":{"@id":"https://dranveshdharanikota.com/testimonials#breadcrumb"},"isPartOf":{"@type":"WebSite","@id":"https://dranveshdharanikota.com/#website","url":"https://dranveshdharanikota.com/","name":"Dr. Anvesh Dharanikota"},"about":{"@type":"Physician","@id":"https://dranveshdharanikota.com/#physician","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/","medicalSpecialty":"https://schema.org/Oncologic","telephone":"+91-9440233339","email":"dr.anveshdharanikota@gmail.com","address":{"@type":"PostalAddress","streetAddress":"Arete Hospitals, OP Room No. 17, B-Wing, Ground Floor, CHR Lane, Rd Number 1, Colony, Gachibowli","addressLocality":"Hyderabad","addressRegion":"Telangana","postalCode":"500032","addressCountry":"IN"},"sameAs":["https://in.linkedin.com/in/dranveshdharanikotacancerspecialist","https://www.researchgate.net/profile/Anvesh-Dharanikota","https://orcid.org/0000-0001-7404-3239"]},"mainEntity":{"@id":"https://dranveshdharanikota.com/testimonials#video-testimonials"}}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"ItemList","@id":"https://dranveshdharanikota.com/testimonials#video-testimonials","name":"Video Testimonials","description":"Video stories shared by patients of Dr. Anvesh Dharanikota.","numberOfItems":4,"itemListOrder":"https://schema.org/ItemListOrderAscending","itemListElement":[{"@type":"ListItem","position":1,"name":"Patient from Somalia Shares His Experience","url":"https://www.youtube.com/watch?v=4sv_Y7YMCrk"},{"@type":"ListItem","position":2,"name":"Heartfelt Patient Testimonial for Dr. Anvesh","url":"https://www.youtube.com/watch?v=hOVGD2YuHbQ"},{"@type":"ListItem","position":3,"name":"Patient from Tanzania Expresses Gratitude","url":"https://www.youtube.com/watch?v=d7trey7Ss6E"},{"@type":"ListItem","position":4,"name":"A Successful Cancer Surgery Story","url":"https://www.youtube.com/watch?v=WVBjW02KdKA"}]}</script>
SCHEMA;

require __DIR__ . '/header.php';
?>
        <div class="page page--default">
          <section class="patient-testimonials__section" style="background: linear-gradient(to right, rgb(114, 5, 9), rgb(0, 32, 80))">
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
                    <span class="breadcrumb__current"> Testimonials </span>
                  </li>
                </ol>
              </nav>
            </div>
            <div class="container container--default">
              <div class="block-27" data-reveal>
                <div class="eyebrow eyebrow--on-dark" data-reveal><span class="label-3">PATIENT TESTIMONIALS</span></div>
                <h1 class="page-title page-title--on-dark"> Patient Testimonials </h1>
                <p class="page-lede page-lede--on-dark-3"> Real stories from patients who experienced exceptional care and successful outcomes </p>
              </div>
            </div>
          </section>
          <section class="section section--snug">
            <div class="container container--default">
              <div class="section-head section-head--snug" data-reveal>
                <div class="hear-from-patients__pill-2" data-reveal><span class="hear-from-patients__label">VIDEO TESTIMONIALS</span></div>
                <h2 class="title-3">Hear From Our Patients</h2>
                <p class="lede-4">Watch heartfelt stories from patients who have experienced our care firsthand.</p>
                <div class="block-9"></div>
              </div>
              <div class="hear-from-patients__container">
                <div class="hear-from-patients__block-4" data-reveal style="padding-bottom: 56.25%; height: 0px">
                  <iframe id="testimonial-player" loading="lazy" class="hear-from-patients__decoration-2" src="https://www.youtube.com/embed/4sv_Y7YMCrk?rel=0" title="Patient from Somalia Shares His Experience" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                <div class="hear-from-patients__grid" data-video-rail="testimonial-player">
                  <div class="video-thumb is-active" data-reveal data-video-id="4sv_Y7YMCrk" data-video-title="Patient from Somalia Shares His Experience" role="button" tabindex="0" aria-current="true">
                    <img src="https://i.ytimg.com/vi/4sv_Y7YMCrk/hqdefault.jpg" alt="Patient from Somalia Shares His Experience" class="hear-from-patients__image" width="480" height="360" decoding="async" data-yt-thumb>
                    <div class="hear-from-patients__decoration">
                      <svg class="hear-from-patients__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                    </div>
                  </div>
                  <div class="video-thumb" data-reveal data-video-id="hOVGD2YuHbQ" data-video-title="Heartfelt Patient Testimonial for Dr. Anvesh" role="button" tabindex="0" aria-current="false">
                    <img src="https://i.ytimg.com/vi/hOVGD2YuHbQ/hqdefault.jpg" alt="Heartfelt Patient Testimonial for Dr. Anvesh" class="hear-from-patients__image" width="480" height="360" loading="lazy" decoding="async" data-yt-thumb>
                    <div class="hear-from-patients__decoration">
                      <svg class="hear-from-patients__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                    </div>
                  </div>
                  <div class="video-thumb" data-reveal data-video-id="d7trey7Ss6E" data-video-title="Patient from Tanzania Expresses Gratitude" role="button" tabindex="0" aria-current="false">
                    <img src="https://i.ytimg.com/vi/d7trey7Ss6E/hqdefault.jpg" alt="Patient from Tanzania Expresses Gratitude" class="hear-from-patients__image" width="480" height="360" loading="lazy" decoding="async" data-yt-thumb>
                    <div class="hear-from-patients__decoration">
                      <svg class="hear-from-patients__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                    </div>
                  </div>
                  <div class="video-thumb" data-reveal data-video-id="WVBjW02KdKA" data-video-title="A Successful Cancer Surgery Story" role="button" tabindex="0" aria-current="false">
                    <img src="https://i.ytimg.com/vi/WVBjW02KdKA/hqdefault.jpg" alt="A Successful Cancer Surgery Story" class="hear-from-patients__image" width="480" height="360" loading="lazy" decoding="async" data-yt-thumb>
                    <div class="hear-from-patients__decoration">
                      <svg class="hear-from-patients__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                    </div>
                  </div>
                </div>
                <p class="hear-from-patients__lede">Patient from Somalia Shares His Experience</p>
              </div>
            </div>
          </section>
          <section class="what-patients-say__section-2">
            <div class="container container--default">
              <div class="section-head section-head--snug" data-reveal>
                <div class="pill-9" data-reveal><span class="label-4">WRITTEN TESTIMONIALS</span></div>
                <h2 class="title-3">What Our Patients Say</h2>
                <p class="lede-4">Heartfelt reviews from patients who have trusted us with their care.</p>
                <div class="block-9"></div>
              </div>
              <div class="what-patients-say__container">
                <div class="what-patients-say__block" data-reveal>
                  <div class="centred">
                    <div class="what-patients-say__icon-tile">
                      <svg class="what-patients-say__icon-3" aria-hidden="true"><use href="#i-google"></use></svg>
                    </div>
                    <div class="what-patients-say__block-3">
                      <svg class="what-patients-say__icon" aria-hidden="true"><use href="#i-star"></use></svg>
                      <svg class="what-patients-say__icon" aria-hidden="true"><use href="#i-star"></use></svg>
                      <svg class="what-patients-say__icon" aria-hidden="true"><use href="#i-star"></use></svg>
                      <svg class="what-patients-say__icon" aria-hidden="true"><use href="#i-star"></use></svg>
                      <svg class="what-patients-say__icon" aria-hidden="true"><use href="#i-star"></use></svg>
                    </div>
                    <blockquote class="what-patients-say__block-2">"I recently underwent laparoscopic surgery under the care of Dr. Anvesh, and I’m extremely grateful for his excellent treatment. He explained everything clearly, made me feel comfortable, and handled the surgery with great skill. The recovery was smooth, and he was always available to answer my doubts with patience. Dr. Anvesh is truly a dedicated, kind, and professional doctor."</blockquote>
                    <div class="stack stack--2xs">
                      <h4 class="what-patients-say__subheading">A S</h4>
                      <p class="label-6">Hyderabad</p>
                      <div class="what-patients-say__pill">Laparoscopic Surgery</div>
                    </div>
                  </div>
                </div>
                <button type="button" class="what-patients-say__button-3">
                  <svg class="what-patients-say__icon-2" aria-hidden="true"><use href="#i-chevron-left"></use></svg>
                </button>
                <button type="button" class="what-patients-say__button-2">
                  <svg class="what-patients-say__icon-2" aria-hidden="true"><use href="#i-chevron-right"></use></svg>
                </button>
                <div class="what-patients-say__block-4"><button type="button" class="what-patients-say__button-4"></button><button type="button" class="what-patients-say__button"></button><button type="button" class="what-patients-say__button"></button><button type="button" class="what-patients-say__button"></button><button type="button" class="what-patients-say__button"></button></div>
              </div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/footer.php';
