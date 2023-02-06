<?php
function gwb_register_faculty_type() {
    $labels = array(
        'name' => __( 'Faculty Members', GWBPATH),
        'singular_name' => __('Faculty', GWBPATH),
        'featured_image' => __('Faculty Photo', GWBPATH),
        'set_featured_image' => __( 'Set Faculty Photo', GWBPATH),
        'remove_featured_image' => __( 'Remove Photo', GWBPATH),
        'use_featured_image' => __( 'Use Photo', GWBPATH),
        'archives' => __('Faculty' , GWBPATH),
        'add_new' => __('Add New Faculty' , GWBPATH),
        'add_new_item' => __('Add New Faculty' , GWBPATH),
        'edit_item' => __('Edit Faculty' , GWBPATH),
        'all_items' => __('All Faculty' , GWBPATH),

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'delete_with_user' => false,
        'exclude_from_search' => false,
        'rewrite' => array(
            'slug' => 'Faculty-and-Research',
            'has_front' => true
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
    );

    register_post_type( 'faculty', $args);
}