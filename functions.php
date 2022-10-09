<?php
// ページごとのタイトル自動出力
function neko_theme_setup() {
    add_theme_support('title-tag');
}

// neko_theme_setupを、after_setup_themeのタイミングで実行
add_action('after_setup_theme', 'neko_theme_setup');

// テーマ独自のJavascript・CSS読み込み
function neko_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('kuroneko-theme-common',
                       get_template_directory_uri() . '/assets/js/theme-common.js',
                       array(),
                       '1.0.0',
                       true
                    );
}

add_action('wp_enqueue_scripts', 'neko_enqueue_scripts');
?>