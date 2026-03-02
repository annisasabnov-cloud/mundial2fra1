<?php
require_once __DIR__ . '/../../config/lang.php';
$PAGE_TITLE = t('angebote.kauf_mundialcard_title');
$CURRENT_PAGE = 'kauf-mundialcard';
$IS_SUBPAGE = true;
require __DIR__ . '/../../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="w-container">
    <h2><strong><?= t('angebote.kauf_mundialcard_heading') ?></strong></h2>
    <p><?= t('angebote.kauf_mundialcard_text') ?></p>
    <a href="<?= url('no-way') ?>" class="primary-button w-button"><?= t('contact.buy_now') ?></a>
  </div>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
