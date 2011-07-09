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



//Custom headers

// gets included in the site header
function header_style() {
    ?><style type="text/css">
        #header {
            background: url(<?php header_image(); ?>);
        }
    </style><?php
}

// gets included in the admin header
function admin_header_style() {
    ?><style type="text/css">
        #heading {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
}

add_custom_image_header('header_style', 'admin_header_style');


//Custom stylesheets
add_editor_style('custom-editor-style.css');

?>