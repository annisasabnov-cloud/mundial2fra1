<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('error_401.title');
http_response_code(401);
require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="w-container" style="padding: 60px 0;">
    <h1 class="heading-10"><?= t('error_401.heading') ?></h1>
    <a href="<?= url('home') ?>" class="button w-button">Home</a>
  </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
