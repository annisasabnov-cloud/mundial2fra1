<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('task02.end_heading');
require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10"><?= t('task02.end_heading') ?></h1>
    <p class="paragraph-9"><?= t('task02.end_text') ?></p>
    <a href="<?= url('task-03') ?>" class="button w-button"><?= t('task03.title') ?></a>
  </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
