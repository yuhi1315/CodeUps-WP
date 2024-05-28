<?php get_header(); ?>
 <!-- mv -->
 <main>
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
      <div class="branch-contact branch-contact-layout" id="faq">
        <div class="branch-contact__inner inner">
        <?php echo do_shortcode('[contact-form-7 id="1924038" title="お問い合わせ"]'); ?>
        </div>
      </div>
      <!-- contact -->
    </main>
<?php get_footer(); ?>
