<?php get_header(); ?>
 <!-- mv -->
 <section class="underlayer-mv">
        <div class="underlayer-mv__img">
          <picture>
            <source
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv-sp.jpg"
              media="(max-width: 640px)"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv-pc.jpg"
              alt="海に浮かぶ5人のダイバー"
            />
          </picture>
        </div>
        <div class="underlayer-mv__title">
          <h1 class="underlayer-mv__title-main">Voice</h1>
        </div>
      </section>
      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <div class="branch-voice branch-voice-layout" id="voice">
        <div class="branch-voice__inner inner">
        <div class="branch-campaign__list tag-list">
            <div class="tag-list__item">
              <a href="/voice">All</a>
            </div>
            <?php
            $current_term = get_queried_object(); // 現在のタームオブジェクトを取得
            $terms = get_terms('voice_cate');
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
          <div class="branch-voice__contents">
            <ul class="branch-voice__list voice-cards">
            <?php if (have_posts()):
                    while (have_posts()): the_post(); ?>
              <li class="voice-cards__item voice-card">
                <a href="" class="voice-card__link">
                  <div class="voice-card__body">
                    <div class="voice-card__top">
                      <div class="voice-card__info">
                        <div class="voice-card__info-wrapper">
                          <span class="voice-card__age">
                          <?php
                            $voice_age = get_field('voice_age');
                            $voice_gender = get_field('voice_gender');
                            echo esc_html($voice_age) . '代 (' . esc_html($voice_gender) . ')';
                            ?>
                          </span>
                          <span class="voice-card__tag">
                          <?php
                            $terms = get_the_terms(get_the_ID(), 'voice_cate');
                            if (!empty($terms) && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<span class="voice-card__category">' . esc_html($term->name) . '</span> ';
                                }
                            } else {
                                echo 'カテゴリが設定されていません';
                            }
                            ?>
                          </span>
                        </div>
                        <p class="voice-card__title">
                        <?php the_title(); ?>
                        </p>
                      </div>
                      <figure class="voice-card__img js-imgBg-change">
                      <img
                        src="<?php 
                            $voice_image = get_field('voice_image');
                            if ($voice_image) {
                                echo esc_url($voice_image);
                            } else {
                                echo esc_url(get_theme_file_uri('/assets/images/common/no-img.jpeg'));
                            }
                        ?>"
                        alt="<?php the_title(); ?>の画像"
                      />
                    </figure>
                    </div>
                    <div class="voice-card__bottom">
                      <p class="voice-card__text">
                      <?php echo esc_html(get_field('voice_content')); ?>
                      </p>
                    </div>
                  </div>
                </a>
              </li>
              <?php endwhile; endif; ?>
            </ul>
            <div class="branch-voice__pagination pagination">
            <?php wp_pagenavi(); ?>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>
