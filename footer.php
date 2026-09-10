<?php
/**
 * Everything below the page content: the site footer, the floating chat
 * button and the closing tags. Every page ends by requiring this file.
 *
 * Edit the markup here once to change the footer on every page.
 */

// This file is an include, not a page. Refuse a direct request for it.
if (realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'] ?? '')) {
    http_response_code(403);
    exit('Forbidden');
}
?>
      </main>
      <footer class="site-footer">
        <div class="footer__container">
          <div class="footer__grid">
            <div class="footer__stack">
              <a class="inline-row inline-row--default" href="/">
                <img src="/photos/logo-anvesh.jpg" alt="Dr. Anvesh Dharanikota" class="footer__image" width="458" height="116" loading="lazy" decoding="async">
              </a>
              <p class="footer__text">Providing world-class cancer surgery with precision, compassion, and cutting-edge robotic technology. Over 12 years of expertise in minimally invasive oncological procedures.</p>
              <div class="stack stack--sm">
                <a href="tel:+919440233339" class="footer-contact-link">
                  <svg class="icon icon--accent" aria-hidden="true"><use href="#i-phone"></use></svg>
                  <span>+91 9440233339</span>
                </a>
                <a href="mailto:dr.anveshdharanikota@gmail.com" class="footer-contact-link">
                  <svg class="icon icon--accent" aria-hidden="true"><use href="#i-mail"></use></svg>
                  <span class="wrap-anywhere">dr.anveshdharanikota@gmail.com</span>
                </a>
                <div class="media-row">
                  <svg class="footer__icon" aria-hidden="true"><use href="#i-map-pin"></use></svg>
                  <span class="footer__label">Seven Hills Real Estate, OP Room No. 17, B-Wing, Ground Floor, CHR Lane, Rd Number 1, Colony, Gachibowli, Hyderabad, Telangana - 500032</span>
                </div>
                <div class="media-row">
                  <svg class="footer__icon" aria-hidden="true"><use href="#i-clock"></use></svg>
                  <div class="footer__label">
                    <div>Mon, Wed, Thu, Fri, Sat: 9AM - 5PM</div>
                    <div>Tue &amp; Sun: Emergencies only</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="stack stack--lg">
              <h4 class="footer__subheading-2">Quick Links</h4>
              <ul class="stack stack--sm">
                <li><a class="footer-link" href="/about">About Dr. Dharanikota</a></li>
                <li><a class="footer-link" href="/awards">Awards &amp; Recognition</a></li>
                <li><a class="footer-link" href="/publications">Research &amp; Publications</a></li>
                <li><a class="footer-link" href="/testimonials">Patient Testimonials</a></li>
                <li><a class="footer-link" href="/contact">Contact &amp; Location</a></li>
              </ul>
            </div>
            <div class="stack stack--lg">
              <h4 class="footer__subheading-2">Services &amp; Techniques</h4>
              <ul class="stack stack--sm">
                <li><a class="footer-link" href="/services/breast-cancer-treatment-hyderabad">Breast Oncoplastic Surgery</a></li>
                <li><a class="footer-link" href="/services/gi-thoracic">GI &amp; Thoracic Oncology</a></li>
                <li><a class="footer-link" href="/services/gynecologic-cancer-treatment-hyderabad">Gynecologic Oncology</a></li>
                <li><a class="footer-link" href="/techniques/robotic-surgery">Robotic Surgery</a></li>
                <li><a class="footer-link" href="/techniques/crs-hipec">CRS &amp; HIPEC</a></li>
              </ul>
            </div>
            <div class="stack stack--lg">
              <h4 class="footer__subheading-2">Resources</h4>
              <ul class="stack stack--sm">
                <li><a class="footer-link" href="/gallery">Gallery</a></li>
                <li><a class="footer-link" href="/videos">Video Library</a></li>
                <li><a class="footer-link" href="/media">Media &amp; Press</a></li>
                <li><a class="footer-link" href="/faqs">FAQs</a></li>
              </ul>
              <div class="footer__group">
                <h5 class="footer__subheading">Professional Profiles</h5>
                <div class="stack stack--sm">
                  <a href="https://in.linkedin.com/in/dranveshdharanikotacancerspecialist" target="_blank" rel="noopener noreferrer" class="footer-contact-link">
                    <svg class="icon icon--default" aria-hidden="true"><use href="#i-linkedin"></use></svg>
                    <span>LinkedIn</span>
                  </a>
                  <a href="https://www.researchgate.net/profile/Anvesh-Dharanikota" target="_blank" rel="noopener noreferrer" class="footer-contact-link">
                    <svg class="icon icon--default" aria-hidden="true"><use href="#i-external-link"></use></svg>
                    <span>ResearchGate</span>
                  </a>
                  <a href="https://orcid.org/0000-0001-7404-3239" target="_blank" rel="noopener noreferrer" class="footer-contact-link">
                    <svg class="icon icon--default" aria-hidden="true"><use href="#i-book-open"></use></svg>
                    <span>ORCID</span>
                  </a>
                </div>
              </div>
              <div tabindex="0">
                <a class="btn btn--primary btn--block-3" href="/contact">Book Consultation</a>
              </div>
            </div>
          </div>
          <div class="footer__block">
            <div class="footer__bottom">
              <p class="footer__fineprint">© 2024 Dr. Anvesh Dharanikota. All rights reserved.</p>
              <div class="footer__row"><a class="footer-legal-link" href="/privacy">Privacy Policy</a><a class="footer-legal-link" href="/terms">Terms of Service</a><a class="footer-legal-link" href="/disclaimer">Medical Disclaimer</a></div>
            </div>
          </div>
        </div>
      </footer>
<?php if ($show_chat): ?>
      <div class="chat-widget" data-float-widget>
        <div class="chat-panel" data-float-panel hidden>
          <div class="split-row split-row--top">
            <div class="inline-row inline-row--default">
              <div class="icon-tile icon-tile--round">
                <svg class="icon icon--md icon--on-dark" aria-hidden="true"><use href="#i-message-circle"></use></svg>
              </div>
              <div>
                <h4 class="strong-label">Dr. Dharanikota</h4>
                <p class="text">Surgical Oncologist</p>
              </div>
            </div>
            <button type="button" class="chat-panel__close" data-float-close aria-label="Close chat panel"><svg class="icon icon--default" aria-hidden="true"><use href="#i-x"></use></svg></button>
          </div>
          <p class="chat-panel__text">Hi! I'm available to answer your questions about cancer treatment and surgical procedures. How can I help you today?</p>
          <button type="button" data-whatsapp data-whatsapp class="btn btn--primary btn--block">
            <svg class="icon icon--default" aria-hidden="true"><use href="#i-message-circle"></use></svg>
            <span>Start Conversation</span>
          </button>
        </div>
        <button type="button" data-float-toggle aria-expanded="false" aria-label="Open chat panel" class="chat-fab">
          <span data-icon="chat"><svg class="icon icon--lg" aria-hidden="true"><use href="#i-message-circle"></use></svg></span><span data-icon="close" hidden><svg class="icon icon--lg" aria-hidden="true"><use href="#i-x"></use></svg></span>
          <div class="chat-fab__pulse"></div>
          <div class="chat-fab__badge" data-float-badge><span class="chat-fab__badge-text">1</span></div>
        </button>
      </div>
<?php endif; ?>
    </div>
    <script src="<?= e(asset('/js/main.js')) ?>" defer></script>
  </body>
</html>
