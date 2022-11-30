<?php
/**
 * Register and load any scripts your themes frontend requires.
 * !!!!! Remember to add the forth parameter to true so the link will be added in the footer!!!!!
 * Remember to use the min file when you go live with the project
 */

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script( 'bootstrap-5-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'frontend-js-parent', get_template_directory_uri() . '/js/frontend.js', array('jquery'), null, true );
    wp_enqueue_script( 'frontend-js', get_stylesheet_directory_uri() . '/js/frontend.js', array('jquery'), null, true );
    wp_enqueue_script( 'dragdealer', get_stylesheet_directory_uri() . '/js/dragdealer.js', array(), null, true );
    wp_enqueue_script( 'classie', get_stylesheet_directory_uri() . '/js/classie.js', array(), null, true );
    wp_enqueue_script( 'dragslideshow', get_stylesheet_directory_uri() . '/js/dragslideshow.js', array(), null, true );
    wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.custom.js', array(), null, false );
    wp_localize_script( 'frontend-js', 'RootUrl', array( 'url' => get_stylesheet_directory_uri()) );
    wp_localize_script( 'frontend-js', 'AjaxMethodsUrl',  [admin_url( 'admin-ajax.php' )] );
});