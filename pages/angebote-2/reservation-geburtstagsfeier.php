<?php
require_once __DIR__ . '/../../config/lang.php';
$PAGE_TITLE = t('angebote.reservation_title');
$CURRENT_PAGE = 'reservation-geburtstagsfeier';
$IS_SUBPAGE = true;
require __DIR__ . '/../../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="w-container">
    <h2><strong><?= t('angebote.reservation_heading') ?></strong></h2>
    <p><?= t('angebote.reservation_text') ?></p>
    <a href="<?= url('reservation-geburtstag-complete') ?>" class="primary-button w-button"><?= t('angebote.reserve') ?></a>
  </div>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
