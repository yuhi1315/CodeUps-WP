<?php get_header(); ?>
    <main>
      <!-- mv -->
      <section class="mv">
        <div class="swiper mv__swiper js-mv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
            <?php echo get_post_meta($post->ID, 'ライセンス講習', true); ?>
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv1.jpg"
                alt="一匹の大きな亀が海面を漂っている画像"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv2.jpg"
                alt="１匹の大きな亀とダイバーの画像"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv3.jpg"
                alt="綺麗な海と船の画像"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv4.jpg"
                alt="青い空と砂浜の画像"
              />
            </div>
          </div>
        </div>
        <div class="mv__title">
          <h2 class="mv__title-main">DIVING</h2>
          <p class="mv__title-sub">into&nbsp;the&nbsp;ocean</p>
        </div>
      </section>

      <!-- campaign -->
      <section class="campaign campaign-layout" id="campaign">
        <div class="campaign__inner inner">
          <div class="campaign__title section-header">
            <h2 class="section-header__engtitle">Campaign</h2>
            <p class="section-header__jatitle">キャンペーン</p>
          </div>
          <div class="swiper campaign__swiper js-campaign__swiper">
            <div class="swiper-wrapper">
              <div class="campaign__item swiper-slide">
                <a href="" class="campaign-card">
                  <figure class="campaign-card__img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img1.jpg"
                      alt="カラフルな熱帯魚の群れの画像"
                    />
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__top">
                      <span class="campaign-card__tag">ライセンス取得</span>
                      <p class="campaign-card__title">ライセンス取得</p>
                    </div>
                    <div class="campaign-card__bottom">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-normal">
                          <span>¥56,000</span>
                        </p>
                        <p class="campaign-card__price-discount">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="campaign__item swiper-slide">
                <a href="" class="campaign-card">
                  <figure class="campaign-card__img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img2.jpg"
                      alt="綺麗な砂浜と船の画像"
                    />
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__top">
                      <span class="campaign-card__tag">体験ダイビング</span>
                      <p class="campaign-card__title">貸切体験ダイビング</p>
                    </div>
                    <div class="campaign-card__bottom">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-normal">
                          <span>¥24,000</span>
                        </p>
                        <p class="campaign-card__price-discount">¥18,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="campaign__item swiper-slide">
                <a href="" class="campaign-card">
                  <figure class="campaign-card__img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img3.jpg"
                      alt="海中を漂うクラゲの群れの画像"
                    />
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__top">
                      <span class="campaign-card__tag">体験ダイビング</span>
                      <p class="campaign-card__title">ナイトダイビング</p>
                    </div>
                    <div class="campaign-card__bottom">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-normal">
                          <span>¥10,000</span>
                        </p>
                        <p class="campaign-card__price-discount">¥8,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="campaign__item swiper-slide">
                <a href="" class="campaign-card">
                  <figure class="campaign-card__img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img4.jpg"
                      alt="ダイビングを楽しむ人たちの画像"
                    />
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__top">
                      <span class="campaign-card__tag">ファンダイビング</span>
                      <p class="campaign-card__title">貸切体験ダイビング</p>
                    </div>
                    <div class="campaign-card__bottom">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-normal">
                          <span>¥20,000</span>
                        </p>
                        <p class="campaign-card__price-discount">¥16,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="campaign__item swiper-slide">
                <a href="" class="campaign-card">
                  <figure class="campaign-card__img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img1.jpg"
                      alt="カラフルな熱帯魚の群れの画像"
                    />
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__top">
                      <span class="campaign-card__tag">ライセンス取得</span>
                      <p class="campaign-card__title">ライセンス取得</p>
                    </div>
                    <div class="campaign-card__bottom">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-normal">
                          <span>¥56,000</span>
                        </p>
                        <p class="campaign-card__price-discount">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="campaign__item swiper-slide">
                <a href="" class="campaign-card">
                  <figure class="campaign-card__img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img2.jpg"
                      alt="綺麗な砂浜と船の画像"
                    />
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__top">
                      <span class="campaign-card__tag">体験ダイビング</span>
                      <p class="campaign-card__title">貸切体験ダイビング</p>
                    </div>
                    <div class="campaign-card__bottom">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-normal">
                          <span>¥24,000</span>
                        </p>
                        <p class="campaign-card__price-discount">¥18,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="campaign__item swiper-slide">
                <a href="" class="campaign-card">
                  <figure class="campaign-card__img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img3.jpg"
                      alt="海中を漂うクラゲの群れの画像"
                    />
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__top">
                      <span class="campaign-card__tag">体験ダイビング</span>
                      <p class="campaign-card__title">ナイトダイビング</p>
                    </div>
                    <div class="campaign-card__bottom">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-normal">
                          <span>¥10,000</span>
                        </p>
                        <p class="campaign-card__price-discount">¥8,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="campaign__item swiper-slide">
                <a href="" class="campaign-card">
                  <figure class="campaign-card__img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img4.jpg"
                      alt="ダイビングを楽しむ人たちの画像"
                    />
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__top">
                      <span class="campaign-card__tag">ファンダイビング</span>
                      <p class="campaign-card__title">貸切体験ダイビング</p>
                    </div>
                    <div class="campaign-card__bottom">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-normal">
                          <span>¥20,000</span>
                        </p>
                        <p class="campaign-card__price-discount">¥16,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="campaign__button">
            <a href="./campaign.html" class="button">
              View more
              <span></span>
            </a>
          </div>
        </div>
      </section>
      <!-- about us -->
      <section class="about-us about-us-layout" id="about-us">
        <div class="about-us__inner inner">
          <div class="about-us__title section-header">
            <h2 class="section-header__engtitle">About us</h2>
            <p class="section-header__jatitle">私たちについて</p>
          </div>
          <div class="about-us__container">
            <div class="about-us__img-container">
              <div class="about-us__img-left">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-us-img1.jpg"
                  alt="シーサが付いている沖縄の家の屋根の画像"
                />
              </div>
              <div class="about-us__img-right">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-us-img2.jpg"
                  alt="黄色い熱帯魚が泳いでいる海中の画像"
                />
              </div>
            </div>
            <div class="about-us__text-container">
              <div class="about-us__catch-wrapper">
                <p class="about-us__catch">
                  Dive into<br />
                  the Ocean
                </p>
              </div>
              <div class="about-us__message-wrapper">
                <p class="about-us__message">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                </p>
                <div class="about-us__button">
                  <a href="./about-us-us.html" class="button">
                    View more
                    <span></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- information -->
      <section class="information information-layout" id="information">
        <div class="information__inner inner">
          <div class="information__title section-header">
            <h2 class="section-header__engtitle">Information</h2>
            <p class="section-header__jatitle">DRT情報</p>
          </div>
          <div class="information__container">
            <div class="information__img js-imgBg-change">
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-img.jpg"
                alt="海で泳ぐ黄色い魚の画像"
              />
            </div>
            <div class="information__content">
              <p class="information__text">ライセンス講習</p>
              <p class="information__message">
                当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
              </p>
              <div class="information__button">
                <a href="./info.html" class="button">
                  View more
                  <span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- blog -->
      <section class="blog blog-layout" id="blog">
        <div class="blog__inner inner">
          <div class="blog__title section-header">
            <h2
              class="section-header__engtitle section-header__engtitle--white"
            >
              Blog
            </h2>
            <p class="section-header__jatitle section-header__jatitle--white">
              ブログ
            </p>
          </div>
          <ul class="blog__list blog-cards">
            <li class="blog-cards__item blog-card">
              <a href="./blog-detail.html" class="blog-card__link">
                <figure class="blog-card__img">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-img1.jpg"
                    alt="サンゴの画像"
                  />
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__top">
                    <span class="blog-card__time">2023.11/17</span>
                    <p class="blog-card__title">ライセンス取得</p>
                  </div>
                  <div class="blog-card__bottom">
                    <p class="blog-card__text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class="blog-cards__item blog-card">
              <a href="./blog-detail.html" class="blog-card__link">
                <figure class="blog-card__img">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-img2.jpg"
                    alt="大きな亀の画像"
                  />
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__top">
                    <span class="blog-card__time">2023.11/17</span>
                    <p class="blog-card__title">ライセンス取得</p>
                  </div>
                  <div class="blog-card__bottom">
                    <p class="blog-card__text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class="blog-cards__item blog-card">
              <a href="./blog-detail.html" class="blog-card__link">
                <figure class="blog-card__img">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-img3.jpg"
                    alt="クマノミとイソギンチャクの画像"
                  />
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__top">
                    <span class="blog-card__time">2023.11/17</span>
                    <p class="blog-card__title">ライセンス取得</p>
                  </div>
                  <div class="blog-card__bottom">
                    <p class="blog-card__text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <div class="blog__button">
            <a href="./blog-list.html" class="button">
              View more
              <span></span>
            </a>
          </div>
        </div>
      </section>

      <!-- voice -->
      <section class="voice voice-layout" id="voice">
        <div class="voice__inner inner">
          <div class="voice__title section-header">
            <h2 class="section-header__engtitle">Voice</h2>
            <p class="section-header__jatitle">お客様の声</p>
          </div>
          <ul class="voice__list voice-cards">
            <li class="voice-cards__item voice-card">
              <a href="" class="voice-card__link">
                <div class="voice-card__body">
                  <div class="voice-card__top">
                    <div class="voice-card__info">
                      <div class="voice-card__info-wrapper">
                        <span class="voice-card__age">20代女性</span>
                        <span class="voice-card__tag">ライセンス講習</span>
                      </div>

                      <p class="voice-card__title">
                        ここにタイトルが入ります。ここにタイトル
                      </p>
                    </div>
                    <figure class="voice-card__img js-imgBg-change">
                      <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-img1.jpg"
                        alt="黄色い帽子を被った女性の画像"
                      />
                    </figure>
                  </div>
                  <div class="voice-card__bottom">
                    <p class="voice-card__text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                      ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class="voice-cards__item voice-card">
              <a href="" class="voice-card__link">
                <div class="voice-card__body">
                  <div class="voice-card__top">
                    <div class="voice-card__info">
                      <div class="voice-card__info-wrapper">
                        <span class="voice-card__age">30代男性</span>
                        <span class="voice-card__tag">ファンダイビング</span>
                      </div>
                      <p class="voice-card__title">
                        ここにタイトルが入ります。ここにタイトル
                      </p>
                    </div>
                    <figure class="voice-card__img js-imgBg-change">
                      <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-img2.jpg"
                        alt="ネイビーの服を着た男性の画像"
                      />
                    </figure>
                  </div>
                  <div class="voice-card__bottom">
                    <p class="voice-card__text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                      ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <div class="voice__button">
            <a href="./voice.html" class="button">
              View more
              <span></span>
            </a>
          </div>
        </div>
      </section>
      <!-- price -->
      <section class="price price-layout" id="price">
        <div class="price__inner inner">
          <div class="price__title section-header">
            <h2 class="section-header__engtitle">Price</h2>
            <p class="section-header__jatitle">料金一覧</p>
          </div>
          <div class="price__content">
            <div class="price__img js-imgBg-change">
              <picture>
                <source
                  srcset="./assets/images/common/price-img-pc.jpg"
                  media="(min-width: 765px)"
                />
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img-sp.jpg "
                  alt="パグが見つめている画像"
                />
              </picture>
            </div>
            <ul class="price__list">
              <li class="price__item">
                <p class="price__name">ライセンス講習</p>
                <div class="price__info">
                  <p class="plice__cource">オープンウォーターダイバーコース</p>
                  <p class="price__number">¥50,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">
                    アドバンスドオープンウォーターコース
                  </p>
                  <p class="price__number">¥60,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">レスキュー＋EFRコース</p>
                  <p class="price__number">¥70,000</p>
                </div>
              </li>
              <li class="price__item">
                <p class="price__name">体験ダイビング</p>
                <div class="price__info">
                  <p class="plice__cource">ビーチ体験ダイビング(半日)</p>
                  <p class="price__number">¥7,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">ビーチ体験ダイビング(1日)</p>
                  <p class="price__number">¥14,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">ボート体験ダイビング(半日)</p>
                  <p class="price__number">¥10,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">ボート体験ダイビング(1日)</p>
                  <p class="price__number">¥18,000</p>
                </div>
              </li>
              <li class="price__item">
                <p class="price__name">ファンダイビング</p>
                <div class="price__info">
                  <p class="plice__cource">ビーチダイビング(2ダイブ)</p>
                  <p class="price__number">¥14,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">ボートダイビング(2ダイブ)</p>
                  <p class="price__number">¥18,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">スペシャルダイビング(2ダイブ)</p>
                  <p class="price__number">¥24,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">ナイトダイビング(2ダイブ)</p>
                  <p class="price__number">¥10,000</p>
                </div>
              </li>
              <li class="price__item">
                <p class="price__name">スペシャルダイビング</p>
                <div class="price__info">
                  <p class="plice__cource">貸切ダイビング(2ダイブ)</p>
                  <p class="price__number">¥24,000</p>
                </div>
                <div class="price__info">
                  <p class="plice__cource">1日ダイビング(3ダイブ)</p>
                  <p class="price__number">¥32,000</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="price__button">
            <a href="./price.html" class="button">
              View more
              <span></span>
            </a>
          </div>
        </div>
      </section>
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
<?php get_footer(); ?>

  </body>
</html>
