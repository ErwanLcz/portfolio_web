<?php
function create_portfolio_cpt() {
    $args = array(
        'label' => __('Portfolio', 'textdomain'),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'taxonomies' => array('category')
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt');
