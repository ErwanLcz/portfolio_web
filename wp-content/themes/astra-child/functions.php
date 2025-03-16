<?php
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-parent-style', get_template_directory_uri() . '/style.css' );
}
function custom_post_type_portfolio() {
    register_post_type('portfolio',
        array(
            'labels'      => array(
                'name'          => __('Portfolio'),
                'singular_name' => __('Réalisation'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail'),
            'rewrite'     => array('slug' => 'portfolio'),
            'taxonomies'  => array('category'),
        )
    );
}
add_action('init', 'custom_post_type_portfolio');
add_filter('use_block_editor_for_post', '__return_false');

?>
