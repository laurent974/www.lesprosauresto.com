<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

wp_enqueue_script(
    'customjs',                                 //slug
    '', //path
    array('jquery'),                                      //dependencies
    false,                                                //version
    true                                                  //footer
);


function my_assets() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/public/js/all.js' );
}

add_action( 'wp_enqueue_scripts', 'my_assets' );
?>
