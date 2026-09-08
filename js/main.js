/*!
 * Dr. Anvesh Dharanikota - site behaviour
 *
 * Plain JavaScript, no dependencies. Replaces React, React DOM, React Router
 * and framer-motion. State is expressed as a class the stylesheet knows about
 * (is-open, is-active, is-hidden) rather than by rewriting className, so the
 * markup and the styling stay separable.
 */
(function () {
  'use strict';

  var WHATSAPP_NUMBER = '919440233339';
  var WHATSAPP_MESSAGE =
    'Hello Dr. Dharanikota, I would like to schedule a consultation for cancer treatment. Please let me know your availability.';
  var CLINIC_MAP_QUERY =
    'Seven Hills Real Estate, OP Room No. 17, B-Wing, Ground Floor, CHR Lane, Rd Number 1, Colony, Gachibowli, Hyderabad, Telangana 500032';

  function $(sel, ctx) { return (ctx || document).querySelector(sel); }
  function $$(sel, ctx) { return Array.prototype.slice.call((ctx || document).querySelectorAll(sel)); }
  function on(el, ev, fn, opts) { if (el) el.addEventListener(ev, fn, opts); }
  function txt(el) { return (el && el.textContent ? el.textContent : '').replace(/\s+/g, ' ').trim(); }
  function icon(name, cls) {
    return '<svg class="' + (cls || 'icon') + '" aria-hidden="true"><use href="#i-' + name + '"></use></svg>';
  }

  /* ------------------------------------------------------------------ *
   * Mobile navigation
   * ------------------------------------------------------------------ */
  function initMobileMenu() {
    var toggle = $('#mobile-menu-toggle');
    var menu = $('#mobile-menu');
    if (!toggle || !menu) return;
    var openIcon = $('[data-icon="open"]', toggle);
    var closeIcon = $('[data-icon="close"]', toggle);

    function setOpen(open) {
      menu.hidden = !open;
      toggle.setAttribute('aria-expanded', String(open));
      toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
      if (openIcon) openIcon.hidden = open;
      if (closeIcon) closeIcon.hidden = !open;
    }

    on(toggle, 'click', function () { setOpen(menu.hidden); });
    on(document, 'keydown', function (e) {
      if (e.key === 'Escape' && !menu.hidden) { setOpen(false); toggle.focus(); }
    });
    on(document, 'click', function (e) {
      if (menu.hidden) return;
      if (!menu.contains(e.target) && !toggle.contains(e.target)) setOpen(false);
    });

    // a resize up to the desktop breakpoint must not leave the panel stranded
    var mq = window.matchMedia('(min-width: 1024px)');
    var onChange = function () { if (mq.matches) setOpen(false); };
    if (mq.addEventListener) mq.addEventListener('change', onChange);
    else if (mq.addListener) mq.addListener(onChange);
  }

  /* ------------------------------------------------------------------ *
   * Header dropdowns. CSS drives the reveal; this keeps ARIA truthful and
   * adds keyboard control.
   * ------------------------------------------------------------------ */
  function initDropdowns() {
    $$('[data-nav-group]').forEach(function (group) {
      var trigger = $('a[aria-haspopup="true"]', group);
      var panel = $('.nav-dropdown', group);
      if (!trigger || !panel) return;

      function expose(open) {
        trigger.setAttribute('aria-expanded', String(open));
        panel.classList.toggle('is-open', open);
      }

      on(group, 'mouseenter', function () { expose(true); });
      on(group, 'mouseleave', function () { expose(false); });
      on(group, 'focusin', function () { expose(true); });
      on(group, 'focusout', function (e) {
        if (!group.contains(e.relatedTarget)) expose(false);
      });

      on(trigger, 'keydown', function (e) {
        if (e.key === 'ArrowDown') {
          e.preventDefault();
          expose(true);
          var first = $('a', panel);
          if (first) first.focus();
        } else if (e.key === 'Escape') {
          expose(false);
        }
      });
      on(panel, 'keydown', function (e) {
        if (e.key !== 'Escape') return;
        expose(false);
        trigger.focus();
      });
    });
  }

  /* ------------------------------------------------------------------ *
   * Accordions
   * ------------------------------------------------------------------ */
  function initAccordions() {
    $$('[data-accordion-trigger]').forEach(function (btn) {
      var panel = document.getElementById(btn.getAttribute('aria-controls'));
      if (!panel) return;
      var mark = $('[data-accordion-icon]', btn);
      var use = mark ? $('use', mark) : null;

      on(btn, 'click', function () {
        var open = btn.getAttribute('aria-expanded') !== 'true';
        btn.setAttribute('aria-expanded', String(open));
        panel.hidden = !open;
        if (mark) mark.classList.toggle('is-open', open);
        if (use) use.setAttribute('href', open ? '#i-minus' : '#i-plus');
      });
    });
  }

  /* ------------------------------------------------------------------ *
   * Filtering. The services grid has a category rail; the FAQ page has a
   * rail and a search box. Both feed one pass so they cannot disagree
   * about what is visible.
   * ------------------------------------------------------------------ */
  function initFilters() {
    $$('[data-filter-group]').forEach(function (group) {
      var key = group.getAttribute('data-filter-group');
      var buttons = $$('[data-filter]', group);
      var items = $$('[data-filter-item][data-filter-scope="' + key + '"]');
      if (!buttons.length || !items.length) return;

      var search = $('[data-filter-search="' + key + '"]');
      var empty = $('[data-filter-empty="' + key + '"]');
      var status = $('[data-filter-status="' + key + '"]');
      var category = '__all__';

      function apply() {
        var q = search ? search.value.toLowerCase().trim() : '';
        var shown = 0;

        buttons.forEach(function (b) {
          var active = b.getAttribute('data-filter') === category;
          b.classList.toggle('is-active', active);
          b.setAttribute('aria-pressed', String(active));
        });

        items.forEach(function (item) {
          var cats = (item.getAttribute('data-category') || '').split('|');
          var inCategory = category === '__all__' || cats.indexOf(category) !== -1;
          var hay = (item.getAttribute('data-search') || txt(item)).toLowerCase();
          var matches = !q || hay.indexOf(q) !== -1;
          var visible = inCategory && matches;
          item.classList.toggle('is-hidden', !visible);
          if (visible) shown++;
        });

        if (empty) empty.hidden = shown !== 0;
        if (status) status.textContent = shown + (shown === 1 ? ' result shown' : ' results shown');
      }

      buttons.forEach(function (b) {
        on(b, 'click', function () { category = b.getAttribute('data-filter'); apply(); });
      });
      if (search) {
        on(search, 'input', apply);
        on(search, 'search', apply);
      }
      apply();
    });
  }

  /* ------------------------------------------------------------------ *
   * Testimonial video rail
   * ------------------------------------------------------------------ */
  function initVideoRail() {
    $$('[data-video-rail]').forEach(function (rail) {
      var frame = document.getElementById(rail.getAttribute('data-video-rail'));
      if (!frame) return;
      var thumbs = $$('[data-video-id]', rail);

      thumbs.forEach(function (thumb) {
        function select() {
          var id = thumb.getAttribute('data-video-id');
          frame.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0';
          frame.title = thumb.getAttribute('data-video-title') || frame.title;
          thumbs.forEach(function (t) {
            var active = t === thumb;
            t.classList.toggle('is-active', active);
            t.setAttribute('aria-current', active ? 'true' : 'false');
          });
        }
        on(thumb, 'click', select);
        on(thumb, 'keydown', function (e) {
          if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); select(); }
        });
      });
    });
  }

  /* ------------------------------------------------------------------ *
   * Overlays: the gallery lightbox and the video modal
   * ------------------------------------------------------------------ */
  var activeOverlay = null;
  var lastFocused = null;

  function closeOverlay() {
    if (!activeOverlay) return;
    activeOverlay.remove();
    activeOverlay = null;
    document.body.classList.remove('overlay-open');
    if (lastFocused && lastFocused.focus) lastFocused.focus();
  }

  function openOverlay(node) {
    closeOverlay();
    lastFocused = document.activeElement;
    document.body.appendChild(node);
    document.body.classList.add('overlay-open');
    activeOverlay = node;
    var first = node.querySelector('button, a, iframe');
    if (first && first.focus) first.focus();
  }

  function trapAndClose(e) {
    if (!activeOverlay) return;
    if (e.key === 'Escape') { closeOverlay(); return; }
    if (e.key !== 'Tab') return;
    var f = $$('button, a[href], iframe, [tabindex]:not([tabindex="-1"])', activeOverlay)
      .filter(function (el) { return el.offsetParent !== null || el.tagName === 'IFRAME'; });
    if (!f.length) return;
    var first = f[0], last = f[f.length - 1];
    if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
    else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
  }

  function initGallery() {
    var cards = $$('[data-gallery-index]');
    if (!cards.length) return;
    var images = cards.map(function (c) {
      var img = $('img', c);
      return { src: img ? img.getAttribute('src') : '', alt: img ? img.getAttribute('alt') : '' };
    });

    function show(i) {
      var idx = (i + images.length) % images.length;
      var item = images[idx];
      var wrap = document.createElement('div');
      wrap.className = 'overlay overlay-enter';
      wrap.setAttribute('role', 'dialog');
      wrap.setAttribute('aria-modal', 'true');
      wrap.setAttribute('aria-label', 'Gallery image ' + (idx + 1) + ' of ' + images.length);
      wrap.innerHTML =
        '<div class="lightbox">' +
        '<button type="button" data-lb-close class="overlay-btn overlay-btn--close" aria-label="Close gallery">' + icon('x', 'icon icon--lg') + '</button>' +
        (images.length > 1
          ? '<button type="button" data-lb-prev class="overlay-btn overlay-btn--prev" aria-label="Previous image">' + icon('chevron-left', 'icon icon--lg') + '</button>' +
            '<button type="button" data-lb-next class="overlay-btn overlay-btn--next" aria-label="Next image">' + icon('chevron-right', 'icon icon--lg') + '</button>'
          : '') +
        '<img class="lightbox__image" src="' + item.src + '" alt="' + (item.alt || '') + '">' +
        '<div class="lightbox__count">' + (idx + 1) + ' / ' + images.length + '</div>' +
        '</div>';

      openOverlay(wrap);
      on($('[data-lb-close]', wrap), 'click', closeOverlay);
      on($('[data-lb-prev]', wrap), 'click', function () { show(idx - 1); });
      on($('[data-lb-next]', wrap), 'click', function () { show(idx + 1); });
      on(wrap, 'click', function (e) { if (e.target === wrap) closeOverlay(); });
    }

    cards.forEach(function (card, i) {
      on(card, 'click', function () { show(i); });
      on(card, 'keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); show(i); }
      });
    });

    on(document, 'keydown', function (e) {
      if (!activeOverlay || !activeOverlay.querySelector('[data-lb-next]')) return;
      if (e.key === 'ArrowRight') $('[data-lb-next]', activeOverlay).click();
      if (e.key === 'ArrowLeft') $('[data-lb-prev]', activeOverlay).click();
    });
  }

  function initVideoModal() {
    $$('[data-video-modal]').forEach(function (card) {
      function open() {
        var id = card.getAttribute('data-video-modal');
        var title = card.getAttribute('data-video-title') || '';
        var desc = card.getAttribute('data-video-description') || '';
        var views = card.getAttribute('data-video-views') || '';
        var date = card.getAttribute('data-video-date') || '';
        var url = card.getAttribute('data-video-url') || ('https://youtu.be/' + id);
        var badge = card.getAttribute('data-video-badge') || 'Educational Content';

        var wrap = document.createElement('div');
        wrap.className = 'overlay overlay-enter';
        wrap.setAttribute('role', 'dialog');
        wrap.setAttribute('aria-modal', 'true');
        wrap.setAttribute('aria-label', title);
        wrap.innerHTML =
          '<div class="video-modal">' +
          '<button type="button" data-vm-close class="video-modal__close" aria-label="Close video">' + icon('x', 'icon icon--md') + '</button>' +
          '<div class="video-modal__frame" style="padding-bottom: 56.25%;">' +
          '<iframe src="https://www.youtube.com/embed/' + id + '?autoplay=1" title="' + title.replace(/"/g, '&quot;') + '" frameborder="0" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture" allowfullscreen></iframe>' +
          '</div>' +
          '<div class="video-modal__body">' +
          '<div class="video-modal__head">' +
          '<span class="video-modal__badge">' + badge + '</span>' +
          '<div class="video-modal__meta">' +
          (views ? '<span>' + views + ' views</span>' : '') +
          (date ? '<span>' + date + '</span>' : '') +
          '</div></div>' +
          '<h3 class="video-modal__title">' + title + '</h3>' +
          '<p class="video-modal__text">' + desc + '</p>' +
          '<a class="video-modal__link" href="' + url + '" target="_blank" rel="noopener noreferrer"><span>Watch on YouTube</span></a>' +
          '</div></div>';

        openOverlay(wrap);
        on($('[data-vm-close]', wrap), 'click', closeOverlay);
        on(wrap, 'click', function (e) { if (e.target === wrap) closeOverlay(); });
      }

      on(card, 'click', open);
      on(card, 'keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(); }
      });
    });
  }

  /* ------------------------------------------------------------------ *
   * WhatsApp, including the floating widget
   * ------------------------------------------------------------------ */
  function whatsappUrl() {
    return 'https://wa.me/' + WHATSAPP_NUMBER + '?text=' + encodeURIComponent(WHATSAPP_MESSAGE);
  }

  function initWhatsApp() {
    $$('[data-whatsapp]').forEach(function (el) {
      on(el, 'click', function (e) {
        e.preventDefault();
        window.open(whatsappUrl(), '_blank', 'noopener');
      });
    });

    var widget = $('[data-float-widget]');
    if (!widget) return;
    var toggle = $('[data-float-toggle]', widget);
    var panel = $('[data-float-panel]', widget);
    if (!toggle || !panel) return;

    function setOpen(open) {
      panel.hidden = !open;
      toggle.setAttribute('aria-expanded', String(open));
      toggle.setAttribute('aria-label', open ? 'Close chat panel' : 'Open chat panel');
      var badge = $('[data-float-badge]', widget);
      if (badge) badge.hidden = open;
      var oi = $('[data-icon="chat"]', toggle);
      var ci = $('[data-icon="close"]', toggle);
      if (oi) oi.hidden = open;
      if (ci) ci.hidden = !open;
    }

    on(toggle, 'click', function () { setOpen(panel.hidden); });
    $$('[data-float-close]', widget).forEach(function (b) {
      on(b, 'click', function () { setOpen(false); toggle.focus(); });
    });
    on(document, 'keydown', function (e) {
      if (e.key === 'Escape' && !panel.hidden) { setOpen(false); toggle.focus(); }
    });
  }

  /* ------------------------------------------------------------------ *
   * Directions
   * ------------------------------------------------------------------ */
  function initDirections() {
    $$('[data-directions]').forEach(function (el) {
      on(el, 'click', function (e) {
        e.preventDefault();
        window.open(
          'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(CLINIC_MAP_QUERY),
          '_blank',
          'noopener'
        );
      });
    });
  }

  /* ------------------------------------------------------------------ *
   * Scroll reveal, the stand-in for framer-motion whileInView
   * ------------------------------------------------------------------ */
  function initReveal() {
    var nodes = $$('[data-reveal]');
    if (!nodes.length) return;

    function revealAll() {
      nodes.forEach(function (n) { n.classList.add('is-revealed'); });
    }

    if (!('IntersectionObserver' in window) ||
        window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      revealAll();
      return;
    }

    var pending = [];
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) reveal(entry.target);
      });
    }, { rootMargin: '0px 0px -40px 0px', threshold: 0.05 });

    function reveal(el) {
      el.classList.add('is-revealed');
      io.unobserve(el);
      var i = pending.indexOf(el);
      if (i !== -1) pending.splice(i, 1);
    }

    nodes.forEach(function (n) {
      var r = n.getBoundingClientRect();
      if (r.top < window.innerHeight && r.bottom > 0) n.classList.add('is-revealed');
      else { pending.push(n); io.observe(n); }
    });

    /* Observer callbacks are delivered per frame, so an element scrolled past
       between two deliveries can be skipped and would then stay invisible.
       This sweep tracks the deepest point the page has ever been scrolled to
       and reveals everything above it. Because that mark only ever grows, a
       fast scroll or a jump back to the top cannot strand content. */
    var maxReach = window.scrollY + window.innerHeight;
    var lastSweep = 0;
    var trailing = null;

    function sweep() {
      lastSweep = new Date().getTime();
      var reach = window.scrollY + window.innerHeight;
      if (reach > maxReach) maxReach = reach;
      pending.slice().forEach(function (n) {
        if (n.getBoundingClientRect().top + window.scrollY < maxReach) reveal(n);
      });
      if (!pending.length) {
        window.removeEventListener('scroll', onScroll);
        window.removeEventListener('resize', onScroll);
      }
    }

    /* Throttled on a timer rather than requestAnimationFrame: rAF callbacks
       are throttled to a standstill in background tabs and in some headless
       contexts, and a sweep that never runs is a page that never shows its
       content. The work is a handful of rect reads on a shrinking list. */
    function onScroll() {
      var now = new Date().getTime();
      if (trailing) { clearTimeout(trailing); trailing = null; }
      if (now - lastSweep >= 100) sweep();
      else trailing = setTimeout(sweep, 100);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });

    // printing must never omit content that has not been scrolled to
    window.addEventListener('beforeprint', revealAll);
    if (window.matchMedia) {
      var mq = window.matchMedia('print');
      if (mq.addEventListener) mq.addEventListener('change', revealAll);
    }
  }

  /* ------------------------------------------------------------------ *
   * Smooth scrolling for in-page anchors, offset by the fixed header
   * ------------------------------------------------------------------ */
  function initAnchors() {
    var header = $('header');
    var offset = header ? header.offsetHeight + 12 : 0;
    $$('a[href^="#"]').forEach(function (a) {
      var id = a.getAttribute('href');
      if (!id || id === '#' || id.length < 2) return;
      on(a, 'click', function (e) {
        var target = document.getElementById(id.slice(1));
        if (!target) return;
        e.preventDefault();
        var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        window.scrollTo({ top: top, behavior: reduce ? 'auto' : 'smooth' });
        target.setAttribute('tabindex', '-1');
        target.focus({ preventScroll: true });
      });
    });
  }

  /* ------------------------------------------------------------------ *
   * YouTube thumbnails: maxresdefault does not exist for every video and
   * YouTube answers with a 120x90 placeholder rather than a 404. Fall back
   * to hqdefault, which always exists.
   * ------------------------------------------------------------------ */
  function initThumbFallback() {
    $$('img[data-yt-thumb]').forEach(function (img) {
      function fix() {
        if (img.naturalWidth && img.naturalWidth > 130) return;
        var src = img.getAttribute('src') || '';
        if (src.indexOf('maxresdefault') === -1) return;
        img.setAttribute('src', src.replace('maxresdefault', 'hqdefault'));
      }
      if (img.complete) fix();
      on(img, 'load', fix);
      on(img, 'error', function () {
        var src = img.getAttribute('src') || '';
        if (src.indexOf('maxresdefault') !== -1) {
          img.setAttribute('src', src.replace('maxresdefault', 'hqdefault'));
        }
      });
    });
  }

  /* ------------------------------------------------------------------ *
   * Appointment form: native validation plus a phone-length check
   * ------------------------------------------------------------------ */
  function initForm() {
    var form = $('form[action*="formester"]');
    if (!form) return;

    var status = document.createElement('p');
    status.setAttribute('role', 'status');
    status.setAttribute('aria-live', 'polite');
    status.className = 'form-status';
    status.hidden = true;
    form.appendChild(status);

    function fail(field, message) {
      field.setAttribute('aria-invalid', 'true');
      status.hidden = false;
      status.textContent = message;
      field.focus();
    }

    on(form, 'submit', function (e) {
      status.hidden = true;
      $$('[aria-invalid]', form).forEach(function (f) { f.removeAttribute('aria-invalid'); });

      if (!form.checkValidity()) {
        e.preventDefault();
        var bad = $(':invalid', form);
        if (bad) fail(bad, 'Please complete the highlighted field.');
        return;
      }
      var phone = form.querySelector('input[name="phone"]');
      if (phone && phone.value.replace(/\D/g, '').length < 10) {
        e.preventDefault();
        fail(phone, 'Please enter a valid phone number with at least 10 digits.');
        return;
      }
      var submit = form.querySelector('button[type="submit"]');
      if (submit) {
        submit.disabled = true;
        var label = submit.querySelector('span');
        if (label) label.textContent = 'Sending...';
      }
    });

    // a date in the past is never a valid appointment request
    var date = form.querySelector('input[type="date"]');
    if (date && !date.min) {
      var t = new Date();
      date.min = t.getFullYear() + '-' +
        String(t.getMonth() + 1).padStart(2, '0') + '-' +
        String(t.getDate()).padStart(2, '0');
    }
  }

  /* ------------------------------------------------------------------ */
  function init() {
    initMobileMenu();
    initDropdowns();
    initAccordions();
    initFilters();
    initVideoRail();
    initGallery();
    initVideoModal();
    initWhatsApp();
    initDirections();
    initReveal();
    initAnchors();
    initThumbFallback();
    initForm();
    on(document, 'keydown', trapAndClose);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
