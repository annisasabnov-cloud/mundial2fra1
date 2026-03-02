<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('start.title');
$CURRENT_PAGE = 'start';

// Store lfdn from query string for session tracking
$lfdn = $_GET['lfdn'] ?? '';

require __DIR__ . '/../includes/header.php';
?>

<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10"><?= t('start.tasks_heading') ?></h1>
    <p class="paragraph-9"><?= t('start.tasks_intro') ?></p>
    <div class="div-block-7">
      <a href="<?= url('task-01') . ($lfdn ? '&lfdn=' . htmlspecialchars($lfdn) : '') ?>" class="button w-button"><?= t('start.start_tasks') ?></a>
    </div>
  </div>
</main>

<script>
// Store lfdn in session storage
var lfdn = "<?= htmlspecialchars($lfdn) ?>";
if (lfdn) { sessionStorage.setItem('lfdn', lfdn); }
// Record start time for task tracking
var today = new Date();
var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
sessionStorage.setItem('startZeit1', date + ' ' + time + ' ' + Date.now());
// Prevent going back
window.history.forward();
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
