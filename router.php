<?php
/**
 * Local preview only. Nothing on the live server uses this file.
 *
 *     php -S localhost:8000 router.php
 *
 * then open http://localhost:8000
 *
 * PHP's built-in server has no .htaccess, so on its own it would 404 on
 * /about even though about.php is sitting right there. This applies the one
 * rule the real host applies: a clean URL is served from the .php file of the
 * same name. It also serves 404.php for anything that does not exist, so the
 * error page can be checked locally too.
 */

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = rawurldecode($path);

// Refuse anything that tries to climb out of the site folder.
if (strpos($path, '..') !== false) {
    http_response_code(400);
    exit('Bad request');
}

// The shared includes are not pages. The live server denies them too.
if (preg_match('~^/(header|footer|header-include|icons|router)\.php$~', $path)) {
    http_response_code(403);
    exit('Forbidden');
}

// Let the built-in server deliver real files itself: css, js, photos.
if ($path !== '/' && is_file(__DIR__ . $path)) {
    return false;
}

$page = $path === '/' ? '/index' : rtrim($path, '/');
$file = __DIR__ . $page . '.php';

if (is_file($file)) {
    require $file;
    return true;
}

http_response_code(404);
require __DIR__ . '/404.php';
return true;
