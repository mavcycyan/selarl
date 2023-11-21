<?php

function tx_faq_categories_init() {
    $labels = array(
        'name'              => _x( 'FAQ categories', 'taxonomy general name', 'selarl' ),
        'singular_name'     => _x( 'FAQ category', 'taxonomy singular name', 'selarl' ),
        'search_items'      => __( 'Search FAQ categories', 'selarl' ),
        'all_items'         => __( 'All FAQ categories', 'selarl' ),
        'parent_item'       => __( 'Parent FAQ category', 'selarl' ),
        'parent_item_colon' => __( 'Parent FAQ category:', 'selarl' ),
        'edit_item'         => __( 'Edit FAQ category', 'selarl' ),
        'update_item'       => __( 'Update FAQ category', 'selarl' ),
        'add_new_item'      => __( 'Add New FAQ category', 'selarl' ),
        'new_item_name'     => __( 'New FAQ category Name', 'selarl' ),
        'menu_name'         => __( 'FAQ category', 'selarl' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'faq-categories' ),
    );

    register_taxonomy( 'faq-categories', array( 'faq' ), $args );
}

add_action( 'init', 'tx_faq_categories_init', 0 );