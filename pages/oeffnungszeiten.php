<?php
require_once __DIR__ . '/../config/lang.php';
$PAGE_TITLE = t('oeffnungszeiten.title');
$CURRENT_PAGE = 'oeffnungszeiten';
require __DIR__ . '/../includes/header.php';
?>

<main id="main-content" class="main-content">
  <div class="w-container">
    <div class="w-richtext">
      <h2><strong><?= t('oeffnungszeiten.heading') ?></strong></h2>
      <p><?= t('oeffnungszeiten.intro') ?></p>
    </div>

    <div data-duration-in="300" data-duration-out="100" class="w-tabs">
      <div class="w-tab-menu">
        <?php
        $tabs = [
          'Tab 1' => 'tab_reception',
          'Tab 2' => 'tab_secretariat',
          'Tab 3' => 'tab_restaurant',
          'Tab 4' => 'tab_pool',
          'Tab 5' => 'tab_minigolf',
          'Tab 6' => 'tab_sauna',
          'Tab 7' => 'tab_bowling',
          'Tab 8' => 'tab_fitness',
          'Tab 9' => 'tab_concierge',
        ];
        foreach ($tabs as $tab => $key): ?>
        <a data-w-tab="<?= $tab ?>" class="tab-link-tab-1 w-inline-block w-tab-link <?= $tab === 'Tab 1' ? 'w--current' : '' ?>">
          <div><?= t('oeffnungszeiten.' . $key) ?></div>
        </a>
        <?php endforeach; ?>
      </div>

      <div class="w-tab-content">
        <?php
        $standard_tabs = ['Tab 1' => 'tab_reception', 'Tab 2' => 'tab_secretariat', 'Tab 3' => 'tab_restaurant', 'Tab 4' => 'tab_pool', 'Tab 5' => 'tab_minigolf'];
        foreach ($standard_tabs as $tab => $key): ?>
        <div data-w-tab="<?= $tab ?>" class="w-tab-pane <?= $tab === 'Tab 1' ? 'w--tab-active' : '' ?>">
          <div class="div-block-210">
            <div class="accordion-item">
              <div class="accordion__title">
                <div><?= t('oeffnungszeiten.' . $key) ?></div>
                <div class="accordion__plus-wrapper">
                  <div class="accordion__bar-vert"></div>
                  <div class="accordion__bar-hor"></div>
                </div>
              </div>
              <div style="height:0px" class="accordion__content-wrap">
                <div class="accordion__content">
                  <h3><?= t('oeffnungszeiten.' . $key) ?></h3>
                  <div class="div-block-204">
                    <h4><?= t('oeffnungszeiten.season_label') ?></h4>
                    <p class="paragraph-23"><?= t('oeffnungszeiten.hours_standard') ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- Tab 6: Sauna -->
        <div data-w-tab="Tab 6" class="w-tab-pane">
          <div data-duration-in="300" data-duration-out="100" class="w-tabs">
            <div class="w-tab-menu">
              <a data-w-tab="Tab 1" class="w-inline-block w-tab-link w--current"><div><?= t('oeffnungszeiten.steam_tab') ?></div></a>
              <a data-w-tab="Tab 2" class="tab-link-tab-1 w-inline-block w-tab-link"><div><?= t('oeffnungszeiten.sauna_tab') ?></div></a>
            </div>
            <div class="w-tab-content">
              <!-- Steam -->
              <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                <div class="accordion-item">
                  <div class="accordion__title">
                    <div><?= t('oeffnungszeiten.steam_title') ?></div>
                    <div class="accordion__plus-wrapper"><div class="accordion__bar-vert"></div><div class="accordion__bar-hor"></div></div>
                  </div>
                  <div style="height:0px" class="accordion__content-wrap">
                    <div class="accordion__content">
                      <h3><?= t('oeffnungszeiten.steam_title') ?></h3>
                      <div class="div-block-205"><h4><?= t('oeffnungszeiten.season_label') ?></h4><p class="paragraph-24"><?= t('oeffnungszeiten.hours_standard') ?></p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Saunas -->
              <div data-w-tab="Tab 2" class="w-tab-pane">
                <?php
                $saunas = ['herb_sauna', 'finnish_sauna', 'panoramic_sauna'];
                foreach ($saunas as $sauna): ?>
                <div class="accordion-item">
                  <div class="accordion__title">
                    <div><?= t('oeffnungszeiten.' . $sauna) ?></div>
                    <div class="accordion__plus-wrapper"><div class="accordion__bar-vert"></div><div class="accordion__bar-hor"></div></div>
                  </div>
                  <div style="height:0px" class="accordion__content-wrap">
                    <div class="accordion__content">
                      <h3><?= t('oeffnungszeiten.' . $sauna) ?></h3>
                      <div class="div-block-205"><h4><?= t('oeffnungszeiten.season_label') ?></h4><p class="paragraph-24"><?= t('oeffnungszeiten.hours_standard') ?></p></div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>

                <!-- Aroma Sauna (with task button) -->
                <div class="accordion-item">
                  <div class="accordion__title">
                    <div><?= t('oeffnungszeiten.aroma_sauna') ?></div>
                    <div class="accordion__plus-wrapper"><div class="accordion__bar-vert"></div><div class="accordion__bar-hor"></div></div>
                  </div>
                  <div style="height:0px" class="accordion__content-wrap">
                    <div class="accordion__content">
                      <h3><?= t('oeffnungszeiten.aroma_sauna') ?></h3>
                      <div class="div-block-205">
                        <div class="div-block-205">
                          <h4><?= t('oeffnungszeiten.season_label') ?></h4>
                          <p class="paragraph-24"><?= t('oeffnungszeiten.hours_standard') ?></p>
                          <p><strong><?= t('oeffnungszeiten.aroma_note') ?></strong></p>
                          <a onclick="sendToDatabase()" class="button w-button"><?= t('oeffnungszeiten.finish_task1') ?></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Garden Sauna -->
                <div class="accordion-item">
                  <div class="accordion__title">
                    <div><?= t('oeffnungszeiten.garden_sauna') ?></div>
                    <div class="accordion__plus-wrapper"><div class="accordion__bar-vert"></div><div class="accordion__bar-hor"></div></div>
                  </div>
                  <div style="height:0px" class="accordion__content-wrap">
                    <div class="accordion__content">
                      <h3><?= t('oeffnungszeiten.garden_sauna') ?></h3>
                      <div class="div-block-205"><h4><?= t('oeffnungszeiten.season_label') ?></h4><p class="paragraph-24"><?= t('oeffnungszeiten.hours_standard') ?></p></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tab 7: Bowling -->
        <div data-w-tab="Tab 7" class="w-tab-pane">
          <div class="accordion-item">
            <div class="accordion__title">
              <div><?= t('oeffnungszeiten.tab_bowling') ?></div>
              <div class="accordion__plus-wrapper"><div class="accordion__bar-vert"></div><div class="accordion__bar-hor"></div></div>
            </div>
            <div style="height:0px" class="accordion__content-wrap">
              <div class="accordion__content">
                <h3><?= t('oeffnungszeiten.tab_bowling') ?></h3>
                <div class="div-block-205"><h4><?= t('oeffnungszeiten.season_label') ?></h4><p class="paragraph-24"><?= t('oeffnungszeiten.hours_bowling') ?></p></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tab 8: Fitness -->
        <div data-w-tab="Tab 8" class="w-tab-pane">
          <div class="accordion-item">
            <div class="accordion__title">
              <div><?= t('oeffnungszeiten.tab_fitness') ?></div>
              <div class="accordion__plus-wrapper"><div class="accordion__bar-vert"></div><div class="accordion__bar-hor"></div></div>
            </div>
            <div style="height:0px" class="accordion__content-wrap">
              <div class="accordion__content">
                <h3><?= t('oeffnungszeiten.tab_fitness') ?></h3>
                <div class="div-block-204"><h4><?= t('oeffnungszeiten.season_label') ?></h4><p class="paragraph-23"><?= t('oeffnungszeiten.hours_standard') ?></p></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tab 9: Concierge -->
        <div data-w-tab="Tab 9" class="w-tab-pane">
          <div class="accordion-item">
            <div class="accordion__title">
              <div><?= t('oeffnungszeiten.tab_concierge') ?></div>
              <div class="accordion__plus-wrapper"><div class="accordion__bar-vert"></div><div class="accordion__bar-hor"></div></div>
            </div>
            <div style="height:0px" class="accordion__content-wrap">
              <div class="accordion__content">
                <h3><?= t('oeffnungszeiten.tab_concierge') ?></h3>
                <div class="div-block-205"><h4><?= t('oeffnungszeiten.season_label') ?></h4><p class="paragraph-24"><?= t('oeffnungszeiten.hours_standard') ?></p></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<script type="text/javascript">
function sendToDatabase() {
  var today = new Date();
  var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date + ' ' + time;
  var timestamp = Date.now();
  var timeInfo = dateTime.concat(' ', timestamp);
  sessionStorage.setItem('endZeit1', timeInfo);
  window.location.href = "<?= url('task-01-end') ?>";
}
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
