<?php
/**
 * Register and load any stylesheets your themes frontend requires.
 * Remember to use the min file when you go live with the project
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style( 'bootstrap-5-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'frontend-css-parent', get_template_directory_uri() . '/css/frontend.css');
    wp_enqueue_style( 'frontend-css', get_stylesheet_directory_uri() . '/css/frontend.css');
});