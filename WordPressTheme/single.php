<?php get_header(); ?>
<main>
      <!-- mv -->
      <section class="underlayer-mv">
        <div class="underlayer-mv__img">
          <picture>
            <source
              srcset="./assets/images/common/blog-list-mv-sp.jpg"
              media="(max-width: 640px)"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-list-mv-pc.jpg"
              alt="小魚の群れ"
            />
          </picture>
        </div>
        <div class="underlayer-mv__title">
          <h2 class="underlayer-mv__title-main">Blog</h2>
        </div>
      </section>
      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <!-- メインコンテンツ -->
      <div class="branch-blog branch-blog-layout" id="blog-detail">
        <div class="branch-blog__inner inner">
          <div class="branch-blog__wrapper">
          <?php if (have_posts()):
                 while (have_posts()):
                the_post();?>
            <article class="branch-blog__content blog-detail">
              <time datetime="2023/11/17" class="blog-detail__time"
                >2023.11/17</time
              >
              <h1 class="blog-detail__title">ライセンス取得</h1>
              <div class="blog-detail__eyecatching">
              <?php if (get_the_post_thumbnail_url()): ?>
                 <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                 <?php else: ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimg.png" alt="アイキャッチなし">
                <?php endif; ?>
              </div>
              <div class="blog-detail__entry">
              <?php the_content(); ?>
              </div>
              <div class="blog-detail__pagination pagination-blog-detail">
                <div class="pagination-blog-detail__wrapper">
                  <a href="" class="pagination-blog-detail__preview">＜</a>
                  <a href="" class="pagination-blog-detail__next">＞</a>
                </div>
              </div>
            </article>
            <?php endwhile; endif; ?>

            <aside class="branch-blog__sidebar sidebar">
              <!-- 人気記事 -->
              <div class="sidebar__popular">
                <div class="sidebar__title">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-wheal-logo.svg"
                    alt=""
                  />
                  <h2>人気記事</h2>
                </div>
                <div class="sidebar__popular-list">
                  <a class="sidebar__popular-item" href="">
                    <div class="sidebar__popular-img">
                      <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-yellow-fish.jpg"
                        alt="黄色い魚"
                      />
                    </div>
                    <div class="sidebar__popular-text">
                      <p class="sidebar__popular-date">2023.11/17</p>
                      <p class="sidebar__popular-title">ライセンス取得</p>
                    </div>
                  </a>
                  <a class="sidebar__popular-item" href="">
                    <div class="sidebar__popular-img">
                      <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-img2.jpg"
                        alt="大きいカメの画像"
                      />
                    </div>
                    <div class="sidebar__popular-text">
                      <p class="sidebar__popular-date">2023.11/17</p>
                      <p class="sidebar__popular-title">ウミガメと泳ぐ</p>
                    </div>
                  </a>
                  <a class="sidebar__popular-item" href="">
                    <div class="sidebar__popular-img">
                      <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-img3.jpg"
                        alt="クマノミとイソギンチャクの画像"
                      />
                    </div>
                    <div class="sidebar__popular-text">
                      <p class="sidebar__popular-date">2023.11/17</p>
                      <p class="sidebar__popular-title">カクレクマノミ</p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 口コミ -->
              <div class="sidebar__review">
                <div class="sidebar__title">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-wheal-logo.svg"
                    alt=""
                  />
                  <h2>口コミ</h2>
                </div>
                <div class="sidebar__review-item">
                  <div class="sidebar__review-img">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/review.jpg"
                      alt="仲睦まじいカップルの画像"
                    />
                  </div>
                  <p class="sidebar__review-age">30代(カップル)</p>
                  <p class="sidebar__review-title">
                    ここにタイトルが入ります。ここにタイトル
                  </p>
                  <div class="sidebar__review-button">
                    <a href="" class="button">詳細はこちら<span></span></a>
                  </div>
                </div>
              </div>
              <!-- キャンペーン -->
              <div class="sidebar__campaign">
                <div class="sidebar__title">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-wheal-logo.svg"
                    alt=""
                  />
                  <h2>キャンペーン</h2>
                </div>
                <div class="sidebar__campaign-item">
                  <a href="" class="sidebar__campaign-card campaign-card">
                    <figure
                      class="campaign-card__img campaign-card__img--sidebar"
                    >
                      <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img1.jpg"
                        alt="カラフルな熱帯魚の群れの画像"
                      />
                    </figure>
                    <div
                      class="campaign-card__body campaign-card__body--sidebar"
                    >
                      <div class="campaign-card__top">
                        <p
                          class="campaign-card__title campaign-card__title--sidebar"
                        >
                          ライセンス取得
                        </p>
                      </div>
                      <div
                        class="campaign-card__bottom campaign-card__bottom--sidebar"
                      >
                        <p
                          class="campaign-card__text campaign-card__text--sidebar"
                        >
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price">
                          <p
                            class="campaign-card__price-normal campaign-card__price-normal--sidebar"
                          >
                            <span>¥56,000</span>
                          </p>
                          <p
                            class="campaign-card__price-discount campaign-card__price-discount--sidebar"
                          >
                            ¥46,000
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="" class="sidebar__campaign-card campaign-card">
                    <figure
                      class="campaign-card__img campaign-card__img--sidebar"
                    >
                      <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img2.jpg"
                        alt="綺麗な砂浜と船の画像"
                      />
                    </figure>
                    <div
                      class="campaign-card__body campaign-card__body--sidebar"
                    >
                      <div class="campaign-card__top">
                        <p
                          class="campaign-card__title campaign-card__title--sidebar"
                        >
                          貸切体験ダイビング
                        </p>
                      </div>
                      <div
                        class="campaign-card__bottom campaign-card__bottom--sidebar"
                      >
                        <p
                          class="campaign-card__text campaign-card__text--sidebar"
                        >
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price">
                          <p
                            class="campaign-card__price-normal campaign-card__price-normal--sidebar"
                          >
                            <span>¥24,000</span>
                          </p>
                          <p
                            class="campaign-card__price-discount campaign-card__price-discount--sidebar"
                          >
                            ¥18,000
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="sidebar__campaign-button">
                  <a href="" class="button">詳細はこちら</a>
                </div>
              </div>
              <!-- アーカイブ -->
              <div class="sidebar__archive">
                <div class="sidebar__title">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-wheal-logo.svg"
                    alt=""
                  />
                  <h2>アーカイブ</h2>
                </div>
                <div class="sidebar__archive-content archive">
                  <div class="archive__item">
                    <div class="archive__year js-archive-year is-open">
                      <p>2023</p>
                    </div>
                    <div class="archive__month js-archive-month">
                      <a>3月</a>
                      <a>2月</a>
                      <a>1月</a>
                    </div>
                    <div class="archive__year js-archive-year is-open">
                      <p>2022</p>
                    </div>
                  </div>
                </div>
                </div>
              </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>

  </body>
</html>
