<?php get_header(); ?>
    <main>
      <!-- mv -->
     <?php get_template_part('parts/underlayer') ?>

      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <!-- メインコンテンツ -->
      <div class="branch-blog branch-blog-layout" id="blog-list">
        <div class="branch-blog__inner inner">
          <div class="branch-blog__wrapper">
            <div class="branch-blog__content">
              <ul class="blog-cards blog-cards--branch">
              <?php if (have_posts()):
                while (have_posts()):
                the_post();?>
                <li class="blog-cards__item blog-card">
                  <a href="<?php the_permalink(); ?>" class="blog-card__link">
                    <figure class="blog-card__img">
                    <?php if (get_the_post_thumbnail_url()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimg.png" alt="アイキャッチなし">
                    <?php endif; ?>
                    </figure>
                    <div class="blog-card__body">
                      <div class="blog-card__top">
                        <span class="blog-card__time">2023.11/17</span>
                        <p class="blog-card__title"><?php the_title(); ?></p>
                      </div>
                      <div class="blog-card__bottom line-clamp">
                        <p class="blog-card__text">
                        <?php the_excerpt(); ?>
                        </p>
                    </div>
                    </div>
                  </a>
                </li>
                <?php endwhile; endif; ?>
              </ul>
              <div class="branch-blog__pagination pagination">
              <?php wp_pagenavi(); ?>
              </div>
            </div>
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
                <?php
                    if ( function_exists('wpp_get_mostpopular') ) {
                      $args = array(
                        'range' => 'all',               // 集計する期間 {daily(1日), weekly(1週間), monthly(1ヶ月), all(全期間)}
                        'order_by' => 'views',          // 表示順｛views（閲覧数),comments（コメント数）,avg（1日の平均）}
                        'post_type' => 'post',  // 対象とする投稿タイプ
                        'limit' => 3                // 取得する記事数
                      );
                      $wppQuery = new \WordPressPopularPosts\Query($args);
                      $wppPosts = $wppQuery->get_posts();
                  }
                    ?>
                    <?php foreach ($wppPosts as $wppPost): ?>
                      <?php
                        $post = get_post($wppPost->id);
                        setup_postdata($post);
                      ?>
                  <a class="sidebar__popular-item" href="">
                    <div class="sidebar__popular-img">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="sidebar__popular-text">
                      <p class="sidebar__popular-date">2023.11/17</p>
                      <p class="sidebar__popular-title"><?php the_title(); ?></p>
                    </div>
                  </a>
                  <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                </div>
              </div>
              <!-- 口コミ -->
              <!-- <div class="sidebar__review">
                <div class="sidebar__title">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-wheal-logo.svg" alt="" />
                    <h2>口コミ</h2>
                </div>
                <?php
                // 口コミのカスタム投稿タイプから投稿を取得する
                $args = array(
                    'post_type' => 'voice', // カスタム投稿タイプが'review'であることを想定
                    'posts_per_page' => 1, // 表示する口コミの数
                );
                $voice_query = new WP_Query($args);
                if ($voice_query->have_posts()) :
                    while ($voice_query->have_posts()) : $voice_query->the_post();
                        // カスタムフィールドから年齢と画像IDを取得することを想定
                        $voice_age = get_post_meta(get_the_ID(), 'voice_age', true);
                        $voice_image_id = get_post_meta(get_the_ID(), 'voice_image', true);
                        $voice_image_url = wp_get_attachment_url($voice_image_id); // 画像URLを取得
                ?>
                <div class="sidebar__review-item">
                    <div class="sidebar__review-img">
                        <?php if ($voice_image_url) : ?>
                            <img src="<?php echo esc_url($voice_image_url); ?>" alt="<?php the_title_attribute(); ?>" />
                        <?php else : ?>
                            <p>画像がありません</p>
                        <?php endif; ?>
                    </div>
                    <p class="sidebar__review-age"><?php echo esc_html($voice_age); ?></p>
                    <p class="sidebar__review-title"><?php the_title(); ?></p>
                    <div class="sidebar__review-button">
                        <a href="<?php the_permalink(); ?>" class="button">View more<span></span></a>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>口コミはまだありません。</p>';
                endif;
                ?>
            </div> -->

              <!-- キャンペーン -->
              <!-- <div class="sidebar__campaign">
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
                  <a href="" class="button">View more</a>
                </div>
              </div> -->
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
                  <ul class="monthly-list">
                  <?php custom_yearly_monthly_archives(); ?>
                 </ul>
                  </div>
                </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
  </body>
</html>
<?php get_footer(); ?>

  </body>
</html>
