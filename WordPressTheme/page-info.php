<?php get_header(); ?>
 <!-- mv -->
 <section class="underlayer-mv">
        <div class="underlayer-mv__img">
        <picture>
            <source
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-sp.jpg"
              media="(max-width: 640px)"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-pc.jpg"
              alt="海に浮かぶダイバーの画像"
            />
          </picture>
        </div>
        <div class="underlayer-mv__title">
          <h2 class="underlayer-mv__title-main">Information</h2>
        </div>
      </section>
      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <!-- メインコンテンツ -->
      <div class="branch-info branch-info-layout" id="info">
        <div class="branch-info__inner inner">
          <div class="branch-info__tab tab">
            <div class="tab__list">
              <div class="tab__button js-tab-button is-active">
                <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-wheal-logo.svg"
                  alt="くじらのアイコン"
                  class="md-show"
                />
                <p class="tab__button-text">
                  ライセンス<br class="md-none" />講習
                </p>
              </div>
              <div class="tab__button js-tab-button">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-fish-logo.svg"
                  alt="魚のアイコン"
                  class="md-show"
                />
                <p class="tab__button-text">
                  体験<br class="md-none" />ダイビング
                </p>
              </div>
              <div class="tab__button js-tab-button">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-shark-logo.svg"
                  alt="サメのアイコン"
                  class="md-show"
                />
                <p class="tab__button-text">
                  ファン<br class="md-none" />ダイビング
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
                    <p class="tab__title">ライセンス講習</p>
                    <p class="tab__text">
                      泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
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
                    <p class="tab__title">体験ダイビング</p>
                    <p class="tab__text">
                      ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
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
                    <p class="tab__title">ファンダイビング</p>
                    <p class="tab__text">
                      ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
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
