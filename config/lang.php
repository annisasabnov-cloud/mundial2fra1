<?php
// starts session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Determine current language
$supported_langs = ['id', 'en', 'fr'];

if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_langs)) {
    $_SESSION['lang'] = $_GET['lang'];
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'id'; // Default: Indonesian
}

$CURRENT_LANG = $_SESSION['lang'];

// Load translation file
$lang_file = __DIR__ . '/../lang/' . $CURRENT_LANG . '.json';

if (!file_exists($lang_file)) {
    $lang_file = __DIR__ . '/../lang/fr.json';
}

$TRANSLATIONS = json_decode(file_get_contents($lang_file), true);

/**
 * Get translated string by key.
 * Supports nested keys using dot notation: t('nav.golf')
 */
function t(string $key, string $default = ''): string
{
    global $TRANSLATIONS;
    $keys = explode('.', $key);
    $val = $TRANSLATIONS;
    foreach ($keys as $k) {
        if (isset($val[$k])) {
            $val = $val[$k];
        } else {
            return $default ?: $key;
        }
    }
    return is_string($val) ? $val : $key;
}

/**
 * Build a URL preserving the current language.
 */
function url(string $page = 'home', array $extra = []): string
{
    global $CURRENT_LANG;
    $params = array_merge(['page' => $page, 'lang' => $CURRENT_LANG], $extra);
    return 'index.php?' . http_build_query($params);
}

/**
 * Lang switcher URL
 */
function lang_url(string $lang): string
{
    $params = $_GET;
    $params['lang'] = $lang;
    return 'index.php?' . http_build_query($params);
}

/**
 * Return current language code
 */
function current_lang(): string
{
    global $CURRENT_LANG;
    return $CURRENT_LANG;
}
