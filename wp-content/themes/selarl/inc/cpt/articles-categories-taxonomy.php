<?php

function tx_articles_categories_init() {
    $labels = array(
        'name'              => _x( 'Article categories', 'taxonomy general name', 'selarl' ),
        'singular_name'     => _x( 'Article category', 'taxonomy singular name', 'selarl' ),
        'search_items'      => __( 'Search Article categories', 'selarl' ),
        'all_items'         => __( 'All Article categories', 'selarl' ),
        'parent_item'       => __( 'Parent Article category', 'selarl' ),
        'parent_item_colon' => __( 'Parent Article category:', 'selarl' ),
        'edit_item'         => __( 'Edit Article category', 'selarl' ),
        'update_item'       => __( 'Update Article category', 'selarl' ),
        'add_new_item'      => __( 'Add New Article category', 'selarl' ),
        'new_item_name'     => __( 'New Article category Name', 'selarl' ),
        'menu_name'         => __( 'Article category', 'selarl' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'articles-categories' ),
        'show_in_rest' => true,
    );

    register_taxonomy( 'articles-categories', array( 'articles' ), $args );
}

add_action( 'init', 'tx_articles_categories_init', 0 );