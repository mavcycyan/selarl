<?php

function pt_articles_init() {
    $labels = array(
        'name'                  => __( 'Articles', 'selarl' ),
        'singular_name'         => __( 'Article', 'selarl' ),
        'menu_name'             => __( 'Articles', 'selarl' ),
        'name_admin_bar'        => __( 'Article', 'selarl' ),
        'add_new'               => __( 'Add New', 'selarl' ),
        'add_new_item'          => __( 'Add New Article', 'selarl' ),
        'new_item'              => __( 'New Article', 'selarl' ),
        'edit_item'             => __( 'Edit Article', 'selarl' ),
        'view_item'             => __( 'View Article', 'selarl' ),
        'all_items'             => __( 'All Articles', 'selarl' ),
        'search_items'          => __( 'Search Articles', 'selarl' ),
        'parent_item_colon'     => __( 'Parent Articles:', 'selarl' ),
        'not_found'             => __( 'No Articles found.', 'selarl' ),
        'not_found_in_trash'    => __( 'No Articles found in Trash.', 'selarl' ),
        'featured_image'        => __( 'Article Cover Image', 'selarl' ),
        'set_featured_image'    => __( 'Set cover image', 'selarl' ),
        'remove_featured_image' => __( 'Remove cover image', 'selarl' ),
        'use_featured_image'    => __( 'Use as cover image', 'selarl' ),
        'archives'              => __( 'Article archives', 'selarl' ),
        'insert_into_item'      => __( 'Insert into Article', 'selarl' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Article', 'selarl' ),
        'filter_items_list'     => __( 'Filter Articles list', 'selarl' ),
        'items_list_navigation' => __( 'Articles list navigation', 'selarl' ),
        'items_list'            => __( 'Articles list', 'selarl' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'articles' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_rest'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'author', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'articles', $args );
}

add_action( 'init', 'pt_articles_init' );