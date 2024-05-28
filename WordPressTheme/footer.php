      <!-- contact -->
      <section class="contact contact-layout" id="contact">
        <div class="contact__inner inner">
          <div class="contact__container">
            <div class="contact__map">
              <div class="contact__logo">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.svg"
                  alt="CodeUps"
                />
              </div>
              <address class="contact__bottom">
                <p class="contact__address">
                  沖縄県那覇市1-1 <br />TEL:0120-000-0000
                  <br />営業時間:8:30-19:00 <br />定休日:毎週火曜日
                </p>
                <div class="contact__google-map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1789.736818420956!2d127.67731964676238!3d26.213795679487358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5rKW57iE55yM6YKj6KaH5biCMS0x!5e0!3m2!1sja!2sjp!4v1712195334397!5m2!1sja!2sjp"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
              </address>
            </div>
            <div class="contact__message">
              <div class="contact__title">
                <h2 class="contact__engtitle">Contact</h2>
                <p class="contact__jatitle">お問い合せ</p>
              </div>
              <p class="contact__text">ご予約・お問い合わせはコチラ</p>
              <div class="contact__button">
                <a href="/contact" class="button">
                  View more
                  <span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer-layout">
      <div class="footer__inner inner">
        <div class="footer__top">
          <div class="footer__logo">
            <a href="index">
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps-logo.svg"
                alt="CodeUpsのロゴ"
                class="footer__logo"
              />
            </a>
          </div>
          <div class="footer__sns">
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg"
              alt="facebookのロゴ"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets//images/common/InstagramLogo.svg"
              alt="instagramのロゴ"
            />
          </div>
        </div>
        <div class="footer__list grobal-nav">
          <div class="grobal-nav__container">
            <ul class="grobal-nav__items">
              <li class="grobal-nav__item">
                <a href="/campaign">キャンペーン</a>
                <a href="/info#tab_panel-1">ライセンス講習</a>
                <a href="/info#tab_panel-2">貸切体験ダイビング</a>
                <a href="/info#tab_panel-3">ナイトダイビング</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/about-us">私たちについて</a>
              </li>
            </ul>
            <ul class="grobal-nav__items">
              <li class="grobal-nav__item">
                <a href="/info">ダイビング情報</a>
                <a href="/info#tab_panel-1">ライセンス講習</a>
                <a href="/info#tab_panel-2">体験ダイビング</a>
                <a href="/info#tab_panel-3">ファンダイビング</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/blog">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="grobal-nav__container">
            <ul class="grobal-nav__items">
              <li class="grobal-nav__item">
                <a href="/voice">お客様の声</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/price">料金一覧</a>
                <a href="/price#price-1">ライセンス講習</a>
                <a href="/price#price-2">体験ダイビング</a>
                <a href="/price#price-3">ファンダイビング</a>
              </li>
            </ul>
            <ul class="grobal-nav__items">
              <li class="grobal-nav__item">
                <a href="/faq">よくある質問</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/privacy"
                  >プライバシー<br class="md-none" />ポリシー</a
                >
              </li>
              <li class="grobal-nav__item">
                <a href="/term">利用規約</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/sitemap">サイトマップ</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/contact">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <p class="footer__copy-right">
        Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.
      </p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
