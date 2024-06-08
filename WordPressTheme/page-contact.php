<?php get_header(); ?>
 <!-- mv -->
 <main>
      <!-- mv -->
      <?php get_template_part('parts/underlayer') ?>

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
