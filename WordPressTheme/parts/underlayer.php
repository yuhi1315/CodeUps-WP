<section class="underlayer-mv">
    <div class="underlayer-mv__img">
        <picture>
            <source
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg-img.jpg"
                media="(max-width: 640px)"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg-img.jpg"
                alt="海に浮かぶダイバーの画像"
            />
        </picture>
    </div>
    <div class="underlayer-mv__title">
        <h2 class="underlayer-mv__title-main">
            <?php 
                if (is_post_type_archive('campaign')) {
                    echo 'Campaign';
                } elseif (is_post_type_archive('voice')) {
                    echo 'Voice';
                } elseif (is_home()) {
                    echo 'Blog';
                } elseif (is_page('about-us')) {
                    echo 'About-us';
                } elseif (is_page('contact')) {
                    echo 'Contact';
                } elseif (is_page('faq')) {
                    echo 'Faq';
                } elseif (is_page('info')) {
                    echo 'Information';
                } elseif (is_page('price')) {
                    echo 'Price';
                } else {
                    echo 'Information';
                }
            ?>
        </h2>
    </div>
</section>
