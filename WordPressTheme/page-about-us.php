<?php get_header(); ?>
 <!-- mv -->
 <?php get_template_part('parts/underlayer') ?>

      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <div class="branch-about-us branch-about-us-layout" id="about-us">
        <div class="branch-about-us__inner inner">
          <div class="branch-about-us__bg branch-bg">
            <div class="branch-about-us__content about-us">
              <div class="about-us__container">
                <div class="about-us__img-container">
                  <div class="about-us__img-left md-show">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-img1.jpg"
                      alt="シーサが付いている沖縄の家の屋根の画像"
                    />
                  </div>
                  <div class="about-us__img-right about-us__img-right--branch">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-img2.jpg"
                      alt="黄色い熱帯魚が泳いでいる海中の画像"
                    />
                  </div>
                </div>
                <div class="about-us__catch-wrapper-branch md-none">
                  <p class="about-us__catch">
                    Dive into<br />
                    the Ocean
                  </p>
                </div>
                <div class="about-us__text-container">
                  <div class="about-us__catch-wrapper md-show">
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
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="branch-about-us__gallery">
            <div class="branch-about-us__title section-header">
              <h2 class="section-header__engtitle">Gallery</h2>
              <p class="section-header__jatitle">フォト</p>
            </div>
            <div class="branch-about-us__gallery-content gallery">
              <div class="gallery__wrapper">
              <?php
              $fields = CFS()->get('gallery_loop');
              if (!empty($fields)):
                foreach ($fields as $field): ?>
                <div class="gallery__item">
                  <img
                    src="<?php echo $field['gallery_img']; ?>"
                    alt="<?php the_title(); ?>"
                    class="gallery__img js-modal-open"
                  />
                </div>
                <?php
                endforeach;
              else:
                echo '画像がありません。';
              endif;
              ?>
              </div>
            </div>
          </div> -->
        </div>
        <!-- 画像モーダルウィンドウ -->
        <div class="branch-about-us__modal modal js-modal">
          <div class="modal__container">
            <div class="modal__content"></div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>