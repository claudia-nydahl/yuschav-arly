<?php

add_theme_support( "post-thumbnails" );

function yuschav_script_enqueue() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main2.js', array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'yuschav_script_enqueue' );

function yuschav_theme_setup() {
	add_theme_support("menus");

	register_nav_menu( "primary", "Primary Menu" );
	register_nav_menu("secondary", "Secondary Menu");
}

add_action('init', 'yuschav_theme_setup');

function yuschav_widgets_init() {
    register_sidebar( array(
        'name'          => 'home1',
        'id'            => 'widget-home',
        'class'         => 'widgets-area',
        'before_widget' => '',
        'after_widget'  => '',
        'description'   => 'Home page widget',
        'before_title'  => '<h4 class="image-text"><mark>',
        'after_title'   => '</mark></h1>',
    ));

    register_sidebar( array(
        'name'          => 'sidebar1',
        'id'            => 'widget-sidebar',
        'class'         => 'sidebar-area',
        'before_widget' => '',
        'after_widget'  => '',
        'description'   => 'Sidebar widget',
        'before_title'  => '<h1 class="sidebar-text"><mark>',
        'after_title'   => '</mark></h1>',
    ));

    register_sidebar( array(
        'name'          => 'portfolio1',
        'id'            => 'widget-portfolio',
        'class'         => 'portfolio-area',
        'before_widget' => '',
        'after_widget'  => '',
        'description'   => 'Portfolio widget',
        'before_title'  => '<h1 class="image-text">',
        'after_title'   => '</h1>',
    ));
}

add_action( 'widgets_init', 'yuschav_widgets_init');

?>


