<?php

function naoki_theme_setup() {

  // タイトルタグ
  add_theme_support('title-tag');

  // アイキャッチ画像
  add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'naoki_theme_setup');


function naoki_theme_scripts() {

  wp_enqueue_style(
    'naoki-style',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    '1.0.0'
  );

}

add_action('wp_enqueue_scripts', 'naoki_theme_scripts');