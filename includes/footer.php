<?php
/**
 * Shared footer — all paths root-relative (served through index.php)
 */
?>
  <footer id="footer" class="footer">
    <div class="container-8 w-container">
      <a href="<?= url('home') ?>" class="w-inline-block">
        <img src="assets/images/logo1_v3.svg" height="40" alt="" class="image-1">
      </a>
    </div>
    <div class="container-8 w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <a href="<?= url('waiting-angebote') ?>" class="footer-link"><?= t('nav.offres') ?></a>
          <a href="<?= url('preise') ?>" class="footer-link"><?= t('nav.prix') ?></a>
        </div>
        <div class="w-col w-col-6">
          <a href="<?= url('kontakt') ?>" class="footer-link"><?= t('nav.contact') ?></a>
        </div>
      </div>
    </div>
    <div class="w-container">
      <div class="text-block-4"><?= t('footer.copyright') ?></div>
    </div>
  </footer>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript" crossorigin="anonymous"></script>
  <script src="assets/js/mundial02dea01.js" type="text/javascript"></script>
</body>
</html>
