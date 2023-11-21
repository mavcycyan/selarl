<?php

function pt_conseils_init() {
    $labels = array(
        'name'                  => __( 'Conseilss', 'selarl' ),
        'singular_name'         => __( 'Conseils', 'selarl' ),
        'menu_name'             => __( 'Conseilss', 'selarl' ),
        'name_admin_bar'        => __( 'Conseils', 'selarl' ),
        'add_new'               => __( 'Add New', 'selarl' ),
        'add_new_item'          => __( 'Add New Conseils', 'selarl' ),
        'new_item'              => __( 'New Conseils', 'selarl' ),
        'edit_item'             => __( 'Edit Conseils', 'selarl' ),
        'view_item'             => __( 'View Conseils', 'selarl' ),
        'all_items'             => __( 'All Conseilss', 'selarl' ),
        'search_items'          => __( 'Search Conseilss', 'selarl' ),
        'parent_item_colon'     => __( 'Parent Conseilss:', 'selarl' ),
        'not_found'             => __( 'No Conseilss found.', 'selarl' ),
        'not_found_in_trash'    => __( 'No Conseilss found in Trash.', 'selarl' ),
        'featured_image'        => __( 'Conseils Cover Image', 'selarl' ),
        'set_featured_image'    => __( 'Set cover image', 'selarl' ),
        'remove_featured_image' => __( 'Remove cover image', 'selarl' ),
        'use_featured_image'    => __( 'Use as cover image', 'selarl' ),
        'archives'              => __( 'Conseils archives', 'selarl' ),
        'insert_into_item'      => __( 'Insert into Conseils', 'selarl' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Conseils', 'selarl' ),
        'filter_items_list'     => __( 'Filter Conseilss list', 'selarl' ),
        'items_list_navigation' => __( 'Conseilss list navigation', 'selarl' ),
        'items_list'            => __( 'Conseilss list', 'selarl' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'conseils' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_rest'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'conseils', $args );
}

add_action( 'init', 'pt_conseils_init' );