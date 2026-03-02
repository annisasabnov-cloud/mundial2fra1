<?php
require_once __DIR__ . '/../../config/lang.php';
$PAGE_TITLE = t('angebote.restaurant_title');
$CURRENT_PAGE = 'restaurant';
require __DIR__ . '/../../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="w-container">
    <a href="<?= url('waiting-angebote') ?>" class="back w-inline-block">
      <img src="assets/images/back.svg" loading="lazy" alt="" class="image-26">
      <div class="text-block-7"><?= t('angebote.back') ?></div>
    </a>
  </div>
  <div class="container-22 w-container">
    <div class="div-block-47"></div>
    <div class="w-richtext">
      <p>&#8205;</p>
      <h2><strong><?= t('angebote.restaurant_heading') ?></strong></h2>
      <p><?= t('angebote.restaurant_text') ?></p>
    </div>
    <div class="div-block-209">
      <a href="<?= url('no-way') ?>" class="primary-button w-button"><?= t('angebote.reserve') ?></a>
    </div>
  </div>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
