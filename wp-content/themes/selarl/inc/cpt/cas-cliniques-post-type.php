<?php

function pt_cas_cliniques_init() {
    $labels = array(
        'name'                  => __( 'Cas cliniques', 'selarl' ),
        'singular_name'         => __( 'Cas clinique', 'selarl' ),
        'menu_name'             => __( 'Cas cliniques', 'selarl' ),
        'name_admin_bar'        => __( 'Cas clinique', 'selarl' ),
        'add_new'               => __( 'Add New', 'selarl' ),
        'add_new_item'          => __( 'Add New Cas clinique', 'selarl' ),
        'new_item'              => __( 'New Cas clinique', 'selarl' ),
        'edit_item'             => __( 'Edit Cas clinique', 'selarl' ),
        'view_item'             => __( 'View Cas clinique', 'selarl' ),
        'all_items'             => __( 'All Cas cliniques', 'selarl' ),
        'search_items'          => __( 'Search Cas cliniques', 'selarl' ),
        'parent_item_colon'     => __( 'Parent Cas cliniques:', 'selarl' ),
        'not_found'             => __( 'No Cas cliniques found.', 'selarl' ),
        'not_found_in_trash'    => __( 'No Cas cliniques found in Trash.', 'selarl' ),
        'featured_image'        => __( 'Cas clinique Cover Image', 'selarl' ),
        'set_featured_image'    => __( 'Set cover image', 'selarl' ),
        'remove_featured_image' => __( 'Remove cover image', 'selarl' ),
        'use_featured_image'    => __( 'Use as cover image', 'selarl' ),
        'archives'              => __( 'Cas clinique archives', 'selarl' ),
        'insert_into_item'      => __( 'Insert into Cas clinique', 'selarl' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Cas clinique', 'selarl' ),
        'filter_items_list'     => __( 'Filter Cas cliniques list', 'selarl' ),
        'items_list_navigation' => __( 'Cas cliniques list navigation', 'selarl' ),
        'items_list'            => __( 'Cas cliniques list', 'selarl' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cas-cliniques' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'show_in_rest'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'cas-cliniques', $args );
}

add_action( 'init', 'pt_cas_cliniques_init' );