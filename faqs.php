<?php
$route          = '/faqs';
$title          = 'Cancer & Robotic Surgery FAQs | Dr. Anvesh Dharanikota';
$description    = 'Dr. Anvesh Dharanikota answers 40+ questions on cancer surgery in Hyderabad: robotic options, recovery time, risks, hospital stay and follow-up care.';
$og_title       = 'Cancer Surgery FAQs Answered by Dr. Anvesh Dharanikota';
$og_description = 'Dr. Anvesh Dharanikota answers 40+ common patient questions on cancer surgery, robotic procedures, recovery, risks and follow-up care in Hyderabad.';

$schema = <<<'SCHEMA'
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"https://dranveshdharanikota.com/faqs#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://dranveshdharanikota.com/"},{"@type":"ListItem","position":2,"name":"FAQs","item":"https://dranveshdharanikota.com/faqs"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"MedicalWebPage","@id":"https://dranveshdharanikota.com/faqs#webpage","url":"https://dranveshdharanikota.com/faqs","name":"Cancer & Robotic Surgery FAQs","headline":"Your Questions Answered","description":"Dr. Anvesh Dharanikota addresses the most common questions about cancer surgery, robotic procedures, and patient care.","inLanguage":"en-IN","specialty":"https://schema.org/Oncologic","about":{"@type":"MedicalCondition","name":"Cancer"},"isPartOf":{"@type":"WebSite","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/"},"breadcrumb":{"@id":"https://dranveshdharanikota.com/faqs#breadcrumb"},"author":{"@type":"Physician","@id":"https://dranveshdharanikota.com/#physician","name":"Dr. Anvesh Dharanikota","url":"https://dranveshdharanikota.com/about"},"mainEntity":{"@id":"https://dranveshdharanikota.com/faqs#faq"}}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","@id":"https://dranveshdharanikota.com/faqs#faq","url":"https://dranveshdharanikota.com/faqs","name":"Frequently Asked Questions","inLanguage":"en-IN","mainEntity":[{"@type":"Question","name":"What kind of cancer do I have, and what stage is it?","acceptedAnswer":{"@type":"Answer","text":"Your cancer's type and stage are determined by biopsy and scans. This helps us create a treatment plan based on how early or advanced your cancer is. Understanding the stage is key to predicting treatment response and outcomes."}},{"@type":"Question","name":"How do I know if my cancer has spread to other organs?","acceptedAnswer":{"@type":"Answer","text":"We use imaging tests like CT scans, MRIs, and sometimes PET scans to check for spread (metastasis). If cancer has spread to other organs or lymph nodes, it can change the treatment approach. Early detection of spread makes a big difference."}},{"@type":"Question","name":"Why do I need surgery for my cancer?","acceptedAnswer":{"@type":"Answer","text":"Surgery is often needed to remove the tumor and affected tissues, which can be vital for curing or controlling the disease. In some cases, surgery also relieves symptoms. The need for surgery depends on your cancer's type, location, and stage."}},{"@type":"Question","name":"What are my options for surgery?","acceptedAnswer":{"@type":"Answer","text":"Depending on your cancer, you may have options such as open, laparoscopic, or robotic surgery. We discuss each method, its benefits, risks, and best suitability for you. Our goal is to offer the best outcome with the least invasiveness."}},{"@type":"Question","name":"Is robotic surgery better than traditional methods?","acceptedAnswer":{"@type":"Answer","text":"Robotic surgery offers more precision, smaller incisions, and quicker recovery. Not all cases are suitable, but for many cancers, robotic methods have shown superior results in terms of pain and hospital stay. I'll recommend what's best for you."}},{"@type":"Question","name":"How experienced are you with robotic and minimally invasive cancer surgeries?","acceptedAnswer":{"@type":"Answer","text":"I have over 12 years of experience, with extensive training in robotic, laparoscopic, and oncoplastic surgery. I regularly perform these surgeries and keep updated with the latest advances to ensure the best patient outcomes."}},{"@type":"Question","name":"What cancers are suitable for robotic surgery?","acceptedAnswer":{"@type":"Answer","text":"Robotic surgery is used for prostate, colorectal, uterine, stomach, esophageal, and kidney cancers, among others. The suitability depends on your individual case and tumor complexity. I'll assess and explain if you're a candidate."}},{"@type":"Question","name":"Is robotic surgery safe for cancer?","acceptedAnswer":{"@type":"Answer","text":"Yes, for eligible patients, it is safe and often results in less blood loss, faster recovery, and lower complications. The robotic system enhances the surgeon's precision while minimizing hand tremors and fatigue during complex procedures."}},{"@type":"Question","name":"What are the risks involved in cancer surgery?","acceptedAnswer":{"@type":"Answer","text":"Risks include bleeding, infection, injury to nearby organs, and reaction to anesthesia. Major complications are rare, especially with experienced surgeons and in good facilities. We take all precautions to minimize any risks during your surgery."}},{"@type":"Question","name":"What is the recovery process like?","acceptedAnswer":{"@type":"Answer","text":"You'll initially stay in the hospital for monitoring, usually for a few days, depending on your surgery type. Most patients start walking soon and gradually resume normal activities within weeks, especially with minimally invasive procedures."}},{"@type":"Question","name":"Will I need other treatments besides surgery?","acceptedAnswer":{"@type":"Answer","text":"Depending on the tumor type and pathology, you might need chemotherapy, radiation, or targeted therapy after surgery. Sometimes, treatments are given before (neoadjuvant) to shrink tumors and improve results. We discuss this in detail beforehand."}},{"@type":"Question","name":"How painful will the surgery and recovery be?","acceptedAnswer":{"@type":"Answer","text":"Modern pain management and minimally invasive techniques minimize post-surgical pain. Most patients need only mild painkillers and describe discomfort as manageable. Severe pain is uncommon, and we address it promptly."}},{"@type":"Question","name":"Will there be visible scars?","acceptedAnswer":{"@type":"Answer","text":"Minimally invasive and robotic surgeries use small incisions, so scars are minimal and fade with time. Open surgeries may have bigger scars, but we plan incisions carefully to balance access and appearance wherever possible."}},{"@type":"Question","name":"What dietary restrictions are there after surgery?","acceptedAnswer":{"@type":"Answer","text":"Initially, you may need soft or liquid foods, depending on the surgery site. Gradually, you'll return to a normal diet as your body tolerates. Specific advice is given post-operatively and based on how you're healing."}},{"@type":"Question","name":"How soon can I get back to my normal routine?","acceptedAnswer":{"@type":"Answer","text":"Many patients resume light activities in 1-2 weeks and normal routines (including work) in 3-6 weeks. Recovery time can vary based on the surgery and individual health."}},{"@type":"Question","name":"Will I need to stay in the hospital? For how long?","acceptedAnswer":{"@type":"Answer","text":"Most minimally invasive surgeries require 2-4 days of hospital stay, sometimes shorter. Open surgeries may require a bit longer. The exact duration depends on your recovery rate and surgery type."}},{"@type":"Question","name":"What is oncoplastic breast surgery?","acceptedAnswer":{"@type":"Answer","text":"Oncoplastic surgery combines cancer removal with plastic surgery techniques to preserve or improve the breast's appearance. It offers both cancer control and better cosmetic outcomes for qualifying patients."}},{"@type":"Question","name":"Will lymph nodes be removed? Is it necessary?","acceptedAnswer":{"@type":"Answer","text":"Lymph node removal is important for many cancers to check if the disease has spread. This helps guide further treatment and predict outcomes. We use sentinel node biopsy or full dissection as needed by your situation."}},{"@type":"Question","name":"How do you ensure you remove all the cancer?","acceptedAnswer":{"@type":"Answer","text":"All removed tissues are analyzed by a pathologist for \"clear margins\"—no cancer at the edges—which reduces the risk of recurrence. Imaging and intra-operative checks also help us verify complete removal."}},{"@type":"Question","name":"What's the risk that cancer will come back after surgery?","acceptedAnswer":{"@type":"Answer","text":"The risk depends on your cancer's stage, type, and how much could be removed. Close follow-up and, when needed, further therapy can detect and address any recurrence early."}},{"@type":"Question","name":"Will my insurance cover these surgeries, including robotic ones?","acceptedAnswer":{"@type":"Answer","text":"Most major insurers cover cancer surgery, but specific coverage for robotic or advanced techniques can vary. My office will help you confirm your eligibility and financial options before scheduling."}},{"@type":"Question","name":"How long will the surgery itself take?","acceptedAnswer":{"@type":"Answer","text":"Cancer surgeries typically last between 1-6 hours, depending on the complexity and location. I'll give you a more precise expectation once the surgical plan is set."}},{"@type":"Question","name":"When can I drive or travel after surgery?","acceptedAnswer":{"@type":"Answer","text":"You can usually drive within 1-2 weeks, once you're off strong pain medications and feel physically able. Avoid heavy travel immediately post-surgery; we'll discuss safe timelines for you."}},{"@type":"Question","name":"What are the warning signs I should look out for after surgery?","acceptedAnswer":{"@type":"Answer","text":"Watch for fever, severe pain, redness or swelling at incision sites, difficulty breathing, or abnormal bleeding. Contact my team immediately if you notice any of these symptoms."}},{"@type":"Question","name":"Can elderly or medically complex patients safely undergo robotic or major cancer surgery?","acceptedAnswer":{"@type":"Answer","text":"Yes, with proper pre-operative assessment and precautions, elderly and high-risk patients can have safe outcomes. The minimally invasive approach is often better tolerated."}},{"@type":"Question","name":"Will I need a blood transfusion?","acceptedAnswer":{"@type":"Answer","text":"Blood loss is typically low, especially in robotic surgeries, making transfusions rare. If there's any anticipated risk, we discuss it and plan for safety."}},{"@type":"Question","name":"How do you minimize complications and infection risk?","acceptedAnswer":{"@type":"Answer","text":"We follow strict protocols for sterilization, surgical technique, and post-operative care. Early mobilization and rapid recovery protocols also reduce complications."}},{"@type":"Question","name":"Will I need help at home after surgery?","acceptedAnswer":{"@type":"Answer","text":"A few days of support are often helpful, especially for daily chores or child care. For major surgeries, arrange help for at least the first week post-discharge."}},{"@type":"Question","name":"How is my follow-up plan scheduled?","acceptedAnswer":{"@type":"Answer","text":"You'll have follow-ups at regular intervals—typically within a week after discharge, then monthly or quarterly as needed. Follow-up helps spot complications or tumor recurrence early."}},{"@type":"Question","name":"Can I seek a second opinion?","acceptedAnswer":{"@type":"Answer","text":"Yes, you are always encouraged to seek second opinions before making major treatment decisions. We provide reports and recommendations to other experts on request."}},{"@type":"Question","name":"How do you decide on the best treatment plan?","acceptedAnswer":{"@type":"Answer","text":"We use guidelines, patient preferences, and a team approach with other specialists like radiologists and medical oncologists. Every plan is personalized for your best outcome."}},{"@type":"Question","name":"Can my family accompany me on the day of surgery?","acceptedAnswer":{"@type":"Answer","text":"Yes, a family member can stay with you for comfort and support until your surgery. Policies vary, but we try to accommodate your needs as much as possible."}},{"@type":"Question","name":"How is the success of robotic cancer surgery measured?","acceptedAnswer":{"@type":"Answer","text":"Success is measured by complete tumor removal, fewer complications, faster return to normal activities, and lower recurrence rates. We track all of these for every patient."}},{"@type":"Question","name":"How do I prepare myself emotionally for cancer surgery?","acceptedAnswer":{"@type":"Answer","text":"Talking to your care team, family, and support groups can help. Information and counseling are available to address your fears and questions."}},{"@type":"Question","name":"Are all types of tumors suitable for robotic surgery?","acceptedAnswer":{"@type":"Answer","text":"Not all tumors are best approached robotically. Factors like size, location, and invasion into nearby organs guide the choice of surgical method."}},{"@type":"Question","name":"What advancements are there in surgical oncology?","acceptedAnswer":{"@type":"Answer","text":"Recent advances include robotics, image-guided surgery, and personalized cancer care based on genetic profiling—these improve safety and outcomes."}},{"@type":"Question","name":"Is robotic surgery available at all hospitals?","acceptedAnswer":{"@type":"Answer","text":"Robotic surgery is offered at select centers with the necessary technology and expertise. I perform these procedures at fully equipped, accredited hospitals."}},{"@type":"Question","name":"How soon after diagnosis should I have surgery?","acceptedAnswer":{"@type":"Answer","text":"Earlier is usually better, but we schedule after all pre-operative assessments. Urgency depends on the cancer type and how quickly it is progressing."}},{"@type":"Question","name":"How will surgery affect my quality of life?","acceptedAnswer":{"@type":"Answer","text":"Most patients regain their pre-surgery quality of life, if not better, once recovered. We support you with rehabilitation, counseling, and lifestyle advice."}},{"@type":"Question","name":"How can I improve my recovery after cancer surgery?","acceptedAnswer":{"@type":"Answer","text":"Follow instructions, stay active as advised, eat a balanced diet, and attend all appointments. Emotional support and positive thinking also aid healing."}}]}</script>
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
                    <span class="breadcrumb__current"> FAQs </span>
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
                <div class="eyebrow eyebrow--on-dark" data-reveal><span class="label-3">FREQUENTLY ASKED QUESTIONS</span></div>
                <h1 class="page-title page-title--on-dark"> Your Questions Answered </h1>
                <p class="page-lede page-lede--on-dark">Dr. Anvesh Dharanikota addresses the most common questions about cancer surgery, robotic procedures, and patient care</p>
              </div>
              <div class="questions-answered__container" data-reveal>
                <div class="relative-box">
                  <svg class="questions-answered__icon" aria-hidden="true"><use href="#i-search"></use></svg>
                  <label class="sr-only" for="faq-search">Search frequently asked questions</label><input type="search" id="faq-search" placeholder="Search your question..." class="questions-answered__field" value="" data-filter-search="faqs">
                </div>
              </div>
              <div class="grid-6" data-reveal>
                <div class="block">
                  <div class="block-4">40+</div>
                  <div class="block-11">Common Questions</div>
                </div>
                <div class="block">
                  <div class="block-4">10</div>
                  <div class="block-11">Categories</div>
                </div>
                <div class="block">
                  <div class="block-4">12+</div>
                  <div class="block-11">Years Experience</div>
                </div>
                <div class="block">
                  <div class="block-4">24/7</div>
                  <div class="block-11">Support Available</div>
                </div>
              </div>
            </div>
          </section>
          <section class="section-7">
            <div class="container container--default">
              <div class="grid-13">
                <div class="block-31" data-reveal>
                  <div class="card-14">
                    <h3 class="subheading-10" id="faq-cat-label">Categories</h3>
                    <div class="stack stack--2xs" role="group" aria-labelledby="faq-cat-label" data-filter-group="faqs"><button class="category-pill is-active" type="button" tabindex="0" data-filter="__all__" aria-pressed="true"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-help-circle"></use></svg><span class="label-5">All</span></div><span class="badge-7">40</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Diagnosis &amp; Staging" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-search"></use></svg><span class="label-5">Diagnosis &amp; Staging</span></div><span class="badge-3">2</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Surgery Options" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-activity"></use></svg><span class="label-5">Surgery Options</span></div><span class="badge-3">2</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Robotic Surgery" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-activity"></use></svg><span class="label-5">Robotic Surgery</span></div><span class="badge-3">4</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Recovery Process" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-user"></use></svg><span class="label-5">Recovery Process</span></div><span class="badge-3">7</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Risks &amp; Safety" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-shield"></use></svg><span class="label-5">Risks &amp; Safety</span></div><span class="badge-3">2</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Treatment Plan" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-calendar"></use></svg><span class="label-5">Treatment Plan</span></div><span class="badge-3">2</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Surgery Details" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-activity"></use></svg><span class="label-5">Surgery Details</span></div><span class="badge-3">4</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Post-Surgery Care" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-user"></use></svg><span class="label-5">Post-Surgery Care</span></div><span class="badge-3">1</span></button><button class="category-pill" type="button" tabindex="0" data-filter="Follow-up Care" aria-pressed="false"><div class="inline-row inline-row--default"><svg class="icon icon--default" aria-hidden="true"><use href="#i-calendar"></use></svg><span class="label-5">Follow-up Care</span></div><span class="badge-3">1</span></button></div>
                  </div>
                </div>
                <div class="block-32" data-reveal>
                  <p class="sr-only" role="status" aria-live="polite" data-filter-status="faqs"></p>
                  <div class="stack stack--md">
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Diagnosis &amp; Staging" data-search="diagnosis &amp; stagingwhat kind of cancer do i have, and what stage is it?your cancer's type and stage are determined by biopsy and scans. this helps us create a treatment plan based on how early or advanced your cancer is. understanding the stage is key to predicting treatment response and outcomes.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-1"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Diagnosis &amp; Staging</span></div><h3 class="accordion__question accordion__question--plain">What kind of cancer do I have, and what stage is it?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-1" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Your cancer's type and stage are determined by biopsy and scans. This helps us create a treatment plan based on how early or advanced your cancer is. Understanding the stage is key to predicting treatment response and outcomes.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Diagnosis &amp; Staging" data-search="diagnosis &amp; staginghow do i know if my cancer has spread to other organs?we use imaging tests like ct scans, mris, and sometimes pet scans to check for spread (metastasis). if cancer has spread to other organs or lymph nodes, it can change the treatment approach. early detection of spread makes a big difference.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-2"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Diagnosis &amp; Staging</span></div><h3 class="accordion__question accordion__question--plain">How do I know if my cancer has spread to other organs?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-2" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">We use imaging tests like CT scans, MRIs, and sometimes PET scans to check for spread (metastasis). If cancer has spread to other organs or lymph nodes, it can change the treatment approach. Early detection of spread makes a big difference.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Surgery Options" data-search="surgery optionswhy do i need surgery for my cancer?surgery is often needed to remove the tumor and affected tissues, which can be vital for curing or controlling the disease. in some cases, surgery also relieves symptoms. the need for surgery depends on your cancer's type, location, and stage.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-3"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Surgery Options</span></div><h3 class="accordion__question accordion__question--plain">Why do I need surgery for my cancer?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-3" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Surgery is often needed to remove the tumor and affected tissues, which can be vital for curing or controlling the disease. In some cases, surgery also relieves symptoms. The need for surgery depends on your cancer's type, location, and stage.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Surgery Options" data-search="surgery optionswhat are my options for surgery?depending on your cancer, you may have options such as open, laparoscopic, or robotic surgery. we discuss each method, its benefits, risks, and best suitability for you. our goal is to offer the best outcome with the least invasiveness.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-4"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Surgery Options</span></div><h3 class="accordion__question accordion__question--plain">What are my options for surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-4" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Depending on your cancer, you may have options such as open, laparoscopic, or robotic surgery. We discuss each method, its benefits, risks, and best suitability for you. Our goal is to offer the best outcome with the least invasiveness.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Robotic Surgery" data-search="robotic surgeryis robotic surgery better than traditional methods?robotic surgery offers more precision, smaller incisions, and quicker recovery. not all cases are suitable, but for many cancers, robotic methods have shown superior results in terms of pain and hospital stay. i'll recommend what's best for you.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-5"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Robotic Surgery</span></div><h3 class="accordion__question accordion__question--plain">Is robotic surgery better than traditional methods?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-5" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Robotic surgery offers more precision, smaller incisions, and quicker recovery. Not all cases are suitable, but for many cancers, robotic methods have shown superior results in terms of pain and hospital stay. I'll recommend what's best for you.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Experience &amp; Expertise" data-search="experience &amp; expertisehow experienced are you with robotic and minimally invasive cancer surgeries?i have over 12 years of experience, with extensive training in robotic, laparoscopic, and oncoplastic surgery. i regularly perform these surgeries and keep updated with the latest advances to ensure the best patient outcomes.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-6"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Experience &amp; Expertise</span></div><h3 class="accordion__question accordion__question--plain">How experienced are you with robotic and minimally invasive cancer surgeries?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-6" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">I have over 12 years of experience, with extensive training in robotic, laparoscopic, and oncoplastic surgery. I regularly perform these surgeries and keep updated with the latest advances to ensure the best patient outcomes.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Robotic Surgery" data-search="robotic surgerywhat cancers are suitable for robotic surgery?robotic surgery is used for prostate, colorectal, uterine, stomach, esophageal, and kidney cancers, among others. the suitability depends on your individual case and tumor complexity. i'll assess and explain if you're a candidate.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-7"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Robotic Surgery</span></div><h3 class="accordion__question accordion__question--plain">What cancers are suitable for robotic surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-7" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Robotic surgery is used for prostate, colorectal, uterine, stomach, esophageal, and kidney cancers, among others. The suitability depends on your individual case and tumor complexity. I'll assess and explain if you're a candidate.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Robotic Surgery" data-search="robotic surgeryis robotic surgery safe for cancer?yes, for eligible patients, it is safe and often results in less blood loss, faster recovery, and lower complications. the robotic system enhances the surgeon's precision while minimizing hand tremors and fatigue during complex procedures.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-8"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Robotic Surgery</span></div><h3 class="accordion__question accordion__question--plain">Is robotic surgery safe for cancer?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-8" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Yes, for eligible patients, it is safe and often results in less blood loss, faster recovery, and lower complications. The robotic system enhances the surgeon's precision while minimizing hand tremors and fatigue during complex procedures.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Risks &amp; Safety" data-search="risks &amp; safetywhat are the risks involved in cancer surgery?risks include bleeding, infection, injury to nearby organs, and reaction to anesthesia. major complications are rare, especially with experienced surgeons and in good facilities. we take all precautions to minimize any risks during your surgery.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-9"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Risks &amp; Safety</span></div><h3 class="accordion__question accordion__question--plain">What are the risks involved in cancer surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-9" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Risks include bleeding, infection, injury to nearby organs, and reaction to anesthesia. Major complications are rare, especially with experienced surgeons and in good facilities. We take all precautions to minimize any risks during your surgery.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Recovery Process" data-search="recovery processwhat is the recovery process like?you'll initially stay in the hospital for monitoring, usually for a few days, depending on your surgery type. most patients start walking soon and gradually resume normal activities within weeks, especially with minimally invasive procedures.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-10"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Recovery Process</span></div><h3 class="accordion__question accordion__question--plain">What is the recovery process like?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-10" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">You'll initially stay in the hospital for monitoring, usually for a few days, depending on your surgery type. Most patients start walking soon and gradually resume normal activities within weeks, especially with minimally invasive procedures.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Treatment Plan" data-search="treatment planwill i need other treatments besides surgery?depending on the tumor type and pathology, you might need chemotherapy, radiation, or targeted therapy after surgery. sometimes, treatments are given before (neoadjuvant) to shrink tumors and improve results. we discuss this in detail beforehand.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-11"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Treatment Plan</span></div><h3 class="accordion__question accordion__question--plain">Will I need other treatments besides surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-11" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Depending on the tumor type and pathology, you might need chemotherapy, radiation, or targeted therapy after surgery. Sometimes, treatments are given before (neoadjuvant) to shrink tumors and improve results. We discuss this in detail beforehand.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Recovery Process" data-search="recovery processhow painful will the surgery and recovery be?modern pain management and minimally invasive techniques minimize post-surgical pain. most patients need only mild painkillers and describe discomfort as manageable. severe pain is uncommon, and we address it promptly.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-12"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Recovery Process</span></div><h3 class="accordion__question accordion__question--plain">How painful will the surgery and recovery be?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-12" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Modern pain management and minimally invasive techniques minimize post-surgical pain. Most patients need only mild painkillers and describe discomfort as manageable. Severe pain is uncommon, and we address it promptly.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Recovery Process" data-search="recovery processwill there be visible scars?minimally invasive and robotic surgeries use small incisions, so scars are minimal and fade with time. open surgeries may have bigger scars, but we plan incisions carefully to balance access and appearance wherever possible.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-13"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Recovery Process</span></div><h3 class="accordion__question accordion__question--plain">Will there be visible scars?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-13" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Minimally invasive and robotic surgeries use small incisions, so scars are minimal and fade with time. Open surgeries may have bigger scars, but we plan incisions carefully to balance access and appearance wherever possible.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Recovery Process" data-search="recovery processwhat dietary restrictions are there after surgery?initially, you may need soft or liquid foods, depending on the surgery site. gradually, you'll return to a normal diet as your body tolerates. specific advice is given post-operatively and based on how you're healing.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-14"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Recovery Process</span></div><h3 class="accordion__question accordion__question--plain">What dietary restrictions are there after surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-14" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Initially, you may need soft or liquid foods, depending on the surgery site. Gradually, you'll return to a normal diet as your body tolerates. Specific advice is given post-operatively and based on how you're healing.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Recovery Process" data-search="recovery processhow soon can i get back to my normal routine?many patients resume light activities in 1-2 weeks and normal routines (including work) in 3-6 weeks. recovery time can vary based on the surgery and individual health.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-15"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Recovery Process</span></div><h3 class="accordion__question accordion__question--plain">How soon can I get back to my normal routine?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-15" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Many patients resume light activities in 1-2 weeks and normal routines (including work) in 3-6 weeks. Recovery time can vary based on the surgery and individual health.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Hospital Stay" data-search="hospital staywill i need to stay in the hospital? for how long?most minimally invasive surgeries require 2-4 days of hospital stay, sometimes shorter. open surgeries may require a bit longer. the exact duration depends on your recovery rate and surgery type.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-16"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Hospital Stay</span></div><h3 class="accordion__question accordion__question--plain">Will I need to stay in the hospital? For how long?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-16" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Most minimally invasive surgeries require 2-4 days of hospital stay, sometimes shorter. Open surgeries may require a bit longer. The exact duration depends on your recovery rate and surgery type.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Specialized Procedures" data-search="specialized procedureswhat is oncoplastic breast surgery?oncoplastic surgery combines cancer removal with plastic surgery techniques to preserve or improve the breast's appearance. it offers both cancer control and better cosmetic outcomes for qualifying patients.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-17"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Specialized Procedures</span></div><h3 class="accordion__question accordion__question--plain">What is oncoplastic breast surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-17" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Oncoplastic surgery combines cancer removal with plastic surgery techniques to preserve or improve the breast's appearance. It offers both cancer control and better cosmetic outcomes for qualifying patients.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Surgery Details" data-search="surgery detailswill lymph nodes be removed? is it necessary?lymph node removal is important for many cancers to check if the disease has spread. this helps guide further treatment and predict outcomes. we use sentinel node biopsy or full dissection as needed by your situation.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-18"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Surgery Details</span></div><h3 class="accordion__question accordion__question--plain">Will lymph nodes be removed? Is it necessary?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-18" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Lymph node removal is important for many cancers to check if the disease has spread. This helps guide further treatment and predict outcomes. We use sentinel node biopsy or full dissection as needed by your situation.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Surgery Details" data-search="surgery detailshow do you ensure you remove all the cancer?all removed tissues are analyzed by a pathologist for &quot;clear margins&quot;—no cancer at the edges—which reduces the risk of recurrence. imaging and intra-operative checks also help us verify complete removal.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-19"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Surgery Details</span></div><h3 class="accordion__question accordion__question--plain">How do you ensure you remove all the cancer?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-19" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">All removed tissues are analyzed by a pathologist for &quot;clear margins&quot;—no cancer at the edges—which reduces the risk of recurrence. Imaging and intra-operative checks also help us verify complete removal.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Prognosis" data-search="prognosiswhat's the risk that cancer will come back after surgery?the risk depends on your cancer's stage, type, and how much could be removed. close follow-up and, when needed, further therapy can detect and address any recurrence early.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-20"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Prognosis</span></div><h3 class="accordion__question accordion__question--plain">What's the risk that cancer will come back after surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-20" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">The risk depends on your cancer's stage, type, and how much could be removed. Close follow-up and, when needed, further therapy can detect and address any recurrence early.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Insurance &amp; Costs" data-search="insurance &amp; costswill my insurance cover these surgeries, including robotic ones?most major insurers cover cancer surgery, but specific coverage for robotic or advanced techniques can vary. my office will help you confirm your eligibility and financial options before scheduling.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-21"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Insurance &amp; Costs</span></div><h3 class="accordion__question accordion__question--plain">Will my insurance cover these surgeries, including robotic ones?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-21" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Most major insurers cover cancer surgery, but specific coverage for robotic or advanced techniques can vary. My office will help you confirm your eligibility and financial options before scheduling.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Surgery Details" data-search="surgery detailshow long will the surgery itself take?cancer surgeries typically last between 1-6 hours, depending on the complexity and location. i'll give you a more precise expectation once the surgical plan is set.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-22"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Surgery Details</span></div><h3 class="accordion__question accordion__question--plain">How long will the surgery itself take?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-22" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Cancer surgeries typically last between 1-6 hours, depending on the complexity and location. I'll give you a more precise expectation once the surgical plan is set.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Recovery Process" data-search="recovery processwhen can i drive or travel after surgery?you can usually drive within 1-2 weeks, once you're off strong pain medications and feel physically able. avoid heavy travel immediately post-surgery; we'll discuss safe timelines for you.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-23"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Recovery Process</span></div><h3 class="accordion__question accordion__question--plain">When can I drive or travel after surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-23" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">You can usually drive within 1-2 weeks, once you're off strong pain medications and feel physically able. Avoid heavy travel immediately post-surgery; we'll discuss safe timelines for you.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Post-Surgery Care" data-search="post-surgery carewhat are the warning signs i should look out for after surgery?watch for fever, severe pain, redness or swelling at incision sites, difficulty breathing, or abnormal bleeding. contact my team immediately if you notice any of these symptoms.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-24"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Post-Surgery Care</span></div><h3 class="accordion__question accordion__question--plain">What are the warning signs I should look out for after surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-24" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Watch for fever, severe pain, redness or swelling at incision sites, difficulty breathing, or abnormal bleeding. Contact my team immediately if you notice any of these symptoms.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Special Cases" data-search="special casescan elderly or medically complex patients safely undergo robotic or major cancer surgery?yes, with proper pre-operative assessment and precautions, elderly and high-risk patients can have safe outcomes. the minimally invasive approach is often better tolerated.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-25"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Special Cases</span></div><h3 class="accordion__question accordion__question--plain">Can elderly or medically complex patients safely undergo robotic or major cancer surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-25" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Yes, with proper pre-operative assessment and precautions, elderly and high-risk patients can have safe outcomes. The minimally invasive approach is often better tolerated.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Surgery Details" data-search="surgery detailswill i need a blood transfusion?blood loss is typically low, especially in robotic surgeries, making transfusions rare. if there's any anticipated risk, we discuss it and plan for safety.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-26"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Surgery Details</span></div><h3 class="accordion__question accordion__question--plain">Will I need a blood transfusion?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-26" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Blood loss is typically low, especially in robotic surgeries, making transfusions rare. If there's any anticipated risk, we discuss it and plan for safety.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Risks &amp; Safety" data-search="risks &amp; safetyhow do you minimize complications and infection risk?we follow strict protocols for sterilization, surgical technique, and post-operative care. early mobilization and rapid recovery protocols also reduce complications.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-27"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Risks &amp; Safety</span></div><h3 class="accordion__question accordion__question--plain">How do you minimize complications and infection risk?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-27" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">We follow strict protocols for sterilization, surgical technique, and post-operative care. Early mobilization and rapid recovery protocols also reduce complications.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Recovery Process" data-search="recovery processwill i need help at home after surgery?a few days of support are often helpful, especially for daily chores or child care. for major surgeries, arrange help for at least the first week post-discharge.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-28"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Recovery Process</span></div><h3 class="accordion__question accordion__question--plain">Will I need help at home after surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-28" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">A few days of support are often helpful, especially for daily chores or child care. For major surgeries, arrange help for at least the first week post-discharge.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Follow-up Care" data-search="follow-up carehow is my follow-up plan scheduled?you'll have follow-ups at regular intervals—typically within a week after discharge, then monthly or quarterly as needed. follow-up helps spot complications or tumor recurrence early.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-29"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Follow-up Care</span></div><h3 class="accordion__question accordion__question--plain">How is my follow-up plan scheduled?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-29" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">You'll have follow-ups at regular intervals—typically within a week after discharge, then monthly or quarterly as needed. Follow-up helps spot complications or tumor recurrence early.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Second Opinion" data-search="second opinioncan i seek a second opinion?yes, you are always encouraged to seek second opinions before making major treatment decisions. we provide reports and recommendations to other experts on request.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-30"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Second Opinion</span></div><h3 class="accordion__question accordion__question--plain">Can I seek a second opinion?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-30" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Yes, you are always encouraged to seek second opinions before making major treatment decisions. We provide reports and recommendations to other experts on request.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Treatment Plan" data-search="treatment planhow do you decide on the best treatment plan?we use guidelines, patient preferences, and a team approach with other specialists like radiologists and medical oncologists. every plan is personalized for your best outcome.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-31"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Treatment Plan</span></div><h3 class="accordion__question accordion__question--plain">How do you decide on the best treatment plan?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-31" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">We use guidelines, patient preferences, and a team approach with other specialists like radiologists and medical oncologists. Every plan is personalized for your best outcome.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Surgery Day" data-search="surgery daycan my family accompany me on the day of surgery?yes, a family member can stay with you for comfort and support until your surgery. policies vary, but we try to accommodate your needs as much as possible.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-32"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Surgery Day</span></div><h3 class="accordion__question accordion__question--plain">Can my family accompany me on the day of surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-32" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Yes, a family member can stay with you for comfort and support until your surgery. Policies vary, but we try to accommodate your needs as much as possible.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Success Metrics" data-search="success metricshow is the success of robotic cancer surgery measured?success is measured by complete tumor removal, fewer complications, faster return to normal activities, and lower recurrence rates. we track all of these for every patient.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-33"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Success Metrics</span></div><h3 class="accordion__question accordion__question--plain">How is the success of robotic cancer surgery measured?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-33" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Success is measured by complete tumor removal, fewer complications, faster return to normal activities, and lower recurrence rates. We track all of these for every patient.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Emotional Support" data-search="emotional supporthow do i prepare myself emotionally for cancer surgery?talking to your care team, family, and support groups can help. information and counseling are available to address your fears and questions.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-34"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Emotional Support</span></div><h3 class="accordion__question accordion__question--plain">How do I prepare myself emotionally for cancer surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-34" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Talking to your care team, family, and support groups can help. Information and counseling are available to address your fears and questions.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Robotic Surgery" data-search="robotic surgeryare all types of tumors suitable for robotic surgery?not all tumors are best approached robotically. factors like size, location, and invasion into nearby organs guide the choice of surgical method.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-35"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Robotic Surgery</span></div><h3 class="accordion__question accordion__question--plain">Are all types of tumors suitable for robotic surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-35" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Not all tumors are best approached robotically. Factors like size, location, and invasion into nearby organs guide the choice of surgical method.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Medical Advances" data-search="medical advanceswhat advancements are there in surgical oncology?recent advances include robotics, image-guided surgery, and personalized cancer care based on genetic profiling—these improve safety and outcomes.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-36"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Medical Advances</span></div><h3 class="accordion__question accordion__question--plain">What advancements are there in surgical oncology?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-36" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Recent advances include robotics, image-guided surgery, and personalized cancer care based on genetic profiling—these improve safety and outcomes.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Availability" data-search="availabilityis robotic surgery available at all hospitals?robotic surgery is offered at select centers with the necessary technology and expertise. i perform these procedures at fully equipped, accredited hospitals.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-37"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Availability</span></div><h3 class="accordion__question accordion__question--plain">Is robotic surgery available at all hospitals?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-37" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Robotic surgery is offered at select centers with the necessary technology and expertise. I perform these procedures at fully equipped, accredited hospitals.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Timing" data-search="timinghow soon after diagnosis should i have surgery?earlier is usually better, but we schedule after all pre-operative assessments. urgency depends on the cancer type and how quickly it is progressing.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-38"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Timing</span></div><h3 class="accordion__question accordion__question--plain">How soon after diagnosis should I have surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-38" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Earlier is usually better, but we schedule after all pre-operative assessments. Urgency depends on the cancer type and how quickly it is progressing.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Quality of Life" data-search="quality of lifehow will surgery affect my quality of life?most patients regain their pre-surgery quality of life, if not better, once recovered. we support you with rehabilitation, counseling, and lifestyle advice.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-39"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Quality of Life</span></div><h3 class="accordion__question accordion__question--plain">How will surgery affect my quality of life?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-39" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Most patients regain their pre-surgery quality of life, if not better, once recovered. We support you with rehabilitation, counseling, and lifestyle advice.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel" data-reveal data-filter-item data-filter-scope="faqs" data-category="Recovery Tips" data-search="recovery tipshow can i improve my recovery after cancer surgery?follow instructions, stay active as advised, eat a balanced diet, and attend all appointments. emotional support and positive thinking also aid healing.">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="faq-40"><div class="split-row split-row--default"><div class="academic-excellence__header"><div class="inline-row inline-row--spaced"><span class="badge">Recovery Tips</span></div><h3 class="accordion__question accordion__question--plain">How can I improve my recovery after cancer surgery?</h3></div><div class="accordion__icon-slot"><div class="accordion__icon accordion__icon--default" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></div></button>
                      <div class="accordion__panel" id="faq-40" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text">Follow instructions, stay active as advised, eat a balanced diet, and attend all appointments. Emotional support and positive thinking also aid healing.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="text-11" data-filter-empty="faqs" hidden>No questions match your search. Try different search terms or category selection.</p>
                </div>
              </div>
            </div>
          </section>
          <section class="section-10">
            <div class="decoration-10"></div>
            <div class="container container--relative">
              <div class="header-2" data-reveal>
                <h2 class="title-2">Still Have Questions?</h2>
                <p class="lede-3">If you couldn't find the answer to your question, don't hesitate to reach out to our team for personalized assistance</p>
                <div class="block-10">
                  <a href="tel:+919440233339" class="btn btn--on-dark btn--lg" tabindex="0">
                    <svg class="icon icon--md" aria-hidden="true"><use href="#i-user"></use></svg>
                    <span>Call Dr. Dharanikota</span>
                  </a>
                  <a href="mailto:dr.anveshdharanikota@gmail.com" class="btn btn--ghost btn--lg" tabindex="0">
                    <svg class="icon icon--md" aria-hidden="true"><use href="#i-help-circle"></use></svg>
                    <span>Email Your Question</span>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/footer.php';
