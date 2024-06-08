<?php get_header(); ?>
     <!-- mv -->
     <?php get_template_part('parts/underlayer') ?>

      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <!-- メインコンテンツ -->
      <div class="branch-info branch-info-layout" id="info">
        <div class="branch-info__inner inner">
          <div class="branch-info__tab tab">
            <div class="tab__list">
              <div class="tab__button js-tab-button is-active">
                <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sakura-icon-single.svg"
                  alt="くじらのアイコン"
                  class="md-show"
                />
                <p class="tab__button-text">
                  DRT<br class="md-none" />整体
                </p>
              </div>
              <div class="tab__button js-tab-button">
                <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sakura-icon-single.svg"
                  alt="魚のアイコン"
                  class="md-show"
                />
                <p class="tab__button-text">
                女性用<br class="md-none" />DRT
                </p>
              </div>
              <div class="tab__button js-tab-button">
                <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sakura-icon-single.svg"
                  alt="サメのアイコン"
                  class="md-show"
                />
                <p class="tab__button-text">
                  O脚矯正
                </p>
              </div>
            </div>

            <div class="tab__contents">
              <div
                id="tab_panel-1"
                class="tab__content js-tab-content is-active"
              >
                <div class="tab__content-wrapper">
                  <div class="tab__text-wrapper">
                    <p class="tab__title">DRT整体</p>
                    <p class="tab__text">
                    背骨を揺するだけで身体の不調を緩和する不思議な整体です。
                    効果を実感いただくために月に一回のメンテナンスを推奨しております。
                    </p>
                  </div>
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-img1.jpg"
                    alt="ダイビングを楽しむ人たちの画像"
                    class="tab__img"
                  />
                </div>
              </div>
              <div id="tab_panel-2" class="tab__content js-tab-content">
                <div class="tab__content-wrapper">
                  <div class="tab__text-wrapper">
                    <p class="tab__title">女性用DRT</p>
                    <p class="tab__text">
                    骨盤の位置を正常に戻すと毎月の不調が緩和されます。姿勢や顔の歪みを矯正すると健康と共に見た目の美しさを手にいれる事ができます、
                    </p>
                  </div>
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-img3.jpg"
                    alt="ダイビングを楽しむ人たちの画像"
                    class="tab__img"
                  />
                </div>
              </div>
              <div id="tab_panel-3" class="tab__content js-tab-content">
                <div class="tab__content-wrapper">
                  <div class="tab__text-wrapper">
                    <p class="tab__title">O脚矯正</p>
                    <p class="tab__text">
                    O脚は筋肉バランス、骨の位置バランスが悪い為に起こっています。矯正することで全身の体感の改善が見込め、膝痛予防にもなります。
                    </p>
                  </div>
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-img2.jpg"
                    alt="ダイビングを楽しむ人たちの画像"
                    class="tab__img"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>
