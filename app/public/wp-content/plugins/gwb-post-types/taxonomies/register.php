<?php
function gwb_register_facultyType_taxonomy() {
    $labels = array(
        'name' => __('Faculty Type', GWBDOMAIN),
        'singular_name' => __( 'Faculty Type', GWBDOMAIN),
        'add_new_item' => __('Add New Type', GWBDOMAIN),
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_admin_column' => true,
      'show_in_quick_edit' => true,
      "show_in_rest" => true,
      'hierarchical' => true,
      'rewrite' => array('hierarchical' => true, 'has_front' => true)  
    );

    $post_types = array('faculty');

    register_taxonomy('facultytype', $post_types, $args);
}

