<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('preise.title');
$CURRENT_PAGE = 'preise';
require __DIR__ . '/../includes/header.php';
?>

<main id="main-content" class="main-content">
  <div class="w-container">
    <h2><?= t('preise.heading') ?></h2>

    <style>
    table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; margin-bottom: 30px; }
    td, th { border: 1px solid #dddddd; text-align: left; padding: 8px; }
    tr:nth-child(even) { background-color: #F9F9F9; }
    </style>

    <!-- Piscine -->
    <h3><?= t('preise.pool_section') ?></h3>
    <table>
      <tr><th></th><th><?= t('preise.col_adult') ?></th><th><?= t('preise.col_youth') ?></th><th><?= t('preise.col_child') ?></th></tr>
      <tr><td><?= t('preise.day_ticket') ?></td><td>30.-</td><td>20.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.entry_3h') ?></td><td>20.-</td><td>15.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.entry_15h') ?></td><td>15.-</td><td>10.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.extra_30min') ?></td><td>5.-</td><td>5.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.card10_day') ?></td><td>270.-</td><td>180.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.card10_3h') ?></td><td>180.-</td><td>135.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.card10_15h') ?></td><td>135.-</td><td>90.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td colspan="4"><?= t('preise.note_pool') ?></td></tr>
    </table>

    <!-- Sauna -->
    <h3><?= t('preise.sauna_section') ?></h3>
    <table>
      <tr><th></th><th><?= t('preise.col_adult') ?></th><th><?= t('preise.col_youth') ?></th><th><?= t('preise.col_child') ?></th></tr>
      <tr><td><?= t('preise.entry_3h') ?></td><td>25.-</td><td>15.-</td><td><?= t('preise.forbidden') ?></td></tr>
      <tr><td><?= t('preise.entry_15h') ?></td><td>20.-</td><td>10.-</td><td><?= t('preise.forbidden') ?></td></tr>
      <tr><td><?= t('preise.extra_30min_lower') ?></td><td>5.-</td><td>5.-</td><td><?= t('preise.forbidden') ?></td></tr>
      <tr><td><?= t('preise.card10_3h') ?></td><td>225.-</td><td>125.-</td><td><?= t('preise.forbidden') ?></td></tr>
      <tr><td><?= t('preise.card10_15h') ?></td><td>180.-</td><td>90.-</td><td><?= t('preise.forbidden') ?></td></tr>
      <tr><td colspan="4"><?= t('preise.note_sauna') ?></td></tr>
    </table>

    <!-- Bowling -->
    <h3><?= t('preise.bowling_section') ?></h3>
    <table>
      <tr><th></th><th><?= t('preise.col_adult') ?></th><th><?= t('preise.col_youth') ?></th><th><?= t('preise.col_child') ?></th></tr>
      <tr><td><?= t('preise.entry_1game') ?></td><td>9.-</td><td>5.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.card10') ?></td><td>81.-</td><td>45.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td colspan="4"><?= t('preise.note_bowling') ?></td></tr>
    </table>

    <!-- Minigolf -->
    <h3><?= t('preise.minigolf_section') ?></h3>
    <table>
      <tr><th></th><th><?= t('preise.col_adult') ?></th><th><?= t('preise.col_youth') ?></th><th><?= t('preise.col_child') ?></th></tr>
      <tr><td><?= t('preise.entry_1game') ?></td><td>9.-</td><td>5.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.card10') ?></td><td>81.-</td><td>45.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td colspan="4"><?= t('preise.note_minigolf') ?></td></tr>
    </table>

    <!-- Tout le centre -->
    <h3><?= t('preise.all_section') ?></h3>
    <table>
      <tr><th></th><th><?= t('preise.col_adult') ?></th><th><?= t('preise.col_youth') ?></th><th><?= t('preise.col_child') ?></th></tr>
      <tr><td><?= t('preise.day_ticket') ?></td><td>55.-</td><td>45.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.entry_3h') ?></td><td>45.-</td><td>35.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.entry_15h') ?></td><td>35.-</td><td>25.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.extra_30min_lower') ?></td><td>5.-</td><td>5.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.card10_day') ?></td><td>495.-</td><td>405.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.card10_3h') ?></td><td>405.-</td><td>315.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td><?= t('preise.card10_15h') ?></td><td>315.-</td><td>225.-</td><td><?= t('preise.free') ?></td></tr>
      <tr><td colspan="4"><?= t('preise.note_all') ?></td></tr>
    </table>

    <!-- Mundial Card -->
    <div>
      <div class="w-row">
        <div class="w-col w-col-6">
          <img src="assets/images/mundial_card_v2.png" loading="lazy" alt="" class="mundial-card">
        </div>
        <div class="w-col w-col-6">
          <h3 class="heading-9"><?= t('preise.card_heading') ?></h3>
          <p class="paragraph-7"><?= t('preise.card_text') ?></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Payment methods -->
  <div>
    <div class="container-7 w-container">
      <div class="div-block-16">
        <h3 class="heading-9"><?= t('preise.payment_heading') ?></h3>
        <p class="paragraph-7"><?= t('preise.payment_text') ?></p>
        <div class="div-block-17">
          <img src="assets/images/twint.svg" loading="lazy" alt="" class="image-9">
          <img src="assets/images/visa.svg" loading="lazy" alt="" class="image-9">
          <img src="assets/images/mastercard.svg" loading="lazy" alt="" class="image-9">
          <img src="assets/images/maestro.svg" loading="lazy" alt="" class="image-9">
          <img src="assets/images/postfinance.svg" loading="lazy" alt="" class="image-9">
          <img src="assets/images/reka.svg" loading="lazy" alt="" class="image-9">
        </div>
      </div>
    </div>
  </div>
</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>
