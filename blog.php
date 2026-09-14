<?php
$route          = '/blog';
$title          = 'Blog | Dr. Anvesh Dharanikota, Surgical Oncologist';
$description    = 'Read the latest articles, insights, and news on surgical oncology by Dr. Anvesh Dharanikota.';
$og_title       = 'Blog of Dr. Anvesh Dharanikota';
$og_description = 'Latest insights on surgical oncology, cancer care, and minimally invasive surgeries.';

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
                    <span class="breadcrumb__current"> Blog </span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <section class="section-14" style="background: linear-gradient(to right, rgb(114, 5, 9), rgb(0, 32, 80))">
            <div class="container container--relative">
              <div class="section-head section-head--snug" data-reveal>
                <div class="eyebrow eyebrow--on-dark" data-reveal><span class="label-3">LATEST INSIGHTS</span></div>
                <h1 class="page-title page-title--on-dark">Our Blog</h1>
                <p class="page-lede page-lede--on-dark">Read our latest articles and updates on cancer care and surgical advancements.</p>
              </div>
            </div>
          </section>

          <section class="section section--snug" style="background-color: var(--color-surface-1, #f8fafc);">
            <div class="container">
              <style>
                .blog-grid {
                  display: grid;
                  grid-template-columns: repeat(3, 1fr);
                  gap: 2rem;
                }
                .blog-card {
                  background: #fff;
                  border-radius: 8px;
                  overflow: hidden;
                  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
                  transition: transform 0.3s ease, box-shadow 0.3s ease;
                  text-decoration: none;
                  color: inherit;
                  display: flex;
                  flex-direction: column;
                }
                .blog-card:hover {
                  transform: translateY(-5px);
                  box-shadow: 0 8px 24px rgba(0,0,0,0.1);
                }
                .blog-card__image {
                  width: 100%;
                  height: 240px;
                  object-fit: cover;
                }
                .blog-card__content {
                  padding: 1.5rem;
                  flex-grow: 1;
                  display: flex;
                  flex-direction: column;
                }
                .blog-card__title {
                  font-size: 1.25rem;
                  font-weight: 600;
                  margin: 0 0 1rem 0;
                  color: var(--color-text-1, #1e293b);
                  line-height: 1.4;
                }
                .blog-card__date {
                  font-size: 0.875rem;
                  color: var(--color-text-2, #64748b);
                  margin-bottom: 0.75rem;
                }
                .blog-card__read-more {
                  color: var(--color-primary-1, #720509);
                  font-weight: 500;
                  display: inline-flex;
                  align-items: center;
                  gap: 0.5rem;
                  margin-top: auto;
                }
                @media (max-width: 991px) { .blog-grid { grid-template-columns: repeat(2, 1fr); } }
                @media (max-width: 767px) { .blog-grid { grid-template-columns: 1fr; } }
              </style>
              
              <div class="blog-grid">
                <?php 
                $blogs = [];
                // Read all php files in the blog directory
                foreach (glob(__DIR__ . '/blog/*.php') as $file) {
                    
                    $content = file_get_contents($file);
                    
                    // Extract metadata using regex
                    preg_match('/\$title\s*=\s*[\'"](.*?)[\'"];/i', $content, $titleMatch);
                    preg_match('/\$og_image\s*=\s*[\'"](.*?)[\'"];/i', $content, $imgMatch);
                    preg_match('/\$date\s*=\s*[\'"](.*?)[\'"];/i', $content, $dateMatch);
                    
                    $title = $titleMatch[1] ?? 'Untitled Post';
                    // Strip the " | Dr. Anvesh Dharanikota" part if present for cleaner cards
                    $title = explode('|', $title)[0];

                    // A post dated in the future stays off the list until its day arrives.
                    $postDate = $dateMatch[1] ?? date('Y-m-d', filectime($file));
                    if ($postDate > date('Y-m-d')) continue;

                    $img = $imgMatch[1] ?? '/photos/logo-anvesh.jpg';
                    $img = str_replace('https://dranveshdharanikota.com', '', $img);

                    $blogs[] = [
                        'title' => trim($title),
                        'image' => $img,
                        'date'  => $postDate,
                        'url'   => '/blog/' . basename($file, '.php')
                    ];
                }
                
                // Sort blogs by date, newest first
                usort($blogs, function($a, $b) {
                    return strtotime($b['date']) - strtotime($a['date']);
                });
                
                foreach($blogs as $blog) {
                  $formatted_date = date('F j, Y', strtotime($blog['date']));
                  echo '
                  <a href="'.htmlspecialchars($blog['url']).'" class="blog-card" data-reveal>
                    <img src="'.htmlspecialchars($blog['image']).'" alt="'.htmlspecialchars($blog['title']).'" class="blog-card__image" loading="lazy">
                    <div class="blog-card__content">
                      <div class="blog-card__date">'.$formatted_date.'</div>
                      <h3 class="blog-card__title">'.htmlspecialchars($blog['title']).'</h3>
                      <span class="blog-card__read-more">Read Article <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg></span>
                    </div>
                  </a>';
                }
                
                if (empty($blogs)) {
                    echo '<div style="grid-column: 1 / -1; text-align: center; padding: 4rem 0; color: #64748b;">
                            <p>No blog posts published yet. Check back soon!</p>
                          </div>';
                }
                ?>
              </div>
            </div>
          </section>
        </div>
<?php require __DIR__ . '/footer.php'; ?>
