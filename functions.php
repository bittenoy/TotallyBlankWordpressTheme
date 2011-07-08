<?php

//Enable sidebar for widgets
if ( function_exists('register_sidebar') )
    register_sidebar();

//Enable changing background
add_custom_background();

//Custom menu(s)
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}

add_action( 'init', 'register_my_menus' );


?>