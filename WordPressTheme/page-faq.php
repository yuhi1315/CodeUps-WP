<?php get_header(); ?>
 <!-- mv -->
 <main>
      <!-- mv -->
      <section class="underlayer-mv">
        <div class="underlayer-mv__img">
          <picture>
            <source
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-sp.jpg"
              media="(max-width: 640px)"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-pc.jpg"
              alt="砂浜とあおい海"
            />
          </picture>
        </div>
        <div class="underlayer-mv__title">
          <h1 class="underlayer-mv__title-main">FAQ</h1>
        </div>
      </section>
      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <div class="branch-faq branch-faq-layout" id="faq">
        <div class="branch-faq__inner inner">
          <div class="branch-faq__accordion accordion js-accordion">
            <div class="accordion__container">
            <?php
              $fields = CFS()->get('faq_loop');
              if (!empty($fields)):
                foreach ($fields as $field): 
                  if (!empty($field['faq_question']) && !empty($field['faq_answer'])): ?>
                    <div class="accordion__item js-accordion__item">
                      <h3 class="accordion__title js-accordion__title is-open">
                        <?php echo $field['faq_question']; ?>
                      </h3>
                      <div class="accordion__content js-accordion__content">
                        <p class="accordion__text">
                          <?php echo $field['faq_answer']; ?>
                        </p>
                      </div>
                    </div>
                  <?php
                  endif; // 質問と回答が空欄でない場合の条件の終了
                endforeach;
              else:
                echo 'No fields found.';
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>
