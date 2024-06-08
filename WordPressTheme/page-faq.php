<?php get_header(); ?>
 <!-- mv -->
 <main>
      <!-- mv -->
      <?php get_template_part('parts/underlayer') ?>

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
