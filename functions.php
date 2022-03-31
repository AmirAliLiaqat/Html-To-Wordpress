<?php
/**
 * Functions File.
 *
 * @package htmlTowordpress
*/

/************** Function using for adding theme supports **************/
function htmlTowordpress_theme_setup() {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('home-featured', 640, 400, array('center', 'center'));

    add_theme_support('automatic-feed-links');
    
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'htmlTowordpress' )
    ) );
}
add_action('after_setup_theme', 'htmlTowordpress_theme_setup');

/************** Function using for adding styles and scripts links **************/
function htmlTowordpress_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');

    wp_enqueue_script('htmlTowordpress-browser', get_template_directory_uri() . '/assets/js/browser.min.js');
    wp_enqueue_script('htmlTowordpress-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js');
    wp_enqueue_script('htmlTowordpress-util', get_template_directory_uri() . '/assets/js/util.js');
    wp_enqueue_script('htmlTowordpress-main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'htmlTowordpress_scripts');


?>