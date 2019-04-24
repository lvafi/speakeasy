<?php
/** Setup post types and pages */
function speakeasy_posts_page_setup(){

    add_post_type_support( 'page', 'excerpt' );

}

add_action( 'init', 'speakeasy_posts_page_setup' );

/** Enqueue scripts and styles */
function speakeasy_secondary_scripts() {
  wp_enqueue_style( 'speakeasy-header-style', get_template_directory_uri() . '/css/header.css' );
  wp_enqueue_style( 'speakeasy-home-style', get_template_directory_uri() . '/css/home.css' );
  wp_enqueue_style( 'speakeasy-fonts-style', get_template_directory_uri() . '/css/fonts.css' );

  wp_enqueue_script( 'speakeasy-index', get_template_directory_uri() . '/js/index.js' );
}
add_action( 'wp_enqueue_scripts', 'speakeasy_secondary_scripts' );


/* this chunk of code remove html margin that apparently is located inside index*/
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
?>