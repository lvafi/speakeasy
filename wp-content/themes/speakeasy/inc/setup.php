<?php
/** Setup post types and pages */
function speakeasy_posts_page_setup(){

    add_post_type_support( 'page', 'excerpt' );

}

add_action( 'init', 'speakeasy_posts_page_setup' );

/** Enqueue scripts and styles */
function speakeasy_secondary_scripts() {
  wp_enqueue_style( 'speakeasy-about-style', get_template_directory_uri() . '/css/header.css' );
}
add_action( 'wp_enqueue_scripts', 'speakeasy_secondary_scripts' );
?>