<?php get_header(); ?>
    <main>
      <!-- mv -->
      <section class="mv">

        <div class="swiper mv__swiper js-mv-swiper">
          <div class="swiper-wrapper">
          <?php 
            $fields = CFS()->get('mv_loop');
            if (!empty($fields)):
              foreach ($fields as $field): ?>
            <div class="swiper-slide">
              <img
                src="<?php echo $field['mv_img_pc']; ?>"
                alt="一匹の大きな亀が海面を漂っている画像"
              />
            </div>
            <?php
              endforeach;
          else:
              echo 'No fields found.';
          endif; ?>
          </div>
        </div>
        <div class="mv__title">
          <h2 class="mv__title-main">柔揉み整体</br>松の実</h2>
        </div>
      </section>

      <!-- campaign -->
      <?php
        $campaign_query = new WP_Query(
            array(
                'post_type'      => 'campaign',
                'orderby'        => 'date',
                'order'          => 'DESC'
            )
        );
        if ($campaign_query->have_posts()) :
        ?>
        <section class="campaign campaign-layout" id="campaign">
            <div class="campaign__inner inner">
                <div class="campaign__title section-header">
                    <h2 class="section-header__engtitle">Campaign</h2>
                    <p class="section-header__jatitle">キャンペーン</p>
                </div>
                <div class="swiper campaign__swiper js-campaign__swiper">
                    <div class="swiper-wrapper">
                        <?php
                        while ($campaign_query->have_posts()) : $campaign_query->the_post();
                        $campaign_price = get_post_meta(get_the_ID(), 'campaign_price', true);
                        $campaign_discount = get_post_meta(get_the_ID(), 'campaign_discount', true);
                        $categories = get_the_terms(get_the_ID(), 'category_cate');
                        ?>
                        <div class="campaign__item swiper-slide">
                            <a href="/campaign" class="campaign-card">
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
                                <div class="campaign-card__body">
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
                                        <p class="campaign-card__title"><?php the_title(); ?></p>
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
                                </div>
                            </a>
                        </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="campaign__button">
                    <a href="/campaign" class="button">
                        View more
                        <span></span>
                    </a>
                </div>
            </div>
        </section>
        <?php
        else:
        ?>
            <!-- 投稿がない場合の処理（必要に応じて） -->
        <?php
        endif;

        wp_reset_postdata();
        ?>

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
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-img1.jpg"
                  alt="シーサが付いている沖縄の家の屋根の画像"
                />
              </div>
              <div class="about-us__img-right">
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-img2.jpg"
                  alt="黄色い熱帯魚が泳いでいる海中の画像"
                />
              </div>
            </div>
            <div class="about-us__text-container">
              <div class="about-us__catch-wrapper">
                <p class="about-us__catch">
                  揺らすだけの<br />
                  DRT整体
                </p>
              </div>
              <div class="about-us__message-wrapper">
                <p class="about-us__message">
                DRTとは、「ダブルハンド・リコイル・テクニック」の略で、背骨をユラユラ揺らしながらゆがみを修正していく技術です。<br />
                一般的な整体やマッサージのように、「肩が痛いから肩を揉む」「腰が痛いから腰をほぐす」といった、調子の悪い部位への直接的な施術とは異なり、神経や血液の大動脈とも言える背骨に対して、集中的に調整をかけていくDRTは、画期的な施術法として注目を集めています。
                </p>
                <div class="about-us__button">
                  <a href="/about-us" class="button">
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
              <p class="information__text">DRT整体</p>
              <p class="information__message">
                背骨を揺するだけで身体の不調を緩和する不思議な整体です。<br />
                効果を実感いただくために月に一回のメンテナンスを推奨しております。
              </p>
              <div class="information__button">
                <a href="/info" class="button">
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
          <?php
              $blog_query = new WP_Query(
                array(
                  'post_type'      => 'post',
                  'posts_per_page' => 5,
                  'posts_per_page' => 3, 
                  'orderby' => 'date',
                  'order' => 'DESC'
                )
              );
              if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
              ?>
            <li class="blog-cards__item blog-card">
              <a href="<?php the_permalink(); ?>" class="blog-card__link">
                <figure class="blog-card__img">
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full', ['alt' => the_title_attribute('echo=0')]);
                  } else {
                    // デフォルトの画像を表示
                    ?>
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-img1.jpg"
                      alt="<?php the_title_attribute(); ?>"
                    />
                    <?php
                  }
                  ?>
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__top">
                    <span class="blog-card__time"><?php echo get_the_date('Y.m/d'); ?></span>
                    <p class="blog-card__title"><?php the_title();?></p>
                  </div>
                  <div class="blog-card__bottom">
                    <p class="blog-card__text">
                    <?php the_excerpt(); ?>
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <?php
              endwhile;
            else:
            ?>
            <span>記事はありません</span>
            <?php
            endif;
            ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <div class="blog__button">
            <a href="/blog-list" class="button">
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
          <?php
          $voice_query = new WP_Query(
              array(
                  'post_type'      => 'voice',
                  'orderby'        => 'date',
                  'order'          => 'DESC',
                  'posts_per_page' => 2,
              )
          );
        if ($voice_query->have_posts()) :
            while ($voice_query->have_posts()) : $voice_query->the_post();
            $voice_content = get_post_meta(get_the_ID(), 'voice_content', true);
            $voice_age = get_post_meta(get_the_ID(), 'voice_age', true);
            $categories = get_the_terms(get_the_ID(), 'category_cate');
            ?>
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
                                  echo '未選択';
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
                    <?php echo $voice_content; ?>
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <?php
              endwhile;
            else:
            ?>
            <span>記事はありません</span>
            <?php
            endif;
            ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <div class="voice__button">
            <a href="/voice" class="button">
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
                  srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img-pc.jpg "
                  media="(min-width: 765px)"
                />
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img-sp.jpg "
                  alt="パグが見つめている画像"
                />
              </picture>
            </div>
            <ul class="price__list">
            <?php 
            $page_id = 62; 
            // 固定ページのカスタムフィールドを取得
            $fields = CFS()->get('course_parent_loop', $page_id);
            if (!empty($fields)):
              foreach ($fields as $field): ?>
              <li class="price__item">
                <p class="price__name"><?php echo $field['course_title']; ?></p>
                <?php
                  $fields_child = $field['course_child_loop'];
                  foreach ($fields_child as $field_child):
                    // コース名かコース料金のどちらか一つが空欄なら、出力しない。
                    if (!empty($field_child['course_name']) && !empty($field_child['course_price'])): ?>
                    <div class="price__info">
                      <p class="plice__cource"> <?php echo $field_child['course_name']; ?></p>
                      <p class="price__number">
                      <?php 
                          // もしcource_priceが数値以外だったら、そのまま表示
                          if (is_numeric($field_child['course_price'])) {
                              echo '¥' . number_format($field_child['course_price'], 0, '.', ',');
                          } else {
                              echo $field_child['course_price'];
                          }
                        ?>
                      </p>
                    </div>
                <?php
                  endif; // コース名とコース価格が空欄でない場合の条件の終了
                endforeach; ?>
              </li>
              <?php
              endforeach;
            else:
              echo 'No fields found.';
            endif;
          ?>
            </ul>
          </div>
          <div class="price__button">
            <a href="/price" class="button">
              View more
              <span></span>
            </a>
          </div>
        </div>
      </section>      
    </main>
<?php get_footer(); ?>
  </body>
</html>
