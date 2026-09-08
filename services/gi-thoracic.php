<?php
$route          = '/services/gi-thoracic';
$title          = 'GI & Thoracic Cancer Surgery | Dr. Anvesh Dharanikota';
$description    = 'Dr. Anvesh Dharanikota offers robotic and laparoscopic surgery for cancers of the esophagus, stomach, colon, rectum, liver, pancreas and lungs in Hyderabad.';
$og_title       = 'GI & Thoracic Oncology Surgery - Dr. Anvesh Dharanikota';
$og_description = 'Comprehensive surgical care for cancers of the digestive system and chest - laparoscopic and robotic colectomy, VATS lobectomy, robotic esophagectomy and gastrectomy.';
$og_image       = 'https://dranveshdharanikota.com/photos/Understanding-GI.webp';

$schema = <<<'SCHEMA'
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/services/gi-thoracic#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"Services","item":"https://dranveshdharanikota.com/services"},{"@type":"ListItem","position":3,"name":"GI & Thoracic Oncology","item":"https://dranveshdharanikota.com/services/gi-thoracic"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"MedicalWebPage","@id":"https://dranveshdharanikota.com/services/gi-thoracic#webpage","url":"https://dranveshdharanikota.com/services/gi-thoracic","name":"GI & Thoracic Oncology","headline":"GI & Thoracic Oncology","description":"Comprehensive surgical care for cancers of the digestive system and chest, using advanced minimally invasive techniques.","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","@id":"https://dranveshdharanikota.com/#website","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/"},"breadcrumb":{"@id":"https://dranveshdharanikota.com/services/gi-thoracic#breadcrumb"},"primaryImageOfPage":{"@type":"ImageObject","url":"https://dranveshdharanikota.com/photos/Understanding-GI.webp","width":600,"height":400,"caption":"GI and thoracic organs affected by cancer: esophagus, stomach, colon, rectum, liver, pancreas and lungs"},"specialty":"https://schema.org/Oncologic","audience":{"@type":"MedicalAudience","audienceType":"Patient"},"about":[{"@type":"MedicalCondition","name":"Esophageal cancer"},{"@type":"MedicalCondition","name":"Stomach cancer"},{"@type":"MedicalCondition","name":"Colon cancer"},{"@type":"MedicalCondition","name":"Rectal cancer"},{"@type":"MedicalCondition","name":"Liver cancer"},{"@type":"MedicalCondition","name":"Pancreatic cancer"},{"@type":"MedicalCondition","name":"Lung cancer"}],"mentions":[{"@type":"MedicalProcedure","name":"Laparoscopic & Robotic Colectomy","description":"Minimally invasive removal of parts of the colon for colorectal cancer.","procedureType":"https://schema.org/SurgicalProcedure","bodyLocation":"Colon"},{"@type":"MedicalProcedure","name":"VATS Lobectomy","description":"Video-assisted thoracoscopic surgery to remove a lobe of the lung for lung cancer.","procedureType":"https://schema.org/SurgicalProcedure","bodyLocation":"Lung"},{"@type":"MedicalProcedure","name":"Robotic Esophagectomy/Gastrectomy","description":"Precise removal of the esophagus or stomach using the Da Vinci robotic system.","procedureType":"https://schema.org/SurgicalProcedure","bodyLocation":"Esophagus and stomach"}],"author":{"@type":"Physician","@id":"https://dranveshdharanikota.com/#physician","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/about","sameAs":["https://in.linkedin.com/in/dranveshdharanikotacancerspecialist","https://www.researchgate.net/profile/Anvesh-Dharanikota","https://orcid.org/0000-0001-7404-3239"]},"reviewedBy":{"@id":"https://dranveshdharanikota.com/#physician"},"significantLink":["https://dranveshdharanikota.com/techniques/robotic-surgery","https://dranveshdharanikota.com/techniques/crs-hipec","https://dranveshdharanikota.com/about","https://dranveshdharanikota.com/contact"]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","@id":"https://dranveshdharanikota.com/services/gi-thoracic#faq","url":"https://dranveshdharanikota.com/services/gi-thoracic","inLanguage":"en-IN","isPartOf":{"@id":"https://dranveshdharanikota.com/services/gi-thoracic#webpage"},"mainEntity":[{"@type":"Question","name":"What is minimally invasive GI surgery?","acceptedAnswer":{"@type":"Answer","text":"It involves using small incisions and specialized instruments to perform major operations like tumor removals. This leads to less pain, shorter hospital stays, and faster recovery compared to traditional open surgery."}},{"@type":"Question","name":"How long is the recovery for thoracic surgery?","acceptedAnswer":{"@type":"Answer","text":"With minimally invasive techniques like VATS, recovery is significantly faster. Patients often go home in 2-4 days and can return to normal activities in 2-3 weeks, compared to 6-8 weeks for open surgery."}},{"@type":"Question","name":"When is robotic surgery recommended for these cancers?","acceptedAnswer":{"@type":"Answer","text":"Robotic surgery is ideal for complex procedures in tight spaces, such as surgeries for esophageal, rectal, and pancreatic cancers. Dr. Anvesh will assess your specific case to determine if you are a suitable candidate."}}]}</script>
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
                      <a class="breadcrumb__link" href="/services">Services</a>
                    </div>
                  </li>
                  <li class="header__link">
                    <svg class="breadcrumb__separator" aria-hidden="true"><use href="#i-chevron-right"></use></svg>
                    <span class="breadcrumb__current"> GI &amp; Thoracic Overview </span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <section class="section-5" style="background: linear-gradient(to right, rgb(114, 5, 9), rgb(0, 32, 80))">
            <div class="container-5">
              <div data-reveal>
                <div class="eyebrow eyebrow--on-dark" data-reveal><span class="label-3">SPECIALIZED SERVICE</span></div>
                <h1 class="page-title page-title--on-dark">GI &amp; Thoracic Oncology</h1>
                <p class="page-lede page-lede--on-dark">Comprehensive surgical care for cancers of the digestive system and chest, using advanced minimally invasive techniques.</p>
              </div>
            </div>
          </section>
          <section class="section section--tinted">
            <div class="grid">
              <div data-reveal>
                <h2 class="section-title section-title--default">Understanding GI &amp; Thoracic Cancers</h2>
                <p class="lede">Gastrointestinal (GI) and thoracic oncology focuses on cancers affecting the digestive tract and organs within the chest cavity. This includes cancers of the esophagus, stomach, colon, rectum, liver, pancreas, and lungs.</p>
                <p class="text-6">Early and accurate diagnosis is critical. Treatment often involves a multidisciplinary approach, with surgery playing a key role in removing tumors and achieving long-term control.</p>
              </div>
              <div data-reveal>
                <img src="/photos/Understanding-GI.webp" alt="GI &amp; Thoracic Organs" class="image" width="600" height="400" decoding="async">
              </div>
            </div>
          </section>
          <section class="section section--default">
            <div class="container container--default">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">Recognizing the Signs</h2>
                <p class="section-lede">Symptoms can be subtle. Awareness of these signs is crucial for early detection.</p>
              </div>
              <div class="grid-2">
                <div data-reveal>
                  <img src="/photos/GI%20&amp;%20Thoracic-Cancers.webp" alt="Doctor reviewing scans" class="image" loading="lazy" decoding="async">
                </div>
                <div data-reveal>
                  <h3 class="heading">Common Symptoms</h3>
                  <div class="stack stack--md">
                    <div class="media-row">
                      <svg class="list-icon" aria-hidden="true"><use href="#i-alert-circle"></use></svg>
                      <span class="label">Difficulty swallowing or persistent indigestion.</span>
                    </div>
                    <div class="media-row">
                      <svg class="list-icon" aria-hidden="true"><use href="#i-alert-circle"></use></svg>
                      <span class="label">Unexplained weight loss or loss of appetite.</span>
                    </div>
                    <div class="media-row">
                      <svg class="list-icon" aria-hidden="true"><use href="#i-alert-circle"></use></svg>
                      <span class="label">Changes in bowel habits (diarrhea, constipation, blood in stool).</span>
                    </div>
                    <div class="media-row">
                      <svg class="list-icon" aria-hidden="true"><use href="#i-alert-circle"></use></svg>
                      <span class="label">Persistent abdominal pain, bloating, or cramps.</span>
                    </div>
                    <div class="media-row">
                      <svg class="list-icon" aria-hidden="true"><use href="#i-alert-circle"></use></svg>
                      <span class="label">Chronic cough, chest pain, or shortness of breath.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section section--tinted">
            <div class="container container--default">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">Advanced Surgical Procedures</h2>
                <p class="section-lede">Dr. Anvesh specializes in minimally invasive and robotic procedures for GI and thoracic cancers.</p>
              </div>
              <div class="card-grid card-grid--default">
                <div class="luxury-card" data-reveal>
                  <div class="card-8">
                    <div class="icon-tile icon-tile--lg icon-tile--tint">
                      <svg class="icon-14" aria-hidden="true"><use href="#i-share-2"></use></svg>
                    </div>
                    <h3 class="card-title">Laparoscopic &amp; Robotic Colectomy</h3>
                    <p class="small-text">Minimally invasive removal of parts of the colon for colorectal cancer.</p>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card-8">
                    <div class="icon-tile icon-tile--lg icon-tile--tint">
                      <svg class="icon-14" aria-hidden="true"><use href="#i-share-2"></use></svg>
                    </div>
                    <h3 class="card-title">VATS Lobectomy</h3>
                    <p class="small-text">Video-assisted thoracoscopic surgery to remove a lobe of the lung for lung cancer.</p>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card-8">
                    <div class="icon-tile icon-tile--lg icon-tile--tint">
                      <svg class="icon-14" aria-hidden="true"><use href="#i-share-2"></use></svg>
                    </div>
                    <h3 class="card-title">Robotic Esophagectomy/Gastrectomy</h3>
                    <p class="small-text">Precise removal of the esophagus or stomach using the Da Vinci robotic system.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section section--default">
            <div class="container container--default">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">The Surgical Journey</h2>
                <p class="section-lede">A structured and supportive approach from diagnosis to recovery.</p>
              </div>
              <div class="footer__grid">
                <div class="centred luxury-card" data-reveal>
                  <div class="card card--default">
                    <div class="icon-tile icon-tile--lg icon-tile--solid">
                      <svg class="icon icon--lg" aria-hidden="true"><use href="#i-clipboard"></use></svg>
                    </div>
                    <h3 class="card-title">Comprehensive Diagnosis</h3>
                    <p class="small-text">Utilizing advanced imaging and endoscopy to accurately stage the cancer and plan the surgical approach.</p>
                  </div>
                </div>
                <div class="centred luxury-card" data-reveal>
                  <div class="card card--default">
                    <div class="icon-tile icon-tile--lg icon-tile--solid">
                      <svg class="icon icon--lg" aria-hidden="true"><use href="#i-user"></use></svg>
                    </div>
                    <h3 class="card-title">Personalized Surgical Plan</h3>
                    <p class="small-text">Designing a tailored surgical strategy, choosing between robotic, laparoscopic, or open surgery for the best outcome.</p>
                  </div>
                </div>
                <div class="centred luxury-card" data-reveal>
                  <div class="card card--default">
                    <div class="icon-tile icon-tile--lg icon-tile--solid">
                      <svg class="icon icon--lg" aria-hidden="true"><use href="#i-star"></use></svg>
                    </div>
                    <h3 class="card-title">Precision Surgery</h3>
                    <p class="small-text">Performing the procedure with a focus on complete tumor removal, preservation of function, and minimal tissue damage.</p>
                  </div>
                </div>
                <div class="centred luxury-card" data-reveal>
                  <div class="card card--default">
                    <div class="icon-tile icon-tile--lg icon-tile--solid">
                      <svg class="icon icon--lg" aria-hidden="true"><use href="#i-heart"></use></svg>
                    </div>
                    <h3 class="card-title">Post-Operative Recovery</h3>
                    <p class="small-text">A structured recovery plan including nutritional support and physical therapy to ensure a smooth return to health.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section section--tinted">
            <div class="grid">
              <div data-reveal>
                <h2 class="section-title section-title--default">About Dr. Anvesh: Expertise in GI &amp; Thoracic Oncology</h2>
                <p class="lede">Dr. Anvesh Dharanikota has extensive international fellowship training in advanced GI and thoracic surgeries. His expertise in robotic and laparoscopic techniques allows for complex tumors to be removed with greater precision, minimal scarring, and faster patient recovery.</p>
                <p class="text-6">He leads a multidisciplinary tumor board, ensuring every patient receives a comprehensive and personalized treatment plan that combines the best of surgery, chemotherapy, and radiation therapy.</p>
                <div class="block-29" tabindex="0">
                  <a class="btn btn--primary btn--lg" href="/about">
                    <span>Learn More About Dr. Anvesh</span>
                    <svg class="icon icon--default" aria-hidden="true"><use href="#i-arrow-right"></use></svg>
                  </a>
                </div>
              </div>
              <div data-reveal>
                <img src="/photos/anvesh.webp" alt="Dr. Anvesh Dharanikota" class="image" width="600" height="600" loading="lazy" decoding="async">
              </div>
            </div>
          </section>
          <section class="section section--default">
            <div class="container container--default">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">Why Trust Dr. Anvesh?</h2>
                <p class="section-lede">Unparalleled expertise and a deep commitment to patient satisfaction and well-being.</p>
              </div>
              <div class="footer__grid">
                <div class="luxury-card" data-reveal>
                  <div class="card card--default">
                    <div class="icon-tile icon-tile--tint icon-tile--stacked">
                      <svg class="icon icon--md icon--accent-strong" aria-hidden="true"><use href="#i-award"></use></svg>
                    </div>
                    <h3 class="card-title">Gold Medalist Precision</h3>
                    <p class="small-text">Recognized for academic and surgical excellence, ensuring the highest standard of care.</p>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card card--default">
                    <div class="icon-tile icon-tile--tint icon-tile--stacked">
                      <svg class="icon icon--md icon--accent-strong" aria-hidden="true"><use href="#i-star"></use></svg>
                    </div>
                    <h3 class="card-title">International Training</h3>
                    <p class="small-text">Fellowship-trained in advanced GI and thoracic procedures from world-renowned institutions.</p>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card card--default">
                    <div class="icon-tile icon-tile--tint icon-tile--stacked">
                      <svg class="icon icon--md icon--accent-strong" aria-hidden="true"><use href="#i-heart"></use></svg>
                    </div>
                    <h3 class="card-title">Patient-Centric Approach</h3>
                    <p class="small-text">Personalized treatment plans that prioritize both your health and your long-term quality of life.</p>
                  </div>
                </div>
                <div class="luxury-card" data-reveal>
                  <div class="card card--default">
                    <div class="icon-tile icon-tile--tint icon-tile--stacked">
                      <svg class="icon icon--md icon--accent-strong" aria-hidden="true"><use href="#i-users"></use></svg>
                    </div>
                    <h3 class="card-title">Multidisciplinary Team</h3>
                    <p class="small-text">Collaboration with oncologists, radiologists, and pulmonologists for comprehensive care.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section section--tinted">
            <div class="container container--narrow">
              <div class="section-head section-head--default" data-reveal>
                <h2 class="section-title section-title--default">Frequently Asked Questions</h2>
              </div>
              <div class="stack stack--md">
                <div class="panel">
                  <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-1"><div class="split-row split-row--default"><h3 class="accordion__question accordion__question--default">What is minimally invasive GI surgery?</h3><div class="accordion__icon accordion__icon--unstyled" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></button>
                  <div class="accordion__panel" id="faq-1" data-accordion-panel hidden>
                    <div data-accordion-inner>
                      <div class="accordion__body">
                        <p class="body-text">It involves using small incisions and specialized instruments to perform major operations like tumor removals. This leads to less pain, shorter hospital stays, and faster recovery compared to traditional open surgery.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-2"><div class="split-row split-row--default"><h3 class="accordion__question accordion__question--default">How long is the recovery for thoracic surgery?</h3><div class="accordion__icon accordion__icon--unstyled" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></button>
                  <div class="accordion__panel" id="faq-2" data-accordion-panel hidden>
                    <div data-accordion-inner>
                      <div class="accordion__body">
                        <p class="body-text">With minimally invasive techniques like VATS, recovery is significantly faster. Patients often go home in 2-4 days and can return to normal activities in 2-3 weeks, compared to 6-8 weeks for open surgery.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-3"><div class="split-row split-row--default"><h3 class="accordion__question accordion__question--default">When is robotic surgery recommended for these cancers?</h3><div class="accordion__icon accordion__icon--unstyled" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></button>
                  <div class="accordion__panel" id="faq-3" data-accordion-panel hidden>
                    <div data-accordion-inner>
                      <div class="accordion__body">
                        <p class="body-text">Robotic surgery is ideal for complex procedures in tight spaces, such as surgeries for esophageal, rectal, and pancreatic cancers. Dr. Anvesh will assess your specific case to determine if you are a suitable candidate.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section-4">
            <div class="container-4">
              <div data-reveal>
                <h2 class="title">Schedule Your Consultation</h2>
                <p class="lede-2">Take the first step towards comprehensive cancer care. Contact us to book your appointment with Dr. Anvesh.</p>
                <div tabindex="0">
                  <a class="button" href="/contact">
                    <svg class="icon icon--md" aria-hidden="true"><use href="#i-calendar"></use></svg>
                    <span>Book a Consultation</span>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/../footer.php';
