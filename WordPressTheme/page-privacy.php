<?php get_header(); ?>
 <!-- mv -->
 <div class="branch-privacy branch-privacy-layout" id="privacy">
        <div class="branch-privacy__inner inner">
        <p class="branch-privacy__title"><?php the_title(); ?></p>
        <?php if (have_posts()):
                while (have_posts()):
                the_post();?>
          <div class="branch-privacy__wrapper">
          <?php the_content(); ?>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
<?php get_footer(); ?>
