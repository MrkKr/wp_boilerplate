<?php

// Load scripts
function load_css_js() {
	wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/style.css', false, null);
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/dist/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'load_css_js', 100);