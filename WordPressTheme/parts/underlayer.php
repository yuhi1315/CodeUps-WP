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
                    echo 'キャンペーン';
                } elseif (is_post_type_archive('voice')) {
                    echo 'お客様の声';
                } elseif (is_home()) {
                    echo 'ブログ';
                } elseif (is_page('about-us')) {
                    echo '私たちについて';
                } elseif (is_page('contact')) {
                    echo 'お問い合わせ';
                } elseif (is_page('faq')) {
                    echo 'よくあるご質問';
                } elseif (is_page('info')) {
                    echo 'DRT情報';
                } elseif (is_page('price')) {
                    echo '料金';
                } else {
                    echo 'Information';
                }
            ?>
        </h2>
    </div>
</section>
