<?php
/**
 * TEMPORARY DIAGNOSTIC. Upload it, open it, read it, then DELETE IT.
 *
 * Upload this one file into the same folder as index.php on the server, then
 * open https://your-domain.com/server-check.php in a browser. It reports what
 * the server is actually doing, which is the quickest way to find out why
 * clean URLs such as /about return 404.
 *
 * It only reads. It changes nothing and it needs nothing else on the server.
 * Delete it once the site works: it prints server paths, which are no business
 * of the public.
 */

$dir  = __DIR__;
$here = $_SERVER['REQUEST_URI'] ?? '';

// Reaching this file without ".php" in the address can only happen if the
// rewrite rules in .htaccess ran, so the address itself is the strongest test.
$clean_url_works = strpos($here, 'server-check.php') === false;

$htaccess      = $dir . '/.htaccess';
$has_htaccess  = is_file($htaccess);
$htaccess_size = $has_htaccess ? filesize($htaccess) : 0;
$htaccess_head = $has_htaccess ? trim((string) fgets(fopen($htaccess, 'r'))) : '';

// A .htaccess saved from Windows very often lands with .txt on the end, or
// without the leading dot. Either way the server ignores it completely.
$strays = array();
foreach (array('.htaccess.txt', 'htaccess.txt', 'htaccess', '.htaccess.bak', '_htaccess') as $n) {
    if (file_exists($dir . '/' . $n)) {
        $strays[] = $n;
    }
}

$expected = array(
    'index.php', 'about.php', 'contact.php', '404.php',
    'header.php', 'footer.php', 'header-include.php', 'icons.php',
    'services.php', 'services/hpb.php', 'techniques/vats.php',
    'css/style.css', 'css/custom.css', 'js/main.js', 'sitemap.xml',
);
$missing = array();
foreach ($expected as $f) {
    if (!file_exists($dir . '/' . $f)) {
        $missing[] = $f;
    }
}

$modules = function_exists('apache_get_modules') ? apache_get_modules() : null;
$rewrite = $modules === null ? null : in_array('mod_rewrite', $modules, true);

$php_ok = version_compare(PHP_VERSION, '7.0.0', '>=');

function row($label, $ok, $detail)
{
    $mark = $ok === null ? '?' : ($ok ? 'PASS' : 'FAIL');
    $cls  = $ok === null ? 'unknown' : ($ok ? 'ok' : 'bad');
    echo "<tr class=\"$cls\"><td>$mark</td><th>" . htmlspecialchars($label)
        . "</th><td>" . $detail . "</td></tr>\n";
}

