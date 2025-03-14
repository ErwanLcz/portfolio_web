<?php
require_once get_stylesheet_directory() . '/cpt-portfolio.php';

function my_child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');
