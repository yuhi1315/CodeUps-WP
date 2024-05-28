<?php 
function custom_enqueue_styles_scripts() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap', array(), null);

    // テーマのメインスタイルシート
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')));

    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);

    // Swiper JS
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11.0', true);

    // 独自のjQueryプラグイン（inview）
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')), true);

    // 独自のスクリプト
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery', 'jquery-inview', 'swiper'), filemtime(get_theme_file_path('/assets/js/script.js')), true);
}

add_action('wp_enqueue_scripts', 'custom_enqueue_styles_scripts');
?>