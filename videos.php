<?php
$route          = '/videos';
$title          = 'Surgical Oncology Video Library | Dr. Anvesh Dharanikota';
$description    = 'Dr. Anvesh Dharanikota\'s video library: 11 educational videos on laparoscopic and robotic cancer surgery, CRS-HIPEC, oncoplastic breast and thoracic surgery.';
$og_title       = 'Educational Video Library - Dr. Anvesh Dharanikota';
$og_description = 'A library of 11 surgical education videos covering laparoscopic and robotic oncology, CRS-HIPEC, oncoplastic breast surgery, GI and thoracic procedures, precision medicine and patient safety.';

$schema = <<<'SCHEMA'
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/videos#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"Video Library","item":"https://dranveshdharanikota.com/videos"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"MedicalWebPage","@id":"https://dranveshdharanikota.com/videos#webpage","url":"https://dranveshdharanikota.com/videos","name":"Educational Video Content","headline":"Educational Video Content","description":"Comprehensive surgical education and medical training videos showcasing advanced oncological procedures and techniques.","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","@id":"https://dranveshdharanikota.com/#website","url":"https://dranveshdharanikota.com/","name":"Dr. Anvesh Dharanikota"},"breadcrumb":{"@id":"https://dranveshdharanikota.com/videos#breadcrumb"},"about":{"@type":"MedicalSpecialty","name":"Surgical Oncology"},"audience":{"@type":"MedicalAudience","audienceType":"Medical professionals and students"},"author":{"@type":"Physician","@id":"https://dranveshdharanikota.com/#physician","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/about"},"mainEntity":{"@id":"https://dranveshdharanikota.com/videos#videolist"}}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"ItemList","@id":"https://dranveshdharanikota.com/videos#videolist","name":"Featured Medical Education Videos","description":"Comprehensive surgical demonstrations and educational content showcasing advanced oncological procedures and techniques.","numberOfItems":11,"itemListOrder":"https://schema.org/ItemListOrderAscending","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"VideoObject","name":"Advanced Laparoscopic Techniques in Oncology","description":"Dr. Anvesh Dharanikota demonstrates advanced laparoscopic surgical techniques for cancer treatment, showcasing precision and minimal invasive approaches in oncological procedures.","thumbnailUrl":"https://img.youtube.com/vi/RENydaOa0zA/maxresdefault.jpg","uploadDate":"2024-01-20","duration":"PT18M42S","embedUrl":"https://www.youtube.com/embed/RENydaOa0zA"}},{"@type":"ListItem","position":2,"item":{"@type":"VideoObject","name":"Robotic Surgery: Future of Cancer Treatment","description":"Comprehensive overview of robotic surgical systems in cancer care, focusing on precision, reduced invasiveness, and improved patient outcomes through advanced technology.","thumbnailUrl":"https://img.youtube.com/vi/6x0g_wtxQWs/maxresdefault.jpg","uploadDate":"2024-02-15","duration":"PT22M15S","embedUrl":"https://www.youtube.com/embed/6x0g_wtxQWs"}},{"@type":"ListItem","position":3,"item":{"@type":"VideoObject","name":"Minimally Invasive Breast Cancer Surgery","description":"Expert techniques in minimally invasive breast cancer surgery, combining oncological excellence with aesthetic preservation for optimal patient outcomes.","thumbnailUrl":"https://img.youtube.com/vi/1nJLdFjpKWI/maxresdefault.jpg","uploadDate":"2024-03-10","duration":"PT16M30S","embedUrl":"https://www.youtube.com/embed/1nJLdFjpKWI"}},{"@type":"ListItem","position":4,"item":{"@type":"VideoObject","name":"CRS-HIPEC: Revolutionary Cancer Treatment","description":"In-depth explanation of Cytoreductive Surgery with Heated Intraperitoneal Chemotherapy for treating peritoneal surface malignancies and advanced cancer cases.","thumbnailUrl":"https://img.youtube.com/vi/agGGJ7TVFdY/maxresdefault.jpg","uploadDate":"2024-03-25","duration":"PT25M18S","embedUrl":"https://www.youtube.com/embed/agGGJ7TVFdY"}},{"@type":"ListItem","position":5,"item":{"@type":"VideoObject","name":"Gastrointestinal Cancer Surgery Innovations","description":"Latest innovations in gastrointestinal cancer surgery, including advanced surgical techniques and technology for improved patient care and outcomes.","thumbnailUrl":"https://img.youtube.com/vi/u9jqpT9gSlE/maxresdefault.jpg","uploadDate":"2024-04-08","duration":"PT20M45S","embedUrl":"https://www.youtube.com/embed/u9jqpT9gSlE"}},{"@type":"ListItem","position":6,"item":{"@type":"VideoObject","name":"Oncoplastic Surgery: Art Meets Science","description":"Exploring the intersection of oncology and plastic surgery in breast cancer treatment, achieving optimal cancer control with aesthetic preservation.","thumbnailUrl":"https://img.youtube.com/vi/IHbHL8tJ6GE/maxresdefault.jpg","uploadDate":"2024-04-22","duration":"PT19M12S","embedUrl":"https://www.youtube.com/embed/IHbHL8tJ6GE"}},{"@type":"ListItem","position":7,"item":{"@type":"VideoObject","name":"Multidisciplinary Cancer Care Approach","description":"Understanding the importance of multidisciplinary teams in cancer treatment, showcasing collaborative care for optimal patient outcomes.","thumbnailUrl":"https://img.youtube.com/vi/NFnnmnAx3b8/maxresdefault.jpg","uploadDate":"2024-05-05","duration":"PT17M55S","embedUrl":"https://www.youtube.com/embed/NFnnmnAx3b8"}},{"@type":"ListItem","position":8,"item":{"@type":"VideoObject","name":"Precision Medicine in Surgical Oncology","description":"How precision medicine is revolutionizing surgical oncology, with personalized treatment approaches based on genetic and molecular profiling.","thumbnailUrl":"https://img.youtube.com/vi/Bok5jifgmIM/maxresdefault.jpg","uploadDate":"2024-05-20","duration":"PT23M30S","embedUrl":"https://www.youtube.com/embed/Bok5jifgmIM"}},{"@type":"ListItem","position":9,"item":{"@type":"VideoObject","name":"Advanced Thoracic Surgery Techniques","description":"State-of-the-art thoracic surgical techniques for lung cancer and chest malignancies, including VATS and robotic approaches.","thumbnailUrl":"https://img.youtube.com/vi/5K4AQ0tfA_A/maxresdefault.jpg","uploadDate":"2024-06-02","duration":"PT21M8S","embedUrl":"https://www.youtube.com/embed/5K4AQ0tfA_A"}},{"@type":"ListItem","position":10,"item":{"@type":"VideoObject","name":"Patient Safety in Complex Cancer Surgery","description":"Comprehensive overview of patient safety protocols and risk management in complex oncological surgical procedures.","thumbnailUrl":"https://img.youtube.com/vi/Yzl-u2rp5cE/maxresdefault.jpg","uploadDate":"2024-06-15","duration":"PT18M25S","embedUrl":"https://www.youtube.com/embed/Yzl-u2rp5cE"}},{"@type":"ListItem","position":11,"item":{"@type":"VideoObject","name":"Future Trends in Surgical Oncology","description":"Exploring emerging trends and future directions in surgical oncology, including AI integration, new technologies, and treatment innovations.","thumbnailUrl":"https://img.youtube.com/vi/hj0QRKVWXPw/maxresdefault.jpg","uploadDate":"2024-07-01","duration":"PT26M42S","embedUrl":"https://www.youtube.com/embed/hj0QRKVWXPw"}}]}</script>
SCHEMA;

require __DIR__ . '/header.php';
?>
        <div class="page page--default">
          <div style="background: linear-gradient(to right, rgb(114, 5, 9), rgb(0, 32, 80))">
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
                    <span class="breadcrumb__current"> Video Library </span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <section class="section-5" style="background: linear-gradient(to right, rgb(114, 5, 9), rgb(0, 32, 80))">
            <div class="decoration-11">
              <div class="decoration-9"></div>
              <div class="decoration-8" style="animation-delay: 3s"></div>
            </div>
            <div class="container container--relative">
              <div class="section-head section-head--default" data-reveal>
                <div class="eyebrow eyebrow--on-dark" data-reveal><span class="label-3">VIDEO LIBRARY</span></div>
                <h1 class="page-title page-title--on-dark">Educational Video Content</h1>
                <p class="page-lede page-lede--on-dark">Comprehensive surgical education and medical training videos showcasing advanced oncological procedures and techniques</p>
              </div>
              <div class="grid-6" data-reveal>
                <div class="block">
                  <div class="block-4">11</div>
                  <div class="block-11">Educational Videos</div>
                </div>
                <div class="block">
                  <div class="block-4">350K+</div>
                  <div class="block-11">Total Views</div>
                </div>
                <div class="block">
                  <div class="block-4">20h+</div>
                  <div class="block-11">Content Hours</div>
                </div>
                <div class="block">
                  <div class="block-4">15+</div>
                  <div class="block-11">Surgical Topics</div>
                </div>
              </div>
            </div>
          </section>
          <section class="section-7">
            <div class="container container--default">
              <div class="featured-medical-education__header-2" data-reveal>
                <h2 class="featured-medical-education__heading">Featured Medical Education Videos</h2>
                <p class="featured-medical-education__text-2">Comprehensive surgical demonstrations and educational content showcasing advanced oncological procedures and techniques</p>
              </div>
              <div class="card-grid card-grid--default">
                <div class="block-8 luxury-card group" data-reveal data-video-modal="RENydaOa0zA" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Advanced Laparoscopic Techniques in Oncology" data-video-description="Dr. Anvesh Dharanikota demonstrates advanced laparoscopic surgical techniques for cancer treatment,showcasing precision and minimal invasive approaches in oncological procedures." data-video-views="28.5K" data-video-date="1/20/2024" data-video-url="https://youtu.be/RENydaOa0zA?si=MJNLIHpSrWO8IwlO">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/RENydaOa0zA/maxresdefault.jpg" alt="Advanced Laparoscopic Techniques in Oncology" class="zoom-image" width="120" height="90" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">18:42</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Advanced Laparoscopic Techniques in Oncology</h3>
                      <p class="featured-medical-education__text">Dr. Anvesh Dharanikota demonstrates advanced laparoscopic surgical techniques for cancer treatment,showcasing precision and minimal invasive approaches in oncological procedures.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>28.5K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>1/20/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="6x0g_wtxQWs" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Robotic Surgery: Future of Cancer Treatment" data-video-description="Comprehensive overview of robotic surgical systems in cancer care,focusing on precision,reduced invasiveness,and improved patient outcomes through advanced technology." data-video-views="35.2K" data-video-date="2/15/2024" data-video-url="https://youtu.be/6x0g_wtxQWs?si=k4MS6SF9Bo6rNuwf">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/6x0g_wtxQWs/maxresdefault.jpg" alt="Robotic Surgery: Future of Cancer Treatment" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">22:15</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Robotic Surgery: Future of Cancer Treatment</h3>
                      <p class="featured-medical-education__text">Comprehensive overview of robotic surgical systems in cancer care,focusing on precision,reduced invasiveness,and improved patient outcomes through advanced technology.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>35.2K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>2/15/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="1nJLdFjpKWI" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Minimally Invasive Breast Cancer Surgery" data-video-description="Expert techniques in minimally invasive breast cancer surgery,combining oncological excellence with aesthetic preservation for optimal patient outcomes." data-video-views="42.1K" data-video-date="3/10/2024" data-video-url="https://youtu.be/1nJLdFjpKWI?si=EcNgR3BcfqYtLwRo">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/1nJLdFjpKWI/maxresdefault.jpg" alt="Minimally Invasive Breast Cancer Surgery" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">16:30</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Minimally Invasive Breast Cancer Surgery</h3>
                      <p class="featured-medical-education__text">Expert techniques in minimally invasive breast cancer surgery,combining oncological excellence with aesthetic preservation for optimal patient outcomes.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>42.1K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>3/10/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="agGGJ7TVFdY" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="CRS-HIPEC: Revolutionary Cancer Treatment" data-video-description="In-depth explanation of Cytoreductive Surgery with Heated Intraperitoneal Chemotherapy for treating peritoneal surface malignancies and advanced cancer cases." data-video-views="38.7K" data-video-date="3/25/2024" data-video-url="https://youtu.be/agGGJ7TVFdY?si=EkX2jbS08a19doQz">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/agGGJ7TVFdY/maxresdefault.jpg" alt="CRS-HIPEC: Revolutionary Cancer Treatment" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">25:18</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">CRS-HIPEC: Revolutionary Cancer Treatment</h3>
                      <p class="featured-medical-education__text">In-depth explanation of Cytoreductive Surgery with Heated Intraperitoneal Chemotherapy for treating peritoneal surface malignancies and advanced cancer cases.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>38.7K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>3/25/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="u9jqpT9gSlE" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Gastrointestinal Cancer Surgery Innovations" data-video-description="Latest innovations in gastrointestinal cancer surgery,including advanced surgical techniques and technology for improved patient care and outcomes." data-video-views="31.4K" data-video-date="4/8/2024" data-video-url="https://youtu.be/u9jqpT9gSlE?si=ij74BbX3Mt1ab8ez">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/u9jqpT9gSlE/maxresdefault.jpg" alt="Gastrointestinal Cancer Surgery Innovations" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">20:45</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Gastrointestinal Cancer Surgery Innovations</h3>
                      <p class="featured-medical-education__text">Latest innovations in gastrointestinal cancer surgery,including advanced surgical techniques and technology for improved patient care and outcomes.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>31.4K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>4/8/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="IHbHL8tJ6GE" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Oncoplastic Surgery: Art Meets Science" data-video-description="Exploring the intersection of oncology and plastic surgery in breast cancer treatment,achieving optimal cancer control with aesthetic preservation." data-video-views="26.8K" data-video-date="4/22/2024" data-video-url="https://youtu.be/IHbHL8tJ6GE?si=F3cefXQ094eeAM63">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/IHbHL8tJ6GE/maxresdefault.jpg" alt="Oncoplastic Surgery: Art Meets Science" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">19:12</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Oncoplastic Surgery: Art Meets Science</h3>
                      <p class="featured-medical-education__text">Exploring the intersection of oncology and plastic surgery in breast cancer treatment,achieving optimal cancer control with aesthetic preservation.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>26.8K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>4/22/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="NFnnmnAx3b8" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Multidisciplinary Cancer Care Approach" data-video-description="Understanding the importance of multidisciplinary teams in cancer treatment,showcasing collaborative care for optimal patient outcomes." data-video-views="33.6K" data-video-date="5/5/2024" data-video-url="https://youtu.be/NFnnmnAx3b8?si=EOJVjk6jk7dQPTTP">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/NFnnmnAx3b8/maxresdefault.jpg" alt="Multidisciplinary Cancer Care Approach" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">17:55</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Multidisciplinary Cancer Care Approach</h3>
                      <p class="featured-medical-education__text">Understanding the importance of multidisciplinary teams in cancer treatment,showcasing collaborative care for optimal patient outcomes.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>33.6K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>5/5/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="Bok5jifgmIM" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Precision Medicine in Surgical Oncology" data-video-description="How precision medicine is revolutionizing surgical oncology,with personalized treatment approaches based on genetic and molecular profiling." data-video-views="29.3K" data-video-date="5/20/2024" data-video-url="https://youtu.be/Bok5jifgmIM?si=htFCAlI7czD32VPV">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/Bok5jifgmIM/maxresdefault.jpg" alt="Precision Medicine in Surgical Oncology" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">23:30</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Precision Medicine in Surgical Oncology</h3>
                      <p class="featured-medical-education__text">How precision medicine is revolutionizing surgical oncology,with personalized treatment approaches based on genetic and molecular profiling.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>29.3K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>5/20/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="5K4AQ0tfA_A" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Advanced Thoracic Surgery Techniques" data-video-description="State-of-the-art thoracic surgical techniques for lung cancer and chest malignancies,including VATS and robotic approaches." data-video-views="37.2K" data-video-date="6/2/2024" data-video-url="https://youtu.be/5K4AQ0tfA_A?si=tX6wA3OYCgTHnF7E">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/5K4AQ0tfA_A/maxresdefault.jpg" alt="Advanced Thoracic Surgery Techniques" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">21:08</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Advanced Thoracic Surgery Techniques</h3>
                      <p class="featured-medical-education__text">State-of-the-art thoracic surgical techniques for lung cancer and chest malignancies,including VATS and robotic approaches.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>37.2K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>6/2/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="Yzl-u2rp5cE" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Patient Safety in Complex Cancer Surgery" data-video-description="Comprehensive overview of patient safety protocols and risk management in complex oncological surgical procedures." data-video-views="24.9K" data-video-date="6/15/2024" data-video-url="https://youtu.be/Yzl-u2rp5cE?si=rqDyDdCt2GR9-org">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/Yzl-u2rp5cE/maxresdefault.jpg" alt="Patient Safety in Complex Cancer Surgery" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">18:25</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Patient Safety in Complex Cancer Surgery</h3>
                      <p class="featured-medical-education__text">Comprehensive overview of patient safety protocols and risk management in complex oncological surgical procedures.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>24.9K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>6/15/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
                <div class="block-8 luxury-card group" data-reveal data-video-modal="hj0QRKVWXPw" role="button" tabindex="0" aria-haspopup="dialog" data-video-title="Future Trends in Surgical Oncology" data-video-description="Exploring emerging trends and future directions in surgical oncology,including AI integration,new technologies,and treatment innovations." data-video-views="41.8K" data-video-date="7/1/2024" data-video-url="https://youtu.be/hj0QRKVWXPw?si=nA0mqsAcJaRd5Tgi">
                  <div class="media-card">
                    <div class="featured-medical-education__block-3">
                      <img src="https://img.youtube.com/vi/hj0QRKVWXPw/maxresdefault.jpg" alt="Future Trends in Surgical Oncology" class="zoom-image" width="120" height="90" loading="lazy" decoding="async" data-yt-thumb>
                      <div class="featured-medical-education__decoration">
                        <div class="featured-medical-education__icon-tile">
                          <svg class="featured-medical-education__icon" aria-hidden="true"><use href="#i-play"></use></svg>
                        </div>
                      </div>
                      <div class="featured-medical-education__block-2">26:42</div>
                      <div class="featured-medical-education__block-5"><span class="featured-medical-education__badge">Educational</span></div>
                    </div>
                    <div class="featured-medical-education__header">
                      <h3 class="featured-medical-education__subheading">Future Trends in Surgical Oncology</h3>
                      <p class="featured-medical-education__text">Exploring emerging trends and future directions in surgical oncology,including AI integration,new technologies,and treatment innovations.</p>
                      <div class="featured-medical-education__row-2">
                        <div class="inline-row inline-row--default">
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-eye"></use></svg>
                            <span>41.8K views</span>
                          </div>
                          <div class="row">
                            <svg class="icon icon--xs" aria-hidden="true"><use href="#i-calendar"></use></svg>
                            <span>7/1/2024</span>
                          </div>
                        </div>
                        <button type="button" class="featured-medical-education__button" tabindex="0"><svg class="icon icon--sm" aria-hidden="true"><use href="#i-share"></use></svg></button>
                      </div>
                      <div class="featured-medical-education__row" tabindex="0">
                        <svg class="icon icon--sm" aria-hidden="true"><use href="#i-play"></use></svg>
                        <span>Watch Video</span>
                      </div>
                    </div>
                    <div class="featured-medical-education__block"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section-10">
            <div class="decoration-10"></div>
            <div class="container container--relative">
              <div class="header-2" data-reveal>
                <h2 class="title-2">Educational Resources</h2>
                <p class="lede-3">Access comprehensive educational materials and training resources for medical professionals and students</p>
                <div class="grid-7">
                  <div class="header" tabindex="0">
                    <svg class="icon-15" aria-hidden="true"><use href="#i-video"></use></svg>
                    <h3 class="subheading-8">Surgical Techniques</h3>
                    <p class="text-7">Advanced surgical procedure demonstrations</p>
                  </div>
                  <div class="header" tabindex="0">
                    <svg class="icon-15" aria-hidden="true"><use href="#i-camera"></use></svg>
                    <h3 class="subheading-8">Case Studies</h3>
                    <p class="text-7">Real patient cases and treatment approaches</p>
                  </div>
                  <div class="header" tabindex="0">
                    <svg class="icon-15" aria-hidden="true"><use href="#i-users"></use></svg>
                    <h3 class="subheading-8">Medical Education</h3>
                    <p class="text-7">Training materials for medical students</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/footer.php';
