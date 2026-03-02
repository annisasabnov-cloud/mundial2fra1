<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('contact.title');
$CURRENT_PAGE = 'kontakt';
require __DIR__ . '/../includes/header.php';
?>

<main id="main-content" class="main-content">
  <div class="w-container">
    <div class="w-richtext">
      <h2><strong><?= t('contact.heading') ?></strong></h2>
      <p><?= t('contact.intro') ?></p>
    </div>
  </div>
  <div class="w-container">
    <h2 class="heading-13"><?= t('contact.form_heading') ?></h2>
    <div class="w-form">
      <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" class="form-2" action="<?= url('no-way') ?>" method="get">
        <div>
          <label for="field"><?= t('contact.reason_label') ?></label>
          <select id="field" name="field" required multiple class="w-select">
            <option value=""><?= t('contact.reason_placeholder') ?></option>
            <option value="Generelle Fragen"><?= t('contact.reason_general') ?></option>
            <option value="Fragen zu Abo"><?= t('contact.reason_subscription') ?></option>
            <option value="Reservationen"><?= t('contact.reason_reservation') ?></option>
            <option value="Lob und Beschwerden"><?= t('contact.reason_feedback') ?></option>
            <option value="Anderes"><?= t('contact.reason_other') ?></option>
          </select>
        </div>
        <div class="contact-form-grid-2">
          <div><label for="First-Name"><?= t('contact.firstname') ?></label><input type="text" class="w-input" maxlength="256" name="First-Name" id="First-Name" required></div>
          <div><label for="Last-Name"><?= t('contact.lastname') ?></label><input type="text" class="w-input" maxlength="256" name="Last-Name" id="Last-Name" required></div>
          <div><label for="Email"><?= t('contact.email') ?></label><input type="email" class="w-input" maxlength="256" name="Email" id="Email" required></div>
          <div><label for="Contact-Phone-Number"><?= t('contact.phone') ?></label><input type="number" class="w-input" maxlength="256" name="Contact-Phone-Number" id="Contact-Phone-Number"></div>
          <div><label for="Message"><?= t('contact.message') ?></label><textarea name="Message" maxlength="5000" id="Message" required class="w-input"></textarea></div>
        </div>
        <a href="<?= url('no-way') ?>" class="primary-button w-button"><?= t('contact.submit') ?></a>
      </form>
      <div class="w-form-done"><div><?= t('contact.form_success') ?></div></div>
      <div class="w-form-fail"><div><?= t('contact.form_error') ?></div></div>
    </div>

    <div>
      <div class="w-row">
        <div class="w-col w-col-6">
          <img src="assets/images/mundial_card_v2.png" loading="lazy" alt="" class="mundial-card">
        </div>
        <div class="w-col w-col-6">
          <h3 class="heading-9"><?= t('contact.card_heading') ?></h3>
          <p class="paragraph-7"><?= t('contact.card_text') ?></p>
        </div>
      </div>
      <div class="div-block-203">
        <a href="<?= url('no-way') ?>" class="primary-button-card-offer w-button"><?= t('contact.buy_now') ?></a>
      </div>
    </div>

    <div class="container-21 w-container">
      <div class="w-row">
        <div class="column-3 w-col w-col-6">
          <h4><?= t('contact.opening_heading') ?></h4>
          <p class="paragraph-22"><?= t('contact.opening_text') ?></p>
        </div>
        <div class="column-4 w-col w-col-6">
          <h4><?= t('contact.contact_info_heading') ?></h4>
          <p><?= t('contact.contact_info') ?></p>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>
