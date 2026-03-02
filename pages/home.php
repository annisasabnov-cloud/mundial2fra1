<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('home.title');
$CURRENT_PAGE = 'home';
require __DIR__ . '/../includes/header.php';
?>

<header id="hero-overlay" class="hero-overlay">
  <div class="container w-container">
    <img src="assets/images/logo2_v3.svg" loading="lazy" alt="" class="image-6">
    <h1 class="heading2"><strong class="text-field"><?= t('home.hero_tagline') ?></strong></h1>
    <h1 class="heading2"><strong class="bold-text"><?= t('home.hero_name') ?><br></strong></h1>
  </div>
</header>

<header id="hero" class="hero">
  <div class="w-embed">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  </div>
  <div class="w-container">
    <h1 class="heading-5"><?= t('home.welcome_heading') ?></h1>
    <p class="paragraph-3"><?= t('home.welcome_text') ?></p>
    <div>
      <div class="div-block-30">
        <img src="assets/images/logoicon_swim_green.svg" loading="lazy" alt="" class="image-23">
        <img src="assets/images/logoicon_golf_green.svg" loading="lazy" alt="" class="image-23">
        <img src="assets/images/logoicon_bowling_green.svg" loading="lazy" alt="" class="image-23-copy">
        <img src="assets/images/logoicon_sauna_green.svg" loading="lazy" alt="" class="image-23">
        <img src="assets/images/logoicon_birthday_green.svg" loading="lazy" alt="" class="image-23">
        <img src="assets/images/logoicon_restaurant_green.svg" loading="lazy" alt="" class="image-23">
      </div>
    </div>
  </div>
</header>

<section id="feature-section" class="feature-section">
  <div class="flex-container w-container">
    <div class="feature-image-mask">
      <img src="assets/images/sauna3.jpeg" sizes="(max-width: 479px) 92vw, 444px" alt="" class="feature-image-2">
    </div>
    <div>
      <h2 class="heading-6"><?= t('home.sauna_heading') ?></h2>
      <p class="paragraph-4"><?= t('home.sauna_text') ?></p>
    </div>
  </div>
</section>

<header id="hero" class="hero">
  <div class="flex-container w-container">
    <div>
      <h1 class="heading-4"><?= t('home.pool_heading') ?></h1>
      <p class="paragraph-5">&#8205;<br>
        <?= str_replace('%pool_url%', url('hallenbad'), t('home.pool_text')) ?>
      </p>
    </div>
    <div class="hero-image-mask">
      <img src="assets/images/naturpool2.jpeg" sizes="(max-width: 479px) 92vw, 444px" alt="" class="hero-image-2">
    </div>
  </div>
</header>

<section id="cards-section" class="cards-section-test">
  <div class="centered-container w-container">
    <h2 class="heading-11"><?= t('home.offers_heading') ?></h2>
    <div class="cards-grid-container-test">
      <a href="<?= url('hallenbad') ?>" class="angebot-block-copy3 w-inline-block">
        <div class="div-block-19"><img src="assets/images/logoicon_swim_green.svg" loading="lazy" alt="" class="logoicon_01"></div>
        <h3 class="heading-8"><?= t('home.offer_pool_name') ?></h3>
        <p class="paragraph-6"><?= t('home.offer_pool_text') ?></p>
        <div class="text-block-5"><?= t('home.read_more') ?></div>
      </a>
      <a href="<?= url('restaurant') ?>" class="angebot-block-copy2 w-inline-block">
        <div class="div-angebot-picture-6"><img src="assets/images/logoicon_restaurant_green.svg" loading="lazy" alt="" class="logoicon_06"></div>
        <h3 class="heading-8"><?= t('home.offer_restaurant_name') ?></h3>
        <p class="paragraph-6"><?= t('home.offer_restaurant_text') ?></p>
        <div class="text-block-5"><?= t('home.read_more') ?></div>
      </a>
      <a href="<?= url('angebote-golf') ?>" class="angebot-block-copy w-inline-block">
        <div class="div-block-28"><img src="assets/images/logoicon_golf_green.svg" loading="lazy" alt="" class="logoicon_03"></div>
        <h3 class="heading-8"><?= t('home.offer_minigolf_name') ?></h3>
        <p class="paragraph-6"><?= t('home.offer_minigolf_text') ?></p>
        <div class="text-block-5"><?= t('home.read_more') ?></div>
      </a>
    </div>
    <div class="div-block-8">
      <a href="<?= url('waiting-angebote') ?>" class="primary-button w-button"><?= t('home.all_offers_btn') ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
