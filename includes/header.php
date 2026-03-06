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
    /* ── Lang switcher ── */
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

    /* ── Prevent horizontal overflow globally untuk mobile ── */
    body { overflow-x: hidden; }

    /* ── Lang-switcher mobile: tersembunyi di desktop ── */
    .lang-switcher-mobile {
      display: none;
    }

    /* ── Tombol tutup overlay: tersembunyi di desktop ── */
    .nav-close-btn { display: none; }

    /* ══ MOBILE ONLY (≤ 479px) — sesuai data-collapse="tiny" ══ */
    @media (max-width: 479px) {
      /* Task button & lang-switcher desktop disembunyikan */
      .button-task-header.w-button,
      .lang-switcher:not(.lang-switcher-mobile) {
        display: none !important;
      }

      /* Hamburger selalu tampil */
      .menu-button.w-nav-button {
        display: flex !important;
        align-items: center;
        justify-content: center;
        cursor: pointer;
      }

      /* Navbar tidak meluber ke kanan */
      .navbar.w-nav {
        overflow-x: hidden;
      }
      .container-6.w-container {
        padding-left: 12px;
        padding-right: 12px;
        overflow-x: hidden;
      }

      /* ── Menu overlay mobile — dikendalikan oleh JS custom ── */
      /* Sembunyikan nav-menu di mobile (default: ditutup) */
      .nav-menu.w-nav-menu {
        display: none !important;
      }

      /* Tampilkan saat .nav-open ditambahkan ke navbar */
      .navbar.w-nav.nav-open .nav-menu.w-nav-menu {
        display: flex !important;
        flex-direction: column;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        max-width: 100%;
        height: 100vh;
        background: #fff;
        z-index: 9999;
        padding: 56px 0 24px;
        overflow-y: auto;
        overflow-x: hidden;
        align-items: stretch;
        box-sizing: border-box;
      }

      /* Tombol tutup (×) di pojok kanan atas overlay */
      .nav-close-btn {
        display: none;
        position: fixed;
        top: 14px;
        right: 16px;
        z-index: 10000;
        background: none;
        border: none;
        font-size: 28px;
        line-height: 1;
        cursor: pointer;
        color: #333;
      }
      .navbar.w-nav.nav-open .nav-close-btn {
        display: block;
      }

      .navbar.w-nav.nav-open .nav-menu.w-nav-menu .nav-link-2.w-nav-link {
        display: block !important;
        width: 100%;
        text-align: center;
        padding: 14px 24px;
        font-size: 16px;
        border-bottom: 1px solid #f0f0f0;
        box-sizing: border-box;
        color: #333;
        text-decoration: none;
      }

      /* Lang-switcher mobile tampil di dalam overlay */
      .navbar.w-nav.nav-open .nav-menu.w-nav-menu .lang-switcher-mobile {
        display: flex !important;
        justify-content: center;
        align-items: center;
        gap: 12px;
        padding: 16px 24px;
        border-top: 1px solid #f0f0f0;
        margin-top: 8px;
      }

      .navbar.w-nav.nav-open .nav-menu.w-nav-menu .lang-switcher-mobile a {
        padding: 6px 16px;
        font-size: 14px;
      }
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
      <!-- lang-switcher khusus mobile, di dalam nav-menu -->
      <div class="lang-switcher lang-switcher-mobile">
        <a href="<?= lang_switch_url('id') ?>" class="<?= current_lang() === 'id' ? 'active' : '' ?>">ID</a>
        <a href="<?= lang_switch_url('en') ?>" class="<?= current_lang() === 'en' ? 'active' : '' ?>">EN</a>
        <a href="<?= lang_switch_url('fr') ?>" class="<?= current_lang() === 'fr' ? 'active' : '' ?>">FR</a>
      </div>
    </nav>
    <!-- Tombol tutup overlay mobile -->
    <button class="nav-close-btn" id="navCloseBtn" aria-label="Tutup menu">&#x2715;</button>
    <div class="lang-switcher">
      <a href="<?= lang_switch_url('id') ?>" class="<?= current_lang() === 'id' ? 'active' : '' ?>">ID</a>
      <a href="<?= lang_switch_url('en') ?>" class="<?= current_lang() === 'en' ? 'active' : '' ?>">EN</a>
      <a href="<?= lang_switch_url('fr') ?>" class="<?= current_lang() === 'fr' ? 'active' : '' ?>">FR</a>
    </div>
    <a href="<?= nav_url_h('aufgabe') ?>" class="button-task-header w-button"><?= t('nav.tache') ?></a>
    <div class="menu-button w-nav-button" id="navHamburger">
      <div class="icon w-icon-nav-menu"></div>
    </div>
  </div>
</div>
<script>
(function() {
  var navbar = document.querySelector('.navbar.w-nav');
  var hamburger = document.getElementById('navHamburger');
  var closeBtn = document.getElementById('navCloseBtn');
  if (!navbar || !hamburger) return;

  function openMenu() {
    navbar.classList.add('nav-open');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    navbar.classList.remove('nav-open');
    document.body.style.overflow = '';
  }

  hamburger.addEventListener('click', function(e) {
    e.stopPropagation();
    if (navbar.classList.contains('nav-open')) { closeMenu(); } else { openMenu(); }
  });
  if (closeBtn) {
    closeBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      closeMenu();
    });
  }
  // Tutup menu kalau klik di luar nav-menu
  document.addEventListener('click', function(e) {
    if (navbar.classList.contains('nav-open') && !navbar.contains(e.target)) {
      closeMenu();
    }
  });
  // Tutup menu kalau resize ke desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth > 479) { closeMenu(); }
  });
})();
</script>
