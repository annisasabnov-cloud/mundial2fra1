<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('task03.title');
$CURRENT_PAGE = 'task-03';
require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10"><?= t('task03.task_heading') ?></h1>
    <p class="paragraph-9"><?= t('task03.task_text') ?></p>
    <div>
      <div class="w-layout-grid grid-2">
        <a href="<?= url('task-03-cancel') ?>" class="button3 w-button"><?= t('task03.skip') ?></a>
        <button class="button" onclick="window.history.back()"><?= t('task03.continue') ?></button>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