function esc($s)
{
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Server check</title>
<style>
  body { font: 15px/1.55 system-ui, sans-serif; margin: 0; padding: 2rem 1rem; background: #f6f6f7; color: #16181d; }
  main { max-width: 60rem; margin: 0 auto; }
  h1 { font-size: 1.4rem; margin: 0 0 .25rem; }
  p.sub { margin: 0 0 1.5rem; color: #55585f; }
  table { width: 100%; border-collapse: collapse; background: #fff; border: 1px solid #dcdde1; }
  td, th { padding: .6rem .75rem; border-bottom: 1px solid #ebecef; text-align: left; vertical-align: top; }
  th { font-weight: 600; width: 15rem; }
  tr:last-child td, tr:last-child th { border-bottom: 0; }
  td:first-child { width: 4rem; font-weight: 700; font-size: .8rem; letter-spacing: .04em; }
  .ok td:first-child { color: #16733b; }
  .bad td:first-child { color: #a3121a; }
  .unknown td:first-child { color: #8a6d1f; }
  .bad th, .bad td { background: #fdf3f3; }
  code { font-family: ui-monospace, Consolas, monospace; background: #eff0f3; padding: .1rem .3rem; border-radius: 3px; word-break: break-all; }
  .verdict { margin: 1.5rem 0 0; padding: 1rem 1.25rem; border-radius: 6px; border: 1px solid; }
  .verdict.bad { background: #fdf3f3; border-color: #e8b4b7; }
  .verdict.ok { background: #f1f9f4; border-color: #b0dcc2; }
  .verdict h2 { font-size: 1.05rem; margin: 0 0 .5rem; }
  .verdict ol { margin: .5rem 0 0; padding-left: 1.25rem; }
  .verdict li { margin: .35rem 0; }
  .note { margin-top: 2rem; font-size: .9rem; color: #55585f; }
</style>
</head>
<body>
<main>
<h1>Server check</h1>
<p class="sub">Temporary diagnostic. Delete this file once the site works.</p>

<table>
<?php
row('Clean URLs working', $clean_url_works,
    $clean_url_works
        ? 'You reached this page without typing <code>.php</code>, so the rewrite rules are running.'
        : 'You reached this page at <code>' . esc($here) . '</code>. That is expected on a first visit. '
          . 'Now open <code>/server-check</code> with no <code>.php</code> on the end. '
          . 'If that loads this page again, rewriting works. If it 404s, <code>.htaccess</code> is not being applied.');

row('.htaccess present', $has_htaccess,
    $has_htaccess
        ? 'Found, ' . number_format($htaccess_size) . ' bytes. First line: <code>' . esc($htaccess_head) . '</code>'
        : '<strong>Not in this folder.</strong> It is a hidden file, so File Manager and most FTP clients '
          . 'skip it unless you switch hidden files on. This alone would cause every page except the '
          . 'homepage to 404.');

row('No misnamed copies', empty($strays),
    empty($strays)
        ? 'No <code>htaccess.txt</code> or similar lying around.'
        : '<strong>Found ' . esc(implode(', ', $strays)) . '.</strong> The server only reads a file named '
          . 'exactly <code>.htaccess</code>, with the leading dot and no extension. Rename it.');

row('Site files uploaded', empty($missing),
    empty($missing)
        ? 'All ' . count($expected) . ' files I checked are present.'
        : '<strong>Missing:</strong> <code>' . esc(implode('</code>, <code>', $missing)) . '</code>');

row('PHP version', $php_ok,
    esc(PHP_VERSION) . ($php_ok ? '' : ' <strong>. This site needs PHP 7.0 or newer.</strong>'));

row('mod_rewrite loaded', $rewrite,
    $rewrite === null
        ? 'Cannot tell from PHP on this server. That is normal on LiteSpeed and on PHP-FPM. '
          . 'Use the clean URL test in the first row instead.'
        : ($rewrite ? 'Loaded.' : '<strong>Not loaded.</strong> Clean URLs cannot work without it. Ask the host.'));

row('Document root matches', isset($_SERVER['DOCUMENT_ROOT']) && realpath($_SERVER['DOCUMENT_ROOT']) === realpath($dir),
    'Server says <code>' . esc($_SERVER['DOCUMENT_ROOT'] ?? 'not set') . '</code><br>'
    . 'This file is in <code>' . esc($dir) . '</code><br>'
    . 'If those differ, the site is in a subfolder or the domain points elsewhere.');

row('Server software', true, '<code>' . esc($_SERVER['SERVER_SOFTWARE'] ?? 'not reported') . '</code>');
?>
</table>

<?php if (!$has_htaccess || !empty($strays)): ?>
<div class="verdict bad">
  <h2>What to do</h2>
  <ol>
    <li>Open your host's File Manager and go to the folder holding <code>index.php</code>, usually <code>public_html</code>.</li>
    <li>Turn on hidden files. In Hostinger's File Manager that is the <em>Settings</em> menu, <em>Show hidden files</em>.</li>
    <li>If a misnamed copy is listed above, rename it to exactly <code>.htaccess</code>.</li>
    <li>Otherwise create a new file named <code>.htaccess</code> and paste in the contents of the <code>.htaccess</code> from your site folder.</li>
    <li>Reload <code>/about</code>. Then delete this file.</li>
  </ol>
</div>
<?php elseif ($clean_url_works): ?>
<div class="verdict ok">
  <h2>Everything checks out</h2>
  <p>Clean URLs are working and the files are in place. Delete this file now.</p>
</div>
<?php endif; ?>

<p class="note">Delete <code>server-check.php</code> from the server once you are done. It prints server paths.</p>
</main>
</body>
</html>
