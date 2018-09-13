<?php
  /**
   * Created by PhpStorm.
   * User: lykhachov
   * Date: 9/3/18
   * Time: 12:31
   */
  function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'libs styles', get_template_directory_uri() . '/css/style-libs.css');
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css');

    // echo (get_template_directory_uri());
    wp_enqueue_script( 'libs scripts', get_template_directory_uri() . '/js/libs.js');
    wp_enqueue_script( 'main script', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script( 'ajax script', get_template_directory_uri() . '/ajax_request.js');
    // wp_enqueue_script( 'adaptive menu', get_template_directory_uri() . '/js/adaptive_menu.js');

  }
  add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
