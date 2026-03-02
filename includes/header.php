<?php
/**
 * Shared header: <head> + navbar
 * All pages are served through index.php at root, so paths are always root-relative.
 * @var string $PAGE_TITLE  Title passed from each page
 * @var string $CURRENT_PAGE Used to mark active nav link
 */
if (!isset($PAGE_TITLE)) {
    $PAGE_TITLE = t('meta.title');
}
if (!isset($CURRENT_PAGE)) {
    $CURRENT_PAGE = '';
}
?>
<!DOCTYPE html>
<html lang="<?= current_lang() ?>">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($PAGE_TITLE) ?></title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="assets/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="assets/css/components.css" rel="stylesheet" type="text/css">
  <link href="assets/css/mundial02dea01.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({google: {families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Maven Pro:regular,500,600,700,800,900"]}});</script>
  <link href="assets/images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="assets/images/webclip.svg" rel="apple-touch-icon">
  <script>
  window.addEventListener('click', () => {
    let count = +sessionStorage.getItem('clickCount1') || 0;
    count += 1;
    sessionStorage.setItem('clickCount1', count);
  });
  </script>
  <style>
    .lang-switcher {
      display: inline-flex;
      gap: 4px;
      align-items: center;
      margin-left: 8px;
      vertical-align: middle;
    }
    .lang-switcher a {
      display: inline-block;
      padding: 3px 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 12px;
      font-weight: 700;
      text-decoration: none;
      color: #555;
      background: #f5f5f5;
      transition: background 0.2s, color 0.2s;
    }
    .lang-switcher a.active, .lang-switcher a:hover {
      background: #2a9d4e;
      color: #fff;
      border-color: #2a9d4e;
    }
  </style>
</head>
<body>
<?php
function nav_url_h(string $page): string {
    global $CURRENT_LANG;
    return 'index.php?page=' . $page . '&lang=' . $CURRENT_LANG;
}
function nav_class_h(string $page): string {
    global $CURRENT_PAGE;
    return 'nav-link-2 w-nav-link' . ($CURRENT_PAGE === $page ? ' w--current' : '');
}
function lang_switch_url(string $lang): string {
    $params = $_GET;
    $params['lang'] = $lang;
    return 'index.php?' . http_build_query($params);
}
?>
<div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
  <div class="container-6 w-container">
    <a href="<?= nav_url_h('home') ?>" class="w-inline-block <?= $CURRENT_PAGE === 'home' ? 'w--current' : '' ?>">
      <img src="assets/images/logo1_v3.svg" height="40" alt="" class="image">
    </a>
    <nav role="navigation" class="nav-menu w-nav-menu">
      <a href="<?= nav_url_h('angebote-golf') ?>" class="<?= nav_class_h('angebote-golf') ?>"><?= t('nav.golf') ?></a>
      <a href="<?= nav_url_h('waiting-angebote') ?>" class="<?= nav_class_h('waiting-angebote') ?>"><?= t('nav.offres') ?></a>
      <a href="<?= nav_url_h('preise') ?>" class="<?= nav_class_h('preise') ?>"><?= t('nav.prix') ?></a>
      <a href="<?= nav_url_h('restaurant') ?>" class="<?= nav_class_h('restaurant') ?>"><?= t('nav.restaurant') ?></a>
      <a href="<?= nav_url_h('kontakt') ?>" class="<?= nav_class_h('kontakt') ?>"><?= t('nav.contact') ?></a>
      <a href="<?= nav_url_h('oeffnungszeiten') ?>" class="<?= nav_class_h('oeffnungszeiten') ?>"><?= t('nav.horaires') ?><br></a>
    </nav>
    <div class="lang-switcher">
      <a href="<?= lang_switch_url('fr') ?>" class="<?= current_lang() === 'fr' ? 'active' : '' ?>">FR</a>
      <a href="<?= lang_switch_url('de') ?>" class="<?= current_lang() === 'de' ? 'active' : '' ?>">DE</a>
      <a href="<?= lang_switch_url('en') ?>" class="<?= current_lang() === 'en' ? 'active' : '' ?>">EN</a>
    </div>
    <a href="<?= nav_url_h('aufgabe') ?>" class="button-task-header w-button"><?= t('nav.tache') ?></a>
    <div class="menu-button w-nav-button">
      <div class="icon w-icon-nav-menu"></div>
    </div>
  </div>
</div>
