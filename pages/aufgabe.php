<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('aufgabe.title');
$CURRENT_PAGE = 'aufgabe';
require __DIR__ . '/../includes/header.php';
?>

<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10"><?= t('aufgabe.task1_heading') ?></h1>
    <p class="paragraph-9"><?= t('aufgabe.task1_text') ?></p>
    <div>
      <div class="w-layout-grid grid-2">
        <a href="<?= url('task-01-cancel') ?>" class="button3 w-button"><?= t('aufgabe.skip') ?></a>
        <button class="button" onclick="window.history.back()"><?= t('aufgabe.continue') ?></button>
      </div>
    </div>
  </div>
</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>
