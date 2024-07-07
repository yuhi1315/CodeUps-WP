      <!-- contact -->
      <section class="contact contact-layout" id="contact">
        <div class="contact__inner inner">
          <div class="contact__container">
            <div class="contact__map">
              <div class="contact__logo">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.png"
                  alt="CodeUps"
                />
              </div>
              <address class="contact__bottom">
                <p class="contact__address">
                  岡山県新見市唐松2988-1 <br />TEL:0867-76-1216
                  <br />営業時間:8:00-20:00 <br />定休日:毎週火曜日
                </p>
                <div class="contact__google-map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.0829583086766!2d133.49378797640895!3d34.95452937283058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3556b7f1323beb61%3A0x24a5a261351701ba!2z44CSNzE4LTAwMTIg5bKh5bGx55yM5paw6KaL5biC5ZSQ5p2-77yS77yZ77yY77yY4oiS77yR!5e0!3m2!1sja!2sjp!4v1717075423598!5m2!1sja!2sjp"
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
                <h2 class="contact__engtitle">お問い合せ</h2>
                <p class="contact__jatitle">Contact</p>
              </div>
              <p class="contact__text">ご予約・お問い合わせはコチラ</p>
              <div class="contact__button">
                <a href="/contact" class="button">
                  詳細はこちら
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
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/matsunomi-logo.png"
                alt="CodeUpsのロゴ"
                class="footer__logo"
              />
            </a>
          </div>
          <!-- <div class="footer__sns">
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg"
              alt="facebookのロゴ"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets//images/common/InstagramLogo.svg"
              alt="instagramのロゴ"
            />
          </div> -->
        </div>
        <div class="footer__list grobal-nav">
          <div class="grobal-nav__container">
            <ul class="grobal-nav__items">
              <!-- <li class="grobal-nav__item">
                <a href="/campaign">キャンペーン</a>
                <a href="/info#tab_panel-1">ライセンス講習</a>
                <a href="/info#tab_panel-2">貸切体験ダイビング</a>
                <a href="/info#tab_panel-3">ナイトダイビング</a>
              </li> -->
              <li class="grobal-nav__item">
                <a href="/about-us">私たちについて</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/info">DRT情報</a>
                <a href="/info#tab_panel-1">DRT整体</a>
                <a href="/info#tab_panel-2">女性用DRT</a>
                <a href="/info#tab_panel-3">O脚矯正</a>
              </li>
            </ul>
            <ul class="grobal-nav__items">
              <li class="grobal-nav__item">
                <a href="/blog">ブログ</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/voice">お客様の声</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/faq">よくある質問</a>
              </li>
            </ul>
          </div>
          <div class="grobal-nav__container">
            <ul class="grobal-nav__items">
              <li class="grobal-nav__item">
                <a href="/sitemap">サイトマップ</a>
              </li>
              <li class="grobal-nav__item">
                <a href="/price">料金一覧</a>
                <a href="/price#price-1">DRT整体</a>
                <a href="/price#price-2">女性用DRT</a>
                <a href="/price#price-3">O脚矯正</a>
              </li>
            </ul>
            <ul class="grobal-nav__items">
              <!-- <li class="grobal-nav__item">
                <a href="/privacy"
                  >プライバシー<br class="md-none" />ポリシー</a
                >
              </li> -->
              <!-- <li class="grobal-nav__item">
                <a href="/term">利用規約</a>
              </li> -->
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
