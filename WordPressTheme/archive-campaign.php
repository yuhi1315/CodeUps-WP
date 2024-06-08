<?php get_header(); ?>
 <main>
       <!-- mv -->
     <?php get_template_part('parts/underlayer') ?>

      <!-- campaign -->
      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>

      <div class="branch-campaign branch-campaign-layout" id="campaign">
        <div class="branch-campaign__inner inner">
          <!-- wp-tag -->
          <div class="branch-campaign__list tag-list">
          <div class="tag-list__item is-active">
              <a href="/campaign">All</a>
            </div>
            <?php
            $terms = get_terms('campaign_cate');
            if (!empty($terms)):
                foreach ($terms as $term): ?>
                    <div class="tag-list__item">
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
                src="<?php 
                    $campaign_image = get_field('campaign_img');
                    if ($campaign_image) {
                        echo esc_url($campaign_image);
                    } else {
                        echo esc_url(get_theme_file_uri('/assets/images/common/no-img.jpeg'));
                    }
                ?>"
                alt="<?php the_title(); ?>の画像"
              />
              </figure>
              <div class="campaign-card__body campaign-card__body--branch">
                <div class="campaign-card__top">
                  <span class="campaign-card__tag">
                  <?php
                    $terms = get_the_terms(get_the_ID(), 'campaign_cate');
                    if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            echo '<span class="voice-card__category">' . esc_html($term->name) . '</span> ';
                        }
                    } else {
                        echo 'カテゴリ未選択';
                    }
                    ?>
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
                  <?php echo get_field('campaign_text'); ?>
                  </p>
                  <div class="campaign-card__button-wrapper">
                    <p class="campaign-card__date md-show">
                    <?php 
                      $campaign_start_date = get_field('campaign_start_date');
                      $campaign_end_date = get_field('campaign_end_date');
                      echo esc_html($campaign_start_date) . ' - ' . esc_html($campaign_end_date);
                    ?>                    </p>
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
        </div>
        <!-- wp-ページネーション -->
      </div>
<?php get_footer(); ?>
