<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('task03.cancel_heading');
require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10"><?= t('task03.cancel_heading') ?></h1>
    <p class="paragraph-9"><?= t('task03.cancel_text') ?></p>
    <a href="<?= url('home') ?>" class="button w-button"><?= t('nav.horaires') ?></a>
  </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
