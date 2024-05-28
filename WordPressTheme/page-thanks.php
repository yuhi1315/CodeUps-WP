<?php get_header(); ?>
  <!-- mv -->
  <section class="underlayer-mv">
        <div class="underlayer-mv__img">
          <picture>
            <source
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-sp.jpg"
              media="(max-width: 640px)"
            />
            <img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-pc.jpg"
              alt="海と壮大な波の画像"
            />
          </picture>
        </div>
        <div class="underlayer-mv__title">
          <h1 class="underlayer-mv__title-main">Contact</h1>
        </div>
      </section>
      <!-- wp-パンくずリスト -->
      <?php get_template_part('parts/breadcrumb') ?>
      <div class="branch-thanks branch-thanks-layout" id="thanks">
        <div class="branch-thanks__inner inner">
          <div class="branch-thanks__wrapper">
            <p class="branch-thanks__text">
              お問い合わせ内容を送信完了しました。
            </p>
            <p class="branch-thanks__text">
              このたびは、お問い合わせ頂き<br
                class="md-none"
              />誠にありがとうございます。<br />
              お送り頂きました内容を確認の上、
              <br
                class="md-none"
              />3営業日以内に折り返しご連絡させて頂きます。<br />
              また、ご記入頂いたメールアドレスへ、<br
                class="md-none"
              />自動返信の確認メールをお送りしております。
            </p>
          </div>
        </div>
      </div>
      <!-- contact -->
    </main>   
<?php get_footer(); ?>
