<?php

function boilerplate_load_assets() {
  wp_enqueue_style('stylecss', get_theme_file_uri('style.css'));
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.0.min.js');
  wp_enqueue_script('ourslickjs', get_theme_file_uri('/assets/slick.min.js'));
  wp_enqueue_style('slickcss', get_theme_file_uri('/assets/slick.css'));
  wp_enqueue_style('slickthemecss', get_theme_file_uri('/assets/slick-theme.css'));
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('ourfonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css');
  wp_enqueue_style('ourall', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
  
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');