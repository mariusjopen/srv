<?php

$theme = wp_get_theme();
$ver = $theme->get('Version');

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'show_admin_bar', '__return_false' );

add_filter( 'acf_the_content', 'wp_make_content_images_responsive' );

function add_theme_scripts(){
	global $ver;
	wp_enqueue_script('app', get_template_directory_uri()."/js/vendors/jquery.scrollify.min.js", array( 'jquery' ), $ver);
	wp_enqueue_script('app-combine', get_template_directory_uri()."/js/min/combine.min.js", array( 'jquery' ), $ver);
  wp_enqueue_style('app-style', get_template_directory_uri()."/css/min/combine.min.css", array(), $ver);
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


?>
