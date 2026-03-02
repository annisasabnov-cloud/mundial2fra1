<?php
require_once __DIR__ . '/../../config/lang.php';
$PAGE_TITLE = t('angebote.reservation_title');
$CURRENT_PAGE = 'waiting-reservation-geburtstag';
$IS_SUBPAGE = true;
require __DIR__ . '/../../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="w-container">
    <div style="text-align:center; padding: 40px;">
      <p><?= t('angebote.waiting_text') ?></p>
    </div>
  </div>
</main>
<script>
setTimeout(function(){ window.location.href = "<?= url('reservation-geburtstagsfeier') ?>"; }, 3000);
</script>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
