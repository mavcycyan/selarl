<?php

function pt_equipe_init() {
    $labels = array(
        'name'                  => __( 'Equipe', 'selarl' ),
        'singular_name'         => __( 'Equipe', 'selarl' ),
        'menu_name'             => __( 'Equipe', 'selarl' ),
        'name_admin_bar'        => __( 'Equipe', 'selarl' ),
        'add_new'               => __( 'Add New', 'selarl' ),
        'add_new_item'          => __( 'Add New Equipe', 'selarl' ),
        'new_item'              => __( 'New Equipe', 'selarl' ),
        'edit_item'             => __( 'Edit Equipe', 'selarl' ),
        'view_item'             => __( 'View Equipe', 'selarl' ),
        'all_items'             => __( 'All Equipe', 'selarl' ),
        'search_items'          => __( 'Search Equipe', 'selarl' ),
        'parent_item_colon'     => __( 'Parent Equipe:', 'selarl' ),
        'not_found'             => __( 'No Equipe found.', 'selarl' ),
        'not_found_in_trash'    => __( 'No Equipe found in Trash.', 'selarl' ),
        'featured_image'        => __( 'Equipe Cover Image', 'selarl' ),
        'set_featured_image'    => __( 'Set cover image', 'selarl' ),
        'remove_featured_image' => __( 'Remove cover image', 'selarl' ),
        'use_featured_image'    => __( 'Use as cover image', 'selarl' ),
        'archives'              => __( 'Equipe archives', 'selarl' ),
        'insert_into_item'      => __( 'Insert into Equipe', 'selarl' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Equipe', 'selarl' ),
        'filter_items_list'     => __( 'Filter Equipe list', 'selarl' ),
        'items_list_navigation' => __( 'Equipe list navigation', 'selarl' ),
        'items_list'            => __( 'Equipe list', 'selarl' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'equipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_rest'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'equipe', $args );
}

add_action( 'init', 'pt_equipe_init' );