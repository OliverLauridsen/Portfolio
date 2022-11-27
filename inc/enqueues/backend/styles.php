<?php
/**
 * Register and load any stylesheets your themes backend requires.
 */
add_action('admin_init', function () {
    wp_enqueue_style('thickbox'); // Used for media uploader
    wp_enqueue_style( 'backend-css-parent', get_template_directory_uri() . "/css/backend.css");
    wp_enqueue_style( 'backend-css', get_stylesheet_directory_uri() . "/css/backend.css");
});