<?php
/**
 * Shared building blocks for the articles in /blog.
 *
 * Every post is one file in blog/, named after its address, and reads like the
 * other pages on the site: settings at the top, markup in the middle, footer at
 * the end. This file supplies the parts every post repeats, so a post holds
 * only its own words: the schema, the hero, images, the call-to-action box, the
 * FAQ accordion, the author box and the closing notes.
 *
 * A post starts like this:
 *
 *     <?php
 *     require dirname(__DIR__) . '/blog-parts.php';
 *
 *     $route       = '/blog/esr-level-in-cancer-patients';
 *     $title       = 'ESR Level in Cancer Patients | Dr. Anvesh';
 *     $description = 'One sentence for Google and for link previews.';
 *     $date        = '2026-09-10';
 *     $og_image    = 'https://dranveshdharanikota.com/photos/blog/esr-level-in-cancer-patients.webp';
 *
 *     $post = array(
 *         'headline'  => 'The H1 and the schema headline',
 *         'crumb'     => 'Short breadcrumb label',
 *         'category'  => 'Cancer Diagnosis',
 *         'image_alt' => 'What the featured image shows',
 *         'keywords'  => array('focus keyword', 'lsi keyword', ...),
 *         'words'     => 1400,
 *     );
 *     $faqs = array(
 *         array('Question?', 'Answer, as plain text.'),
 *     );
 *
 *     $schema = blog_schema($post, $faqs);
 *     require dirname(__DIR__) . '/header.php';
 *
 * Keep $title, $date and $og_image as single-quoted strings on one line each.
 * blog/index.php reads those three lines straight out of the file to build the
 * post cards, and lists a post only once its $date has arrived.
 *
 * Images live in photos/blog/ at 1200 x 675. Their credits are in
 * photos/blog/credits.json, keyed by file name; blog_notes() prints the ones
 * whose file name starts with the post's slug.
 */

// This file is an include, not a page. Refuse a direct request for it.
if (realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'] ?? '')) {
    http_response_code(403);
    exit('Forbidden');
}

const BLOG_SITE  = 'https://dranveshdharanikota.com';
const BLOG_PHONE = '+919440233339';

/**
 * Escape a value for markup. header.php defines e() for the same job, but the
 * schema is built before header.php is loaded, so the blog parts carry their own.
 */
function blog_esc($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function blog_json_script(array $data)
{
    return '    <script type="application/ld+json">'
        . json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG)
        . '</script>';
}

/**
 * BreadcrumbList, BlogPosting and FAQPage JSON-LD for the post, ready to hand
 * to header.php as $schema. The FAQ schema is built from the same $faqs array
 * as the visible accordion, so the two always say the same thing.
 */
function blog_schema(array $post, array $faqs)
{
    $url  = BLOG_SITE . $GLOBALS['route'];
    $date = $GLOBALS['date'] . 'T09:00:00+05:30';

    $doctor = array(
        '@type'            => 'Physician',
        '@id'              => BLOG_SITE . '/#physician',
        'name'             => 'Dr. Anvesh Dharanikota',
        'honorificSuffix'  => 'MBBS, MS (Gold Medalist), MCh (Surgical Oncology)',
        'jobTitle'         => 'Senior Consultant Surgical Oncologist & Head of Department',
        'url'              => BLOG_SITE . '/about',
        'image'            => BLOG_SITE . '/photos/anvesh.webp',
        'medicalSpecialty' => 'https://schema.org/Oncologic',
        'sameAs'           => array(
            'https://in.linkedin.com/in/dranveshdharanikotacancerspecialist',
            'https://www.researchgate.net/profile/Anvesh-Dharanikota',
            'https://orcid.org/0000-0001-7404-3239',
        ),
    );

    $scripts = array();

    $scripts[] = blog_json_script(array(
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        '@id'             => $url . '#breadcrumb',
        'itemListElement' => array(
            array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => BLOG_SITE . '/'),
            array('@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => BLOG_SITE . '/blog'),
            array('@type' => 'ListItem', 'position' => 3, 'name' => $post['headline'], 'item' => $url),
        ),
    ));

    $article = array(
        '@context'         => 'https://schema.org',
        '@type'            => 'BlogPosting',
        '@id'              => $url . '#article',
        'mainEntityOfPage' => array('@type' => 'WebPage', '@id' => $url),
        'url'              => $url,
        'headline'         => $post['headline'],
        'description'      => $GLOBALS['description'],
        'image'            => array('@type' => 'ImageObject', 'url' => $GLOBALS['og_image'], 'width' => 1200, 'height' => 675),
        'datePublished'    => $date,
        'dateModified'     => $date,
        'author'           => $doctor,
        'publisher'        => array('@type' => 'Physician', '@id' => BLOG_SITE . '/#physician', 'name' => 'Dr. Anvesh Dharanikota', 'url' => BLOG_SITE . '/'),
        'isPartOf'         => array('@type' => 'Blog', '@id' => BLOG_SITE . '/blog#blog', 'name' => 'Dr. Anvesh Dharanikota Blog', 'url' => BLOG_SITE . '/blog'),
        'inLanguage'       => 'en-IN',
        'articleSection'   => $post['category'],
        'keywords'         => implode(', ', $post['keywords']),
        'wordCount'        => $post['words'],
    );
    if (!empty($post['about'])) {
        $article['about'] = $post['about'];
    }
    $scripts[] = blog_json_script($article);

    if ($faqs) {
        $questions = array();
        foreach ($faqs as $faq) {
            $questions[] = array(
                '@type'          => 'Question',
                'name'           => $faq[0],
                'acceptedAnswer' => array('@type' => 'Answer', 'text' => $faq[1]),
            );
        }
        $scripts[] = blog_json_script(array(
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            '@id'        => $url . '#faq',
            'mainEntity' => $questions,
        ));
    }

    return implode("\n", $scripts);
}

/** The breadcrumb bar and the gradient title band, matching the other pages. */
function blog_hero(array $post)
{
    $date = $GLOBALS['date'];
    $read = max(1, (int) ceil($post['words'] / 200));
    ob_start();
    ?>
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
                      <a class="breadcrumb__link" href="/blog">Blog</a>
                    </div>
                  </li>
                  <li class="header__link">
                    <svg class="breadcrumb__separator" aria-hidden="true"><use href="#i-chevron-right"></use></svg>
                    <span class="breadcrumb__current"> <?= blog_esc($post['crumb']) ?> </span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <section class="section-14" style="background: linear-gradient(to right, rgb(114, 5, 9), rgb(0, 32, 80))">
            <div class="container container--relative">
              <div class="section-head section-head--snug" data-reveal>
                <div class="eyebrow eyebrow--on-dark"><span class="label-3"><?= blog_esc(strtoupper($post['category'])) ?></span></div>
                <h1 class="page-title page-title--on-dark"><?= blog_esc($post['headline']) ?></h1>
                <p class="page-lede page-lede--on-dark"><?= blog_esc($GLOBALS['description']) ?></p>
                <div class="blog-meta">
                  <img class="blog-meta__avatar" src="/photos/anvesh.webp" alt="" width="40" height="40" decoding="async">
                  <span>By Dr. Anvesh Dharanikota, Surgical Oncologist</span>
                  <span class="blog-meta__dot" aria-hidden="true">&bull;</span>
                  <time datetime="<?= blog_esc($date) ?>"><?= blog_esc(date('F j, Y', strtotime($date))) ?></time>
                  <span class="blog-meta__dot" aria-hidden="true">&bull;</span>
                  <span><?= $read ?> min read</span>
                </div>
              </div>
            </div>
          </section>
<?php
    return ob_get_clean();
}

/** The featured image at the top of the article: the same file as $og_image. */
function blog_featured(array $post)
{
    $src = str_replace(BLOG_SITE, '', $GLOBALS['og_image']);
    return '                <figure class="blog-figure blog-figure--featured">' . "\n"
        . '                  <img src="' . blog_esc($src) . '" alt="' . blog_esc($post['image_alt']) . '" width="1200" height="675" fetchpriority="high" decoding="async">' . "\n"
        . '                </figure>' . "\n";
}

/** An image inside the article body. $file is a name inside photos/blog/. */
function blog_image($file, $alt, $caption = '')
{
    $html = '                  <figure class="blog-figure">' . "\n"
        . '                    <img src="/photos/blog/' . blog_esc($file) . '" alt="' . blog_esc($alt) . '" width="1200" height="675" loading="lazy" decoding="async">' . "\n";
    if ($caption !== '') {
        $html .= '                    <figcaption>' . blog_esc($caption) . '</figcaption>' . "\n";
    }
    return $html . '                  </figure>' . "\n";
}

/**
 * The call-to-action box. $button is the link text for the booking button, so
 * each box can say what the reader is booking rather than a bare "Book now".
 */
function blog_cta($heading, $text, $button = 'Book a Consultation with Dr. Anvesh')
{
    ob_start();
    ?>
                  <aside class="blog-cta" aria-label="Book a consultation">
                    <p class="blog-cta__eyebrow">Talk to a surgical oncologist</p>
                    <p class="blog-cta__title"><?= blog_esc($heading) ?></p>
                    <p class="blog-cta__text"><?= blog_esc($text) ?></p>
                    <div class="blog-cta__actions">
                      <a class="blog-cta__btn blog-cta__btn--light" href="/contact">
                        <svg class="icon icon--default" aria-hidden="true"><use href="#i-calendar"></use></svg>
                        <span><?= blog_esc($button) ?></span>
                      </a>
                      <a class="blog-cta__btn blog-cta__btn--outline" href="tel:<?= BLOG_PHONE ?>">
                        <svg class="icon icon--default" aria-hidden="true"><use href="#i-phone"></use></svg>
                        <span>Call +91 94402 33339</span>
                      </a>
                    </div>
                    <p class="blog-cta__hours">OPD: Mon, Wed, Thu, Fri &amp; Sat, 9 AM to 5 PM &middot; Arete Hospitals, Gachibowli</p>
                  </aside>
<?php
    return ob_get_clean();
}

/** The FAQ accordion, in the same markup the service pages use. */
function blog_faq(array $faqs)
{
    if (!$faqs) {
        return '';
    }
    ob_start();
    ?>
                <section class="blog-faq" aria-labelledby="blog-faq-title">
                  <h2 class="blog-faq__title" id="blog-faq-title">Frequently Asked Questions</h2>
                  <div class="stack stack--md">
<?php foreach ($faqs as $i => $faq): $id = 'faq-' . ($i + 1); ?>
                    <div class="panel">
                      <button type="button" class="accordion__trigger" data-accordion-trigger aria-expanded="false" aria-controls="<?= $id ?>"><div class="split-row split-row--default"><h3 class="accordion__question accordion__question--default"><?= blog_esc($faq[0]) ?></h3><div class="accordion__icon accordion__icon--unstyled" data-accordion-icon><svg class="icon icon--sm" aria-hidden="true"><use href="#i-plus"></use></svg></div></div></button>
                      <div class="accordion__panel" id="<?= $id ?>" data-accordion-panel hidden>
                        <div data-accordion-inner>
                          <div class="accordion__body">
                            <p class="body-text"><?= blog_esc($faq[1]) ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
<?php endforeach; ?>
                  </div>
                </section>
<?php
    return ob_get_clean();
}

/** The author box under the article. */
function blog_author()
{
    ob_start();
    ?>
                <aside class="blog-author" aria-label="About the author">
                  <img class="blog-author__photo" src="/photos/anvesh.webp" alt="Dr. Anvesh Dharanikota, surgical oncologist in Hyderabad" width="96" height="96" loading="lazy" decoding="async">
                  <div>
                    <p class="blog-author__label">About the author</p>
                    <p class="blog-author__name">Dr. Anvesh Dharanikota</p>
                    <p class="blog-author__role">MBBS, MS (Gold Medalist), MCh (Surgical Oncology) &middot; Senior Consultant Surgical Oncologist &amp; Head of Department, Arete Institute of Oncology, Hyderabad</p>
                    <p class="blog-author__bio">Dr. Anvesh has more than 12 years of experience in cancer surgery, with a special focus on robotic, laparoscopic and oncoplastic procedures. He trained in surgical oncology at Kidwai Memorial Institute of Oncology, Bengaluru, completed a fellowship in colorectal surgical oncology at Yonsei Cancer Center, Seoul, and is a Da Vinci certified robotic surgeon who works within multidisciplinary tumour boards.</p>
                    <a class="blog-author__link" href="/about">Read Dr. Anvesh Dharanikota's full profile and credentials</a>
                  </div>
                </aside>
<?php
    return ob_get_clean();
}

/** The medical disclaimer and the image credits for this post. */
function blog_notes()
{
    $slug    = basename($GLOBALS['route']);
    $credits = array();
    $file    = __DIR__ . '/photos/blog/credits.json';
    if (is_file($file)) {
        $all = json_decode((string) file_get_contents($file), true) ?: array();
        foreach ($all as $name => $credit) {
            if (strpos($name, $slug) === 0) {
                $credits[$name] = $credit;
            }
        }
        ksort($credits);
    }
    ob_start();
    ?>
                <div class="blog-note">
                  <p><strong>Medical disclaimer:</strong> This article is for general education and does not replace a personal consultation. Cancer care is individual, so please discuss your reports, symptoms and treatment options with a qualified specialist before making any decision.</p>
<?php if ($credits): ?>
                  <p><strong>Image credits:</strong>
<?php foreach (array_values($credits) as $i => $c): ?>
                    <?= $i ? '&middot; ' : '' ?><a href="<?= blog_esc($c['source']) ?>" target="_blank" rel="noopener noreferrer nofollow"><?= blog_esc($c['title']) ?></a><?= $c['creator'] !== '' ? ' by ' . blog_esc($c['creator']) : '' ?>, <?php if ($c['license_url'] !== ''): ?><a href="<?= blog_esc($c['license_url']) ?>" target="_blank" rel="noopener noreferrer nofollow"><?= blog_esc($c['license']) ?></a><?php else: ?><?= blog_esc($c['license']) ?><?php endif; ?>

<?php endforeach; ?>
                  </p>
<?php endif; ?>
                </div>
<?php
    return ob_get_clean();
}

/** The sticky sidebar with recent posts and CTA */
function blog_sidebar($current_route)
{
    // Find 3 recent posts
    $blogs = [];
    foreach (glob(__DIR__ . '/blog/*.php') as $file) {
        if (basename($file) === 'index.php') continue;
        
        $content = file_get_contents($file);
        
        // Extract metadata
        preg_match('/\$title\s*=\s*[\'"](.*?)[\'"];/i', $content, $titleMatch);
        preg_match('/\$og_image\s*=\s*[\'"](.*?)[\'"];/i', $content, $imgMatch);
        preg_match('/\$date\s*=\s*[\'"](.*?)[\'"];/i', $content, $dateMatch);
        
        $title = $titleMatch[1] ?? 'Untitled Post';
        $title = explode('|', $title)[0];
        $postDate = $dateMatch[1] ?? date('Y-m-d', filectime($file));
        if ($postDate > date('Y-m-d')) continue; // Skip future posts
        
        $url = '/blog/' . basename($file, '.php');
        if ($url === $current_route) continue; // Skip current post

        $img = $imgMatch[1] ?? '/photos/logo-anvesh.png';
        $img = str_replace('https://dranveshdharanikota.com', '', $img);

        $blogs[] = [
            'title' => trim($title),
            'image' => $img,
            'date'  => $postDate,
            'url'   => $url
        ];
    }
    
    usort($blogs, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });
    
    $recent = array_slice($blogs, 0, 3);
    
    ob_start();
    ?>
    <style>
      .blog-layout-with-sidebar {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
      }
      .blog-sidebar {
        position: sticky;
        top: 2rem;
        align-self: start;
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }
      .sidebar-widget {
        background: #fff;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      }
      .sidebar-widget__title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 1rem;
        color: var(--color-primary-1, #720509);
        border-bottom: 2px solid #f1f5f9;
        padding-bottom: 0.5rem;
      }
      .recent-post {
        display: flex;
        gap: 1rem;
        align-items: center;
        text-decoration: none;
        color: inherit;
        margin-bottom: 1rem;
        transition: transform 0.2s ease;
      }
      .recent-post:last-child {
        margin-bottom: 0;
      }
      .recent-post:hover {
        transform: translateX(4px);
      }
      .recent-post__img {
        width: 70px;
        height: 70px;
        border-radius: 4px;
        object-fit: cover;
      }
      .recent-post__title {
        font-size: 0.9rem;
        font-weight: 600;
        line-height: 1.3;
        margin: 0 0 0.25rem 0;
      }
      .recent-post__date {
        font-size: 0.75rem;
        color: #64748b;
      }
      .sidebar-cta {
        background: linear-gradient(135deg, #720509 0%, #002050 100%);
        color: #fff;
        text-align: center;
      }
      .sidebar-cta__title {
        color: #fff;
        border-bottom: none;
        font-size: 1.4rem;
      }
      .sidebar-cta__text {
        font-size: 0.95rem;
        margin-bottom: 1.5rem;
        opacity: 0.9;
      }
      .sidebar-cta__btn {
        display: inline-block;
        background: #fff;
        color: #720509;
        font-weight: 600;
        padding: 0.75rem 1.25rem;
        border-radius: 4px;
        text-decoration: none;
        transition: background 0.2s;
      }
      .sidebar-cta__btn:hover {
        background: #f1f5f9;
      }
      @media (min-width: 992px) {
        .blog-layout-with-sidebar {
          grid-template-columns: 1fr 340px;
          gap: 3rem;
        }
      }
    </style>
    <aside class="blog-sidebar">
      <?php if (!empty($recent)): ?>
      <div class="sidebar-widget">
        <h3 class="sidebar-widget__title">Recent Articles</h3>
        <?php foreach ($recent as $post): ?>
        <a href="<?= blog_esc($post['url']) ?>" class="recent-post">
          <img src="<?= blog_esc($post['image']) ?>" alt="<?= blog_esc($post['title']) ?>" class="recent-post__img" loading="lazy">
          <div>
            <h4 class="recent-post__title"><?= blog_esc($post['title']) ?></h4>
            <div class="recent-post__date"><?= date('M j, Y', strtotime($post['date'])) ?></div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      
      <div class="sidebar-widget sidebar-cta">
        <h3 class="sidebar-widget__title sidebar-cta__title">Need Expert Advice?</h3>
        <p class="sidebar-cta__text">Get personalized cancer treatment plans and honest guidance from Dr. Anvesh Dharanikota.</p>
        <a href="/contact" class="sidebar-cta__btn">Book a Consultation</a>
      </div>
    </aside>
    <?php
    return ob_get_clean();
}
