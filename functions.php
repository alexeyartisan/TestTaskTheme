<?php

function tt_suppurt() {

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 
        'html5', [
        'search-form', 
        'gallery', 
        'caption', 
        'style', 
        'script'
    ]);
    
    add_theme_support( 
        'custom-logo', [
        'width'       => 180,
        'height'      => 50,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

}
add_action( 'after_setup_theme', 'tt_suppurt' );

function tt_nav_menus() {
  
    register_nav_menus([
      'tt-primary-menu' => esc_html__( 'Primary Menu', 'tt' ),
    ]);

}
add_action( 'init', 'tt_nav_menus' );

function tt_scripts() {
    wp_enqueue_style( 'tt-style', get_template_directory_uri() . '/dist/site.css', array(), wp_get_theme()->get( 'Version' ), false );
    wp_enqueue_style( 'tt-opensans', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap', wp_get_theme()->get( 'Version' ), false );

    wp_enqueue_script( 'tt-script', get_template_directory_uri() . '/dist/bundle.js', array('jquery'), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'tt_scripts' );

function tt_post_type_news() {

    $supports = array(
        'title',
        'editor',
        'excerpt',
        'custom-fields'
    );
    
    $labels = array(
        'name' => _x('News', 'plural'),
        'singular_name' => _x('News', 'singular'),
        'menu_name' => _x('News', 'admin menu'),
        'name_admin_bar' => _x('News', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New news'),
        'new_item' => __('New news'),
        'edit_item' => __('Edit news'),
        'view_item' => __('View news'),
        'all_items' => __('All news'),
        'search_items' => __('Search news'),
        'not_found' => __('No news found.')
    );
    
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'news'),
        'has_archive' => true,
        'hierarchical' => false
    );
    register_post_type('news', $args);
}
add_action('init', 'tt_post_type_news');

function tt_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'tt_excerpt_more');