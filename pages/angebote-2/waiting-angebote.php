<?php
require_once __DIR__ . '/../../config/lang.php';
$PAGE_TITLE = t('angebote.waiting_title');
$CURRENT_PAGE = 'waiting-angebote';
require __DIR__ . '/../../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="w-container">
    <h2><?= t('angebote.waiting_title') ?></h2>
    <p><?= t('angebote.waiting_text') ?></p>
    <div class="cards-grid-container-test" style="margin-top:30px;">
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
      <a href="<?= url('bowling') ?>" class="angebot-block-copy w-inline-block">
        <div class="div-block-28"><img src="assets/images/logoicon_bowling_green.svg" loading="lazy" alt="" class="logoicon_03"></div>
        <h3 class="heading-8"><?= t('angebote.bowling_title') ?></h3>
        <p class="paragraph-6"><?= t('angebote.bowling_text') ?></p>
        <div class="text-block-5"><?= t('home.read_more') ?></div>
      </a>
      <a href="<?= url('birthday') ?>" class="angebot-block-copy w-inline-block">
        <div class="div-block-28"><img src="assets/images/logoicon_birthday_green.svg" loading="lazy" alt="" class="logoicon_03"></div>
        <h3 class="heading-8"><?= t('angebote.birthday_title') ?></h3>
        <p class="paragraph-6"><?= t('angebote.birthday_text') ?></p>
        <div class="text-block-5"><?= t('home.read_more') ?></div>
      </a>
    </div>
  </div>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
