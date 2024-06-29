<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- css -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="top-scroll js-page-top"></div>
    <header class="header js-header">
      <div class="header__inner">
        <h1 class="header__name">
          <a href="/">
            <img
             src="<?php echo get_theme_file_uri(); ?>/assets/images/common/matsunomi-logo.png"
              alt="松の実整体のロゴ"
              class="header__logo"
            />
          </a>
        </h1>
        <!-- pcナブ -->
        <nav class="header__pc-nav pc-nav js-pc-nav md-show">
          <div class="pc-nav__inner">
            <ul class="pc-nav__items">
              <!-- <li class="pc-nav__item">
                <a href="/campaign">
                  <p class="pc-nav__title">Campaign</p>
                  <span class="pc-nav__sub-title">キャンペーン</span>
                </a>
              </li> -->
              <li class="pc-nav__item">
                <a href="/about-us">
                  <p class="pc-nav__title">About us</p>
                  <span class="pc-nav__sub-title">私たちについて</span>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="/info">
                  <p class="pc-nav__title">Information</p>
                  <span class="pc-nav__sub-title">DRT情報</span>
                </a>
              </li>

              <li class="pc-nav__item">
                <a href="<?php echo home_url('/blog'); ?>">
                  <p class="pc-nav__title">Blog</p>
                  <span class="pc-nav__sub-title">ブログ</span>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="/voice">
                  <p class="pc-nav__title">Voice</p>
                  <span class="pc-nav__sub-title">お客様の声</span>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="/price">
                  <p class="pc-nav__title">Price</p>
                  <span class="pc-nav__sub-title">料金一覧</span>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="/faq">
                  <p class="pc-nav__title">FAQ</p>
                  <span class="pc-nav__sub-title">よくある質問</span>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="/contact">
                  <p class="pc-nav__title">Contact</p>
                  <span class="pc-nav__sub-title">お問い合わせ</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="header__hamburger js-hamburger md-none">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- spナブ -->
      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <ul class="sp-nav__items">
            <!-- <li class="sp-nav__item">
              <a href="/campaign">キャンペーン</a>
              <a href="/campaign">ライセンス取得</a>
              <a href="/campaign">貸切体験ダイビング</a>
              <a href="/campaign">ナイトダイビング</a>
            </li> -->
            <li class="sp-nav__item">
              <a href="/about-us">私たちについて</a>
            </li>
            <li class="sp-nav__item">
              <a href="/info">DRT情報</a>
              <a href="/info#tab_panel-1">DRT整体</a>
              <a href="/info#tab_panel-2">女性用DRT</a>
              <a href="/info#tab_panel-3">O脚矯正</a>
            </li>
            <li class="sp-nav__item">
              <a href="/blog">ブログ</a>
            </li>
          </ul>
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="/voice">お客様の声</a>
            </li>
            <li class="sp-nav__item">
              <a href="/price">料金一覧</a>
              <a href="/price">DRT整体</a>
              <a href="/price">女性用DRT</a>
              <a href="/price">O脚矯正</a>
            </li>
            <li class="sp-nav__item">
              <a href="/faq">よくある質問</a>
            </li>
            <li class="sp-nav__item">
              <a href="/privacy">プライバシー<br />ポリシー</a>
            </li>
            <li class="sp-nav__item">
              <a href="/term">利用規約</a>
            </li>
            <li class="sp-nav__item">
              <a href="/sitemap">サイトマップ</a>
            </li>
            <li class="sp-nav__item">
              <a href="/contact">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>