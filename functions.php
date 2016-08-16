<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

// Supprimer jquery UI

wp_deregister_script( 'jquery-ui-core' );
wp_deregister_script( 'jquery-ui-tab' );
wp_deregister_script( 'jquery-ui-autocomplete' );
wp_deregister_script( 'jquery-ui-accordion' );
wp_deregister_script( 'jquery-ui-autocomplete' );
wp_deregister_script( 'jquery-ui-button' );
wp_deregister_script( 'jquery-ui-datepicker');
wp_deregister_script( 'jquery-ui-dialog' );
wp_deregister_script( 'jquery-ui-draggable' );
wp_deregister_script( 'jquery-ui-droppable' );
wp_deregister_script( 'jquery-ui-mouse' );
wp_deregister_script( 'jquery-ui-position' );
wp_deregister_script( 'jquery-ui-progressbar');
wp_deregister_script( 'jquery-ui-resizable' );
wp_deregister_script( 'jquery-ui-selectable');
wp_deregister_script( 'jquery-ui-slider' );
wp_deregister_script( 'jquery-ui-sortable' );
wp_deregister_script( 'jquery-ui-tabs' );
wp_deregister_script( 'jquery-ui-widget' );

//Supprimer jquery
wp_deregister_script( 'jquery' );
?>
