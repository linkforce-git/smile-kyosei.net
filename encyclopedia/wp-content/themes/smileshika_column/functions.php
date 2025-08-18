<?php

// 存在しないページにアクセスした場合にテンプレートを適用しない
add_action('template_redirect', function(){
    if (is_404()) {
        header('HTTP/1.1 404 Not Found');
        exit();
    }
});
// 存在しないページにアクセスした場合にURLを自動補完しない
add_action('redirect_canonical', function($redirect_url){
    if (is_404()) {
        return false;
    }
    return $redirect_url;
});

// 年別のアーカイブページを表示しない
add_filter('date_rewrite_rules', function($date_rewrite) {
    if ($date_rewrite) {
        foreach ($date_rewrite as $key => $query) {
            if (! strpos($query, '&monthnum=')) {
                unset($date_rewrite[$key]);
            }
        }
    }
    return $date_rewrite;
});

// ログイン時でも一覧に非公開記事を表示しない
add_filter('pre_get_posts', function(){
    global $wp_query;
    if (is_front_page() && is_home()) {
        $wp_query->query_vars['post_status'] = 'publish';
    }
});

// wp_titleの余計なスペースを削除
add_filter('wp_title', function($title, $sep, $seplocation){
    return str_replace(' '.$sep.' ', $sep, $title);
}, 10, 3);

// head内のコードを整理
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// (oEmbed関連)
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
// (絵文字関連)
add_filter('emoji_svg_url', '__return_false');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles',  'print_emoji_styles');
//
add_action('wp_enqueue_scripts', function(){
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
});

// RSSフィード配信を停止
remove_action('do_feed_rdf', 'do_feed_rdf');
remove_action('do_feed_rss', 'do_feed_rss');
remove_action('do_feed_rss2', 'do_feed_rss2');
remove_action('do_feed_atom', 'do_feed_atom');

// 管理画面の投稿一覧にURLを表示
add_filter('manage_posts_columns', function($columns){
    $columns['url'] = 'URL';
    return $columns;
});
add_filter('manage_posts_custom_column', function($column_name, $post_id){
    if ($column_name === 'url') {
        $url = get_permalink($post_id);
        echo '<a href="'.esc_attr($url).'">'.esc_html($url).'</a>';
    }
}, 10, 2);

// アイキャッチをテーマで有効にする
add_theme_support('post-thumbnails');

// 管理画面の投稿一覧の日時表示をカスタマイズ
add_filter('post_date_column_time', function($h_time, $post){
    return date('Y-m-d H:i', strtotime($post->post_date));
}, 10, 2);

// エディタ用スタイルを適用
add_theme_support('editor-styles');
add_action('admin_init', function(){
    add_editor_style();
});
add_action('admin_enqueue_scripts', function(){
    wp_enqueue_style('yakuhanmp_s', 'https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanmp_s.min.css', array(), null);
});

// 記事中にpartsディレクトリのPHPファイルを読み込むショートコード
add_shortcode('get_php_part', function($args){
    extract(shortcode_atts(array('file' => 'default'), $args));
    ob_start();
    include(__DIR__."/parts/$file.php");
    return ob_get_clean();
});

// ログイン時に古い自動下書きを削除
add_action('wp_login', function($user_login, $user){
    wp_delete_auto_drafts();
}, 10, 2);

// sitemap.xmlの不要なURLを削除
add_filter('wp_sitemaps_add_provider', function($provider, $name){
    if ($name === 'posts') {
        return $provider;
    }
    return false;
}, 10, 2);
add_filter('wp_sitemaps_post_types', function($post_types){
    unset($post_types['page']);
    return $post_types;
});

// 検索結果
function search_filter($query) {
  if ($query -> is_search) {
    $query -> set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts', 'search_filter');

// 検索結果のハイライト
function highlight_search_results($content) {
    if (!is_admin() && is_search() && is_main_query()) {
        $keys = implode('|', explode(' ', get_search_query()));
        $content = preg_replace('/'. $keys .'/iu', '<mark>$0</mark>', $content);
    }

    return $content;
}

add_filter('the_title', 'highlight_search_results');
add_filter('the_excerpt', 'highlight_search_results');

// 管理者以外の管理画面のカスタマイズ
if (! current_user_can('administrator')) {
    // ログイン直後のページを「投稿」に変更
    add_filter('login_redirect', function($redirect_to, $requested_redirect_to, $user) {
        if ($requested_redirect_to === '') {
            return admin_url('edit.php');
        }
        return $redirect_to;
    }, 10, 3);

    // 本体の更新通知を非表示
    add_filter("pre_site_transient_update_core", "__return_null");

    // 表示オプションを非表示、カテゴリー選択の整形
    /* add_action('admin_head', function(){
        echo '<style type="text/css">'.
            '#contextual-help-link-wrap,#screen-options-link-wrap,#category-tabs,#category-adder{display:none;}'.
            '#category-all{max-height:none;border:none;padding:0;}#categorychecklist{margin:0;}'.
        '</style>'.PHP_EOL;
    }); */

    // 不要なプロフィール項目を非表示
    add_action('admin_print_styles', function(){
        echo '<style type="text/css">'.
            '#your-profile h2,'.
            '#your-profile .user-rich-editing-wrap,'.
            '#your-profile .user-comment-shortcuts-wrap,'.
            '#your-profile .show-admin-bar,'.
            '#your-profile .user-first-name-wrap,'.
            '#your-profile .user-last-name-wrap,'.
            '#your-profile .user-nickname-wrap,'.
            '#your-profile .user-display-name-wrap,'.
            '#your-profile .user-url-wrap,'.
            '#your-profile .user-description-wrap,'.
            '#application-passwords-section{'.
                'display:none;'.
            '}'.
        '</style>'.PHP_EOL;
    });

    // 不要なメニュー項目を削除(サイドバー)
    add_action('admin_menu', function(){
        remove_menu_page('index.php');
        remove_menu_page('edit-comments.php');
        remove_menu_page('profile.php');
        remove_menu_page('tools.php');
    });

    // 不要なメニュー項目を削除(管理バー)
    add_action('admin_bar_menu', function($wp_admin_bar) {
        $wp_admin_bar->remove_menu('wp-logo');
        $wp_admin_bar->remove_menu('comments');
        $wp_admin_bar->remove_menu('new-content');
        $wp_admin_bar->remove_menu('user-info');
    }, 1000);

    // クイック編集を削除
    /* add_filter("post_row_actions", function($actions, $post) {
        unset($actions['inline hide-if-no-js']);
        return $actions;
    }, 0, 2); */

    // 不要な投稿ウィジェットを削除
    /* add_action('admin_menu', function(){
        $post_type = ['post'];
        remove_meta_box('tagsdiv-post_tag', $post_type, 'normal');
        remove_meta_box('postexcerpt', $post_type, 'normal');
        remove_meta_box('trackbacksdiv', $post_type, 'normal');
        remove_meta_box('postcustom', $post_type, 'normal');
        remove_meta_box('commentstatusdiv', $post_type, 'normal');
        remove_meta_box('commentsdiv', $post_type, 'normal');
    }); */
}
