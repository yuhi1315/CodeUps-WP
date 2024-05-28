<?php get_header(); ?>
 <main>
      <!-- mv -->
      <section class="underlayer-mv">
        <div class="underlayer-mv__img">
          <picture>
            <source
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-sp.jpg"
              media="(max-width: 640px)"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-pc.jpg"
              alt="海と２匹の黄色い魚"
            />
          </picture>
        </div>
        <div class="underlayer-mv__title">
          <h1 class="underlayer-mv__title-main">Campaign</h1>
        </div>
      </section>
      <!-- campaign -->
      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <div class="branch-campaign branch-campaign-layout" id="campaign">
        <div class="branch-campaign__inner inner">
          <!-- wp-tag -->
          <div class="branch-campaign__list tag-list">
            <div class="tag-list__item">
              <a href="/campaign">All</a>
            </div>
            <?php
            $current_term = get_queried_object(); // 現在のタームオブジェクトを取得
            $terms = get_terms('campaign_cate');
            if (!empty($terms)):
                foreach ($terms as $term): 
                    $active_class = ($current_term && $current_term->term_id === $term->term_id) ? 'is-active' : ''; ?>
                    <div class="tag-list__item <?php echo $active_class; ?>">
                        <a href="<?php echo esc_url(get_term_link($term)); ?>">
                            <?php echo esc_html($term->name); ?>
                        </a>
                    </div>
                <?php endforeach;
            else:
                echo 'No fields found.';
            endif;
            ?>
          </div>
          <div class="branch-campaign__item campaign-cards">
           <?php if (have_posts()):
                    while (have_posts()):
                        the_post();?>
            <div class="campaign-card">
               <figure class="campaign-card__img">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img1.jpg"
                  alt="カラフルな熱帯魚の群れの画像"
                />
              </figure>
              <div class="campaign-card__body campaign-card__body--branch">
                <div class="campaign-card__top">
                  <span class="campaign-card__tag">
                    <?php the_title(); ?>
                  </span>
                  <p class="campaign-card__title campaign-card__title--branch">
                  <?php the_title(); ?>
                  </p>
                </div>
                <div class="campaign-card__bottom">
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-normal">
                        <span>
                            <?php 
                            $campaign_price = get_field('campaign_price');
                            echo '¥' . number_format(esc_html($campaign_price));
                            ?>
                        </span>
                    </p>
                    <p class="campaign-card__price-discount">
                        <?php 
                        $campaign_discount = get_field('campaign_discount');
                        echo '¥' . number_format(esc_html($campaign_discount));
                        ?>
                    </p>
                </div>
                </div>
                <div class="campaign-card__branch">
                  <p class="campaign-card__explain md-show">
                  <?php echo CFS()->get('campaign_text'); ?>
                  </p>
                  <div class="campaign-card__button-wrapper">
                    <p class="campaign-card__date md-show">2023/6/1-9/30</p>
                    <p class="campaign-card__button-message md-show">
                      ご予約・お問い合わせはコチラ
                    </p>
                    <div class="campaign-card__button md-show">
                      <a href="/contact" class="button"
                        >Contact us
                        <span></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
         </div>
         <?php endwhile; endif; ?>

          </div>
          <div class="branch-campaign__pagination pagination">
          <?php wp_pagenavi(); ?>
        </div>
        <!-- wp-ページネーション -->
      </div>
<?php get_footer(); ?>
