<?php
require_once __DIR__ . '/../../config/lang.php';
$PAGE_TITLE = t('angebote.complete_title');
$CURRENT_PAGE = 'reservation-geburtstag-complete';
$IS_SUBPAGE = true;
require __DIR__ . '/../../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="w-container">
    <h2><strong><?= t('angebote.complete_heading') ?></strong></h2>
    <p><?= t('angebote.complete_text') ?></p>
    <a href="<?= url('home') ?>" class="button w-button">Home</a>
  </div>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
