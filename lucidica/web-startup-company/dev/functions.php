<?php
/**
 * Created by PhpStorm.
 * User: lykhachov
 * Date: 9/3/18
 * Time: 12:31
 */

get_template_part('theme-parts/theme-options');
get_template_part('theme-parts/scripts');
get_template_part('theme-parts/additionals');

  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');

add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

  wp_localize_script('main script', 'myajax',
      array(
          'url' => admin_url('admin-ajax.php')
      )
  );

}

add_action('wp_footer', 'my_action_javascript', 99);

function my_action_javascript() {

}

add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action('wp_ajax_nopriv_my_action', 'my_action_callback');

function my_action_callback() { ?>
  <!-- <script>console.log(<?php //print_r($_POST); ?>);</script> -->
  <?php

  $name = htmlspecialchars(trim($_POST['name']));
  $email = htmlspecialchars(trim($_POST['email']));
  $telephone = htmlspecialchars(trim($_POST['telephone']));
  $message = htmlspecialchars(trim($_POST['message']));

  $options = get_option('sample_theme_options');
//    echo $options['shortcodes_label']
  $to = $options['admin_email'];
//	$to = "nikolay.nychyporchuk@lucidica.com";


  $subject = "Contact us form";

  $message = "Hello, <b>$name</b> sent a message for you.<br>
		Telephone number: $telephone <br>
		Email: $email <br>
	 	Message text: $message.<br>";

  $headers= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: Contact us form <$email>";

  mail($to, $subject, $message, $headers);
//	$success = mail($to, $subject, $message, $headers);

//	if(mail($to, $subject, $message, $headers))
//      {
//      echo "<script>alert('Mail was sent !');</script>";
//      echo "<script>document.location.href='index.php'</script>";
//      }
//      else
//      {
//      echo "<script>alert('Mail was not sent. Please try again later');</script>";
//      }

  wp_die();
}


if( WP_DEBUG && WP_DEBUG_DISPLAY && (defined('DOING_AJAX') && DOING_AJAX) ){
  @ ini_set( 'display_errors', 1 );
}
add_theme_support( 'post-thumbnails' );
// common post type example
if( ! function_exists( 'work_create_post_type' ) ) :
  function work_create_post_type() {
    $labels = array(
        'name' => 'Our works',
        'singular_name' => 'work',
        'add_new' => 'Add work',
        'all_items' => 'All works',
        'add_new_item' => 'Add work',
        'edit_item' => 'Edit work',
        'new_item' => 'New work',
        'view_item' => 'View works',
        'search_items' => 'Search works',
        'not_found' => 'No works found',
        'not_found_in_trash' => 'No works found in trash',
        'parent_item_colon' => 'Parent work'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'thumbnail',
        ),
        'menu_position' => 5,
        'exclude_from_search' => true
    );
    register_post_type( 'work', $args );
  }
  add_action( 'init', 'work_create_post_type' );
  endif; // end of function_exists()
