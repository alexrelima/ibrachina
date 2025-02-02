<?php

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_theme_support('title-tag');
add_theme_support('post-thumbnails'); 

include('inc/post-type-banners.php');

function imaginy_scripts(){
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js?ver=1', false, 1, true );
  wp_enqueue_script( 'jquery' );
  wp_deregister_script( 'wp-embed');
  wp_register_script( 'migrate', 'https://code.jquery.com/jquery-migrate-1.4.1.min.js', array( 'jquery' ), 1, true );
  wp_enqueue_script( 'migrate');
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), 1, true );
  wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), 1, true );
  wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/jquery.mask.min.js', array( 'jquery' ), 1, true );  
  wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox.umd.js', array( 'jquery' ), 1, true );  
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ),  1, true  );


}
add_action( 'wp_enqueue_scripts', 'imaginy_scripts' );



function imaginy_styles(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'imaginy_styles');


add_action('init', 'imaginy_menus' );
function imaginy_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __('Menu Principal'),
      )
    );
}

function wpb_imagelink_setup(){
  $image_set = get_option( 'image_default_link_type' );
  
  if ($image_set !== 'none') {
    update_option('image_default_link_type', 'none');
  }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);


if ( is_admin() ) require_once( TEMPLATEPATH . '/admin_settings.php' );

?>