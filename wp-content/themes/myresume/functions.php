<?php

// Setup

// Include
include (get_template_directory() . '/includes/front/enqueue.php');
include (get_template_directory() . '/includes/setup.php');
include (get_template_directory() . '/includes/widgets.php');
include (get_template_directory() . '/includes/theme-customizer.php');
include (get_template_directory() . '/includes/customizer/social.php');
include (get_template_directory() . '/includes/dompdf.php');


// Hooks
add_action('wp_enqueue_scripts', 'ju_enqueue');
add_action('after_setup_theme', 'ju_setup_theme');
add_action('widgets_init', 'ju_widgets');
add_action('customize_register', 'ju_customize_register');

// Filters
add_filter( 'nav_menu_link_attributes', 'add_link_atts');
add_filter ( 'nav_menu_css_class', 'li_item_class', 10, 4 );

//define( 'WPCF7_LOAD_CSS', false );



