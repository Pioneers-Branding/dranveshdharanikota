<?php
$route          = '/techniques/icg-fluorescence';
$title          = 'ICG Fluorescence Guided Surgery | Dr. Anvesh Dharanikota';
$description    = 'Indocyanine green (ICG) fluorescence-guided surgery by Dr. Anvesh Dharanikota: real-time imaging of blood flow, lymphatics and tumor margins in Hyderabad.';
$og_title       = 'ICG Fluorescence-Guided Cancer Surgery';
$og_description = 'Real-time near-infrared imaging for sentinel lymph node mapping, anastomotic assessment, tumor localization and perfusion assessment during oncological surgery.';
$og_image       = 'https://dranveshdharanikota.com/photos/ICG-Fluorescence.webp';

$schema = <<<'SCHEMA'
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/techniques/icg-fluorescence#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"Key Techniques","item":"https://dranveshdharanikota.com/techniques"},{"@type":"ListItem","position":3,"name":"ICG Fluorescence","item":"https://dranveshdharanikota.com/techniques/icg-fluorescence"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"MedicalWebPage","@id":"https://dranveshdharanikota.com/techniques/icg-fluorescence#webpage","url":"https://dranveshdharanikota.com/techniques/icg-fluorescence","name":"ICG Fluorescence Guided Surgery | Dr. Anvesh Dharanikota","headline":"ICG Fluorescence","description":"Indocyanine green (ICG) fluorescence-guided surgery by Dr. Anvesh Dharanikota: real-time imaging of blood flow, lymphatics and tumor margins in Hyderabad.","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","@id":"https://dranveshdharanikota.com/#website","url":"https://dranveshdharanikota.com/","name":"Dr. Anvesh Dharanikota"},"breadcrumb":{"@id":"https://dranveshdharanikota.com/techniques/icg-fluorescence#breadcrumb"},"primaryImageOfPage":{"@type":"ImageObject","url":"https://dranveshdharanikota.com/photos/ICG-Fluorescence.webp","width":600,"height":650},"about":{"@id":"https://dranveshdharanikota.com/techniques/icg-fluorescence#procedure"},"mainEntity":{"@id":"https://dranveshdharanikota.com/techniques/icg-fluorescence#applications"},"author":{"@id":"https://dranveshdharanikota.com/#physician"},"reviewedBy":{"@id":"https://dranveshdharanikota.com/#physician"},"significantLink":["https://dranveshdharanikota.com/techniques/robotic-surgery","https://dranveshdharanikota.com/techniques/crs-hipec","https://dranveshdharanikota.com/contact"]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"MedicalProcedure","@id":"https://dranveshdharanikota.com/techniques/icg-fluorescence#procedure","name":"ICG Fluorescence Guided Surgery","alternateName":"Indocyanine Green Guided Surgery","url":"https://dranveshdharanikota.com/techniques/icg-fluorescence","description":"Advanced imaging technique using fluorescent dye for real-time visualization of blood flow, lymphatics, and tumor margins during surgery.","howPerformed":"Indocyanine green is administered intravenously at 0.25-0.5 mg/kg body weight and visualized with specialized near-infrared imaging systems using light in the 700-900nm range, integrated with the surgical platform. Visualization occurs within minutes to hours depending on the application.","bodyLocation":["Lymphatic system","Gastrointestinal tract","Liver","Lung","Peritoneum"],"relevantSpecialty":"https://schema.org/Oncologic","performer":{"@id":"https://dranveshdharanikota.com/#physician"}}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"ItemList","@id":"https://dranveshdharanikota.com/techniques/icg-fluorescence#applications","name":"Clinical Applications","description":"Diverse applications of ICG fluorescence in oncological surgery","numberOfItems":4,"itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"MedicalProcedure","name":"Sentinel Lymph Node Mapping","description":"Real-time identification of sentinel lymph nodes for accurate staging in breast, gynecologic, and other cancers."}},{"@type":"ListItem","position":2,"item":{"@type":"MedicalProcedure","name":"Anastomotic Assessment","description":"Evaluation of blood supply to anastomotic sites to ensure adequate perfusion and reduce leak rates."}},{"@type":"ListItem","position":3,"item":{"@type":"MedicalProcedure","name":"Tumor Localization","description":"Enhanced visualization of tumor margins and residual disease for complete surgical resection."}},{"@type":"ListItem","position":4,"item":{"@type":"MedicalProcedure","name":"Perfusion Assessment","description":"Real-time evaluation of tissue perfusion for viability assessment during complex reconstructions."}}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"Physician","@id":"https://dranveshdharanikota.com/#physician","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/","image":"https://dranveshdharanikota.com/photos/anvesh.webp","medicalSpecialty":"https://schema.org/Oncologic","telephone":"+91 9440233339","email":"dr.anveshdharanikota@gmail.com","address":{"@type":"PostalAddress","streetAddress":"Arete Hospitals, OP Room No. 17, B-Wing, Ground Floor, CHR Lane, Rd Number 1, Colony, Gachibowli","addressLocality":"Hyderabad","addressRegion":"Telangana","postalCode":"500032","addressCountry":"IN"},"sameAs":["https://in.linkedin.com/in/dranveshdharanikotacancerspecialist","https://www.researchgate.net/profile/Anvesh-Dharanikota","https://orcid.org/0000-0001-7404-3239"]}</script>
SCHEMA;

require __DIR__ . '/../header.php';
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
                    <div tabindex="0">
                      <a class="breadcrumb__link" href="/techniques">Key Techniques</a>
                    </div>
                  </li>
                  <li class="header__link">
                    <svg class="breadcrumb__separator" aria-hidden="true"><use href="#i-chevron-right"></use></svg>
                    <span class="breadcrumb__current"> ICG Fluorescence </span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <section class="section-11">
            <div class="decoration-11">
              <div class="decoration-13"></div>
              <div class="decoration-12" style="animation-delay: 3s"></div>
            </div>
            <div class="container container--relative">
              <div class="grid-2">
                <div class="stack-6" data-reveal>
                  <div>
                    <div class="pill-7" data-reveal><span class="label-9">FLUORESCENCE-GUIDED SURGERY</span></div>
                    <h1 class="page-title page-title--default">ICG Fluorescence</h1>
                    <h2 class="heading-4">Indocyanine Green Guided Surgery</h2>
                    <p class="lede-5">Advanced imaging technique using fluorescent dye for real-time visualization of blood flow, lymphatics, and tumor margins during surgery.</p>
                    <p class="body-text">Dr. Dharanikota utilizes ICG fluorescence technology to enhance surgical precision, improve patient safety, and optimize oncological outcomes.</p>
                  </div>
                  <div class="grid-8">
                    <div class="card-9">
                      <div class="block-12">150+</div>
                      <div class="small-text">ICG-Guided Procedures</div>
                    </div>
                    <div class="card-9">
                      <div class="block-12">98%</div>
                      <div class="small-text">Detection Accuracy</div>
                    </div>
                  </div>
                  <div class="block-25">
                    <a class="button-9" href="/contact">
                      <svg class="icon icon--default" aria-hidden="true"><use href="#i-calendar"></use></svg>
                      <span>Schedule Consultation</span>
                    </a>
                    <a class="button-10" href="/contact">Learn More</a>
                  </div>
                </div>
                <div class="relative-box" data-reveal>
                  <img src="/photos/ICG-Fluorescence.webp" alt="ICG Fluorescence Surgery" class="image" width="600" height="650" decoding="async">
                  <div class="block-14">
                    <svg class="icon-19" aria-hidden="true"><use href="#i-target"></use></svg>
                    <div class="centred">
                      <div class="block-23">Precision</div>
                      <div class="block-28">Guided</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section section--default">
            <div class="container container--default">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">Advantages of ICG Fluorescence</h2>
                <p class="section-lede">Revolutionary imaging technology enhancing surgical precision and patient outcomes</p>
              </div>
              <div class="footer__grid">
                <div class="luxury-card" data-reveal>
                  <div class="card-3">
                    <div class="icon-tile-7">
                      <svg class="icon icon--lg icon--on-dark" aria-hidden="true"><use href="#i-zap"></use></svg>
                    </div>
                    <h3 class="subheading">Real-Time Imaging</h3>
                    <p class="text-2">Instantaneous visualization during surgery allows for immediate decision-making and surgical adjustments.</p>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card-3">
                    <div class="icon-tile-7">
                      <svg class="icon icon--lg icon--on-dark" aria-hidden="true"><use href="#i-target"></use></svg>
                    </div>
                    <h3 class="subheading">Enhanced Precision</h3>
                    <p class="text-2">Accurate identification of anatomical structures and pathological tissues with high sensitivity.</p>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card-3">
                    <div class="icon-tile-7">
                      <svg class="icon icon--lg icon--on-dark" aria-hidden="true"><use href="#i-shield"></use></svg>
                    </div>
                    <h3 class="subheading">Safety Profile</h3>
                    <p class="text-2">ICG is FDA-approved with excellent safety profile and minimal allergic reactions.</p>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card-3">
                    <div class="icon-tile-7">
                      <svg class="icon icon--lg icon--on-dark" aria-hidden="true"><use href="#i-trending-up"></use></svg>
                    </div>
                    <h3 class="subheading">Improved Outcomes</h3>
                    <p class="text-2">Better surgical outcomes with reduced complications and improved oncological results.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section-6">
            <div class="container container--default">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">Clinical Applications</h2>
                <p class="section-lede">Diverse applications of ICG fluorescence in oncological surgery</p>
              </div>
              <div class="card-grid card-grid--two">
                <div class="luxury-card" data-reveal>
                  <div class="card-4">
                    <div class="clinical-applications__row">
                      <div class="treatment-indications__icon-tile">
                        <svg class="icon icon--md icon--on-dark" aria-hidden="true"><use href="#i-target"></use></svg>
                      </div>
                      <div>
                        <h3 class="subheading-7">Sentinel Lymph Node Mapping</h3>
                        <p class="small-text">Real-time identification of sentinel lymph nodes for accurate staging in breast, gynecologic, and other cancers.</p>
                      </div>
                    </div>
                    <div class="clinical-applications__header-2">
                      <h4 class="subheading-4">Procedures</h4>
                      <ul class="stack stack--2xs">
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Breast Cancer Staging</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Gynecologic Cancer Evaluation</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Melanoma Assessment</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Gastrointestinal Cancer Staging</span>
                        </li>
                      </ul>
                    </div>
                    <div class="clinical-applications__header">
                      <h4 class="clinical-applications__subheading">Key Benefits</h4>
                      <p class="clinical-applications__text-2">Precise lymph node identification with minimal false negative rates</p>
                    </div>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card-4">
                    <div class="clinical-applications__row">
                      <div class="treatment-indications__icon-tile">
                        <svg class="icon icon--md icon--on-dark" aria-hidden="true"><use href="#i-activity"></use></svg>
                      </div>
                      <div>
                        <h3 class="subheading-7">Anastomotic Assessment</h3>
                        <p class="small-text">Evaluation of blood supply to anastomotic sites to ensure adequate perfusion and reduce leak rates.</p>
                      </div>
                    </div>
                    <div class="clinical-applications__header-2">
                      <h4 class="subheading-4">Procedures</h4>
                      <ul class="stack stack--2xs">
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Colorectal Anastomosis</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Esophageal Anastomosis</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Small Bowel Anastomosis</span>
                        </li>
                      </ul>
                    </div>
                    <div class="clinical-applications__header">
                      <h4 class="clinical-applications__subheading">Key Benefits</h4>
                      <p class="clinical-applications__text-2">Reduced anastomotic leak rates and improved surgical outcomes</p>
                    </div>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card-4">
                    <div class="clinical-applications__row">
                      <div class="treatment-indications__icon-tile">
                        <svg class="icon icon--md icon--on-dark" aria-hidden="true"><use href="#i-eye"></use></svg>
                      </div>
                      <div>
                        <h3 class="subheading-7">Tumor Localization</h3>
                        <p class="small-text">Enhanced visualization of tumor margins and residual disease for complete surgical resection.</p>
                      </div>
                    </div>
                    <div class="clinical-applications__header-2">
                      <h4 class="subheading-4">Procedures</h4>
                      <ul class="stack stack--2xs">
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Liver Metastases</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Lung Nodules</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Peritoneal Implants</span>
                        </li>
                      </ul>
                    </div>
                    <div class="clinical-applications__header">
                      <h4 class="clinical-applications__subheading">Key Benefits</h4>
                      <p class="clinical-applications__text-2">Improved complete resection rates and reduced positive margins</p>
                    </div>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card-4">
                    <div class="clinical-applications__row">
                      <div class="treatment-indications__icon-tile">
                        <svg class="icon icon--md icon--on-dark" aria-hidden="true"><use href="#i-heart"></use></svg>
                      </div>
                      <div>
                        <h3 class="subheading-7">Perfusion Assessment</h3>
                        <p class="small-text">Real-time evaluation of tissue perfusion for viability assessment during complex reconstructions.</p>
                      </div>
                    </div>
                    <div class="clinical-applications__header-2">
                      <h4 class="subheading-4">Procedures</h4>
                      <ul class="stack stack--2xs">
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Flap Viability</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Bowel Perfusion</span>
                        </li>
                        <li class="item">
                          <svg class="clinical-applications__icon" aria-hidden="true"><use href="#i-check"></use></svg>
                          <span class="clinical-applications__label">Organ Transplant Assessment</span>
                        </li>
                      </ul>
                    </div>
                    <div class="clinical-applications__header">
                      <h4 class="clinical-applications__subheading">Key Benefits</h4>
                      <p class="clinical-applications__text-2">Enhanced surgical decision-making and reduced complications</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section section--default">
            <div class="container container--default">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">Technical Specifications</h2>
                <p class="section-lede">Understanding the science behind ICG fluorescence imaging</p>
              </div>
              <div class="grid-3">
                <div class="technical-specifications__header" data-reveal>
                  <h3 class="subheading">Wavelength</h3>
                  <p class="text-2">Near-infrared light (700-900nm) for optimal tissue penetration</p>
                </div>
                <div class="technical-specifications__header" data-reveal>
                  <h3 class="subheading">Dosage</h3>
                  <p class="text-2">0.25-0.5 mg/kg body weight, administered intravenously</p>
                </div>
                <div class="technical-specifications__header" data-reveal>
                  <h3 class="subheading">Timing</h3>
                  <p class="text-2">Visualization within minutes to hours depending on application</p>
                </div>
                <div class="technical-specifications__header" data-reveal>
                  <h3 class="subheading">Equipment</h3>
                  <p class="text-2">Specialized near-infrared imaging systems integrated with surgical platforms</p>
                </div>
              </div>
            </div>
          </section>
          <section class="section-6">
            <div class="container container--default">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">Clinical Benefits</h2>
                <p class="section-lede">Proven improvements in surgical outcomes and patient care</p>
              </div>
              <div class="grid-3">
                <div class="card-7" data-reveal>
                  <h3 class="card-title">Sensitivity</h3>
                  <div class="block-6">&gt;95%</div>
                  <p class="small-text">For sentinel lymph node detection</p>
                </div>
                <div class="card-7" data-reveal>
                  <h3 class="card-title">Specificity</h3>
                  <div class="block-6">&gt;90%</div>
                  <p class="small-text">Accurate tissue identification</p>
                </div>
                <div class="card-7" data-reveal>
                  <h3 class="card-title">Complication Reduction</h3>
                  <div class="block-6">30-50%</div>
                  <p class="small-text">Decreased anastomotic leaks</p>
                </div>
                <div class="card-7" data-reveal>
                  <h3 class="card-title">Positive Margin Rate</h3>
                  <div class="block-6">Reduced by 25%</div>
                  <p class="small-text">Improved complete resection</p>
                </div>
              </div>
            </div>
          </section>
          <section class="section section--default">
            <div class="container container--default">
              <div class="grid-2">
                <div data-reveal>
                  <h2 class="section-title section-title--default">Surgical Innovation</h2>
                  <p class="lede-8">ICG fluorescence represents the cutting edge of surgical imaging technology, providing surgeons with unprecedented visualization capabilities.</p>
                  <div class="stack-7">
                    <div class="inline-row inline-row--default">
                      <svg class="crs-hipec-expertise__icon" aria-hidden="true"><use href="#i-star"></use></svg>
                      <span class="label">FDA-approved and internationally recognized</span>
                    </div>
                    <div class="inline-row inline-row--default">
                      <svg class="crs-hipec-expertise__icon" aria-hidden="true"><use href="#i-navigation"></use></svg>
                      <span class="label">Real-time surgical navigation</span>
                    </div>
                    <div class="inline-row inline-row--default">
                      <svg class="crs-hipec-expertise__icon" aria-hidden="true"><use href="#i-shield"></use></svg>
                      <span class="label">Enhanced patient safety</span>
                    </div>
                    <div class="inline-row inline-row--default">
                      <svg class="crs-hipec-expertise__icon" aria-hidden="true"><use href="#i-trending-up"></use></svg>
                      <span class="label">Improved oncological outcomes</span>
                    </div>
                  </div>
                  <div tabindex="0"><a class="button-8" href="/about"><span>View Expertise</span><svg class="icon icon--default" aria-hidden="true"><use href="#i-arrow-right"></use></svg></a></div>
                </div>
                <div class="relative-box" data-reveal>
                  <img src="/photos/anvesh.webp" alt="Dr. Dharanikota using ICG fluorescence" class="image" width="600" height="600" loading="lazy" decoding="async">
                </div>
              </div>
            </div>
          </section>
          <section class="section-13">
            <div class="decoration-10"></div>
            <div class="container container--relative">
              <div class="header-2" data-reveal>
                <h2 class="title-2">Advanced Surgical Imaging Technology</h2>
                <p class="lede-7">Experience the precision and safety of ICG fluorescence-guided surgery. Consult with Dr. Dharanikota to learn more.</p>
                <div class="block-10">
                  <div tabindex="0">
                    <a class="button-11" href="/contact">
                      <svg class="icon icon--md" aria-hidden="true"><use href="#i-user"></use></svg>
                      <span>Schedule Consultation</span>
                    </a>
                  </div>
                  <div tabindex="0"><a href="tel:+919440233339" class="btn btn--ghost btn--lg-3"><svg class="icon icon--md" aria-hidden="true"><use href="#i-calendar"></use></svg><span>Call Now</span></a></div>
                </div>
              </div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/../footer.php';
