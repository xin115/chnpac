<?php
// Theme setup
function novo_us_theme_setup() {
    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'novous' ),
    ) );

    // Add theme support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add theme support for title tag
    add_theme_support( 'title-tag' );

    // Add theme support for HTML5
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for automatic feed links
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'novo_us_theme_setup' );

// Enqueue scripts and styles
function novo_us_theme_scripts() {
    // Enqueue main stylesheet (style.css - for theme metadata and basic structural CSS if any)
    wp_enqueue_style( 'novo-us-style', get_stylesheet_uri() );

    // Enqueue custom theme stylesheet (assets/css/theme.css - for all theme-specific styles)
    // All custom CSS for the theme should primarily go into assets/css/theme.css
    wp_enqueue_style( 'novo-us-theme-style', get_template_directory_uri() . '/assets/css/theme.css', array('novo-us-style'), '0.1' );

    // Enqueue custom theme JavaScript file (assets/js/theme.js - for all theme-specific JavaScript)
    // All custom JS for the theme should primarily go into assets/js/theme.js
    wp_enqueue_script( 'novo-us-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ), '0.1', true );

    // If you have a navigation script that needs to be enqueued for specific situations.
    // For example, if your main menu needs JS to be responsive.
    // if ( has_nav_menu( 'primary' ) ) {
    //     wp_enqueue_script( 'novo-us-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '0.1', true );
    // }
}
add_action( 'wp_enqueue_scripts', 'novo_us_theme_scripts' );

// Add defer attribute to scripts for better performance (optional)
function novo_us_add_defer_attribute( $tag, $handle ) {
    // Add defer attribute to specific scripts if needed, e.g., theme.js
    if ( 'novo-us-theme-js' === $handle ) {
        $tag = str_replace( ' src', ' defer="defer" src', $tag );
    }
    return $tag;
}
// add_filter( 'script_loader_tag', 'novo_us_add_defer_attribute', 10, 2 );

?>
