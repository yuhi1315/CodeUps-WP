<?php get_header(); ?>
  <!-- mv -->
  <?php get_template_part('parts/underlayer') ?>

      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <div class="branch-price branch-price-layout" id="price">
        <div class="branch-price__inner inner">
          <div class="branch-price__content">
          <?php 
            $fields = CFS()->get('course_parent_loop');
            if (!empty($fields)):
              foreach ($fields as $field): ?>
                  <div class="branch-price__item price-item" id="price">
                      <div class="price-item__title">
                          <p class="price-item__text"><?php echo $field['course_title']; ?></p>
                          <div class="price-item__img">
                              <img
                                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-wheal-logo.svg"
                                  alt="くじらのアイコン"
                              />
                          </div>
                      </div>
                      <?php $fields_child = $field['course_child_loop']; ?>
                      <table class="price-item__table table">
                          <?php
                          foreach ($fields_child as $field_child):
                              // コース名かコース料金のどちらか一つが空欄なら、出力しない。
                              if (!empty($field_child['course_name']) && !empty($field_child['course_price'])): ?>
                                  <tr>
                                      <td class="table__course">
                                          <?php echo $field_child['course_name']; ?>
                                      </td>
                                      <td class="table__price">
                                      <?php 
                                        // もしcource_priceが数値以外だったら、そのまま表示
                                        if (is_numeric($field_child['course_price'])) {
                                            echo '¥' . number_format($field_child['course_price'], 0, '.', ',');
                                        } else {
                                            echo $field_child['course_price'];
                                        }
                                      ?>
                                    </td>
                                  </tr>
                              <?php
                              endif; // コース名とコース価格が空欄でない場合の条件の終了
                          endforeach; ?>
                      </table>
                  </div>
                  <?php
              endforeach;
          else:
              echo 'No fields found.';
          endif;
          ?>
          </div>
        </div>
      </div>
<?php get_footer(); ?>
