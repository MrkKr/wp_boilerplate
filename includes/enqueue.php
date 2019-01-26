<?php

// Load scripts
function load_css_js() {
	wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/css/style.min.css', false, null);
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/dist/js/script.min.js', array('jquery'), null, true);
    wp_enqueue_script('ajax-scripts', get_template_directory_uri() . '/dist/js/ajax.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'load_css_js', 100);