<?php get_header(); ?>
 <!-- mv -->
 <section class="underlayer-mv">
        <div class="underlayer-mv__img">
          <picture>
            <source
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/terms-mv-sp.jpg"
              media="(max-width: 640px)"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/terms-mv-pc.jpg"
              alt="海底で泳ぐ魚の群れ"
            />
          </picture>
        </div>
        <div class="underlayer-mv__title">
          <h1 class="underlayer-mv__title-main">Site MAP</h1>
        </div>
      </section>
      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <div class="branch-sitemap branch-sitemap-layout" id="sitemap">
        <div class="branch-sitemap__inner inner">
          <div class="branch-sitemap__nav grobal-nav">
            <div class="grobal-nav__container grobal-nav__container--sitemap">
              <ul class="grobal-nav__items grobal-nav__items--sitemap">
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="/campaign">キャンペーン</a>
                  <a href="/info#tab_panel-1">ライセンス講習</a>
                  <a href="/info#tab_panel-2">貸切体験ダイビング</a>
                  <a href="/info#tab_panel-3">ナイトダイビング</a>
                </li>
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="">私たちについて</a>
                </li>
              </ul>
              <ul class="grobal-nav__items grobal-nav__items--sitemap">
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="/info">ダイビング情報</a>
                  <a href="">ライセンス講習</a>
                  <a href="">体験ダイビング</a>
                  <a href="">ファンダイビング</a>
                </li>
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="/blog-list">ブログ</a>
                </li>
              </ul>
            </div>
            <div class="grobal-nav__container grobal-nav__container--sitemap">
              <ul class="grobal-nav__items grobal-nav__items--sitemap">
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="">お客様の声</a>
                </li>
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="">料金一覧</a>
                  <a href="">ライセンス講習</a>
                  <a href="">体験ダイビング</a>
                  <a href="">ファンダイビング</a>
                </li>
              </ul>
              <ul class="grobal-nav__items grobal-nav__items--sitemap">
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="">よくある質問</a>
                </li>
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="">プライバシー<br class="md-none" />ポリシー</a>
                </li>
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="">利用規約</a>
                </li>
                <li class="grobal-nav__item grobal-nav__item--sitemap">
                  <a href="">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>
