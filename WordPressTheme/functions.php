<?php 
function custom_enqueue_styles_scripts() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap', array(), null);

    // テーマのメインスタイルシート
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')));
    wp_deregister_script('jquery');
    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);
    // Swiper JS
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11.0', true);

    // 独自のjQueryプラグイン（inview） 
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')), true);

    // 独自のスクリプト
    wp_enqueue_script('theme-scripts', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0.0', true);
}

// フックに関数を追加
add_action('wp_enqueue_scripts', 'custom_enqueue_styles_scripts');


function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

//アーカイブの表示件数変更
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query(array('about')) )
        return;
    if ( $query->is_archive('works') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '12' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

function custom_yearly_monthly_archives() {
    global $wpdb;

    $archives = $wpdb->get_results("
        SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts
        FROM $wpdb->posts
        WHERE post_type = 'post' AND post_status = 'publish'
        GROUP BY YEAR(post_date), MONTH(post_date)
        ORDER BY post_date DESC
    ");

    $months = array(
        1 => '1月', 
        2 => '2月', 
        3 => '3月', 
        4 => '4月', 
        5 => '5月', 
        6 => '6月', 
        7 => '7月', 
        8 => '8月', 
        9 => '9月', 
        10 => '10月', 
        11 => '11月', 
        12 => '12月'
    );

    if ($archives) {
        $last_year = null;
        foreach ($archives as $archive) {
            $year = $archive->year;
            $month = $archive->month;
            $posts = $archive->posts;

            if ($last_year != $year) {
                if ($last_year != null) {
                    echo '</ul>'; // Close the previous year's list
                }
                echo '<div class="archive__year js-archive-year"><p>' . esc_html($year) . '</p></div>';
                echo '<ul class="archive__month js-archive__month">'; // Start a new list for the current year
            }

            echo '<li><a href="' . get_month_link($year, $month) . '">' . esc_html($months[$month]) . ' (' . $posts . ')</a></li>';

            $last_year = $year;
        }
        echo '</ul>'; // Close the last year's list
    }
}

function validate_acf_date_range($valid, $value, $field, $input) {

    // フィールドキーを使って値を取得　（Wordpressの管理画面から取得。ACF→ツール→Jsonをエクスポート→"key"という項目に記述されているもの）
    $start_date_key = 'field_664e9782a213a'; // 実際の「開始日」のフィールドキー　ここを変更する
    $end_date_key = 'field_664e9869a213d'; // 実際の「終了日」のフィールドキー　ここを変更する

    $start_date = $_POST['acf'][$start_date_key];
    $end_date = $_POST['acf'][$end_date_key];
    // もしバリデーションが他のフィールドで既に失敗している場合、終了する
    if (!$valid) {
        return $valid;
    }

    // 日付フォーマットを確認し、比較
    if ($start_date && $end_date) {
        $start_datetime = strtotime($start_date);
        $end_datetime = strtotime($end_date);

        if ($end_datetime < $start_datetime) {
            $valid = '終了日付は開始日付以降でなければなりません。';
        }
    }

    return $valid;
}

// バリデーションフックに登録
add_filter('acf/validate_value/key=field_664e9869a213d', 'validate_acf_date_range', 10, 4);

function validate_acf_price_range($valid, $value, $field, $input) {
    error_log('validate_acf_price_range function called'); // デバッグメッセージ

    // フィールドキーを使って値を取得
    $price_key = 'field_664e967aa2137'; // 実際の「キャンペーン価格」のフィールドキー
    $discount_key = 'field_664e9706a2138'; // 実際の「キャンペーン値引き価格」のフィールドキー

    $price = isset($_POST['acf'][$price_key]) ? $_POST['acf'][$price_key] : '';
    $discount = isset($_POST['acf'][$discount_key]) ? $_POST['acf'][$discount_key] : '';

    error_log('Price: ' . $price); // デバッグメッセージ
    error_log('Discount: ' . $discount); // デバッグメッセージ

    // もしバリデーションが他のフィールドで既に失敗している場合、終了する
    if (!$valid) {
        return $valid;
    }

    // 数値フォーマットを確認し、比較
    if ($price && $discount) {
        if ($discount > $price) {
            error_log('Discount is higher than price'); // デバッグメッセージ
            $valid = 'キャンペーン値引き価格はキャンペーン価格以下でなければなりません。';
        }
    }
    return $valid;
}

// バリデーションフックに登録
add_filter('acf/validate_value/key=field_664e9706a2138', 'validate_acf_price_range', 10, 4);


function change_campaign_posts_per_page($query) {
    if ($query->is_post_type_archive('campaign') && !is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', 2);
    }
}
add_action('pre_get_posts', 'change_campaign_posts_per_page');

function change_campaign_taxonomy_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && is_tax('campaign_cate')) {
        $query->set('posts_per_page', 2);
    }
}
add_action('pre_get_posts', 'change_campaign_taxonomy_posts_per_page');

function custom_excerpt_length($length) {
    return 50; // 抜粋の単語数を設定（例：20単語）
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return '...'; // 抜粋の末尾に表示するテキスト
}
add_filter('excerpt_more', 'custom_excerpt_more');