<?php

function pt_faq_init() {
    $labels = array(
        'name'                  => __( 'FAQs', 'selarl' ),
        'singular_name'         => __( 'FAQ', 'selarl' ),
        'menu_name'             => __( 'FAQs', 'selarl' ),
        'name_admin_bar'        => __( 'FAQ', 'selarl' ),
        'add_new'               => __( 'Add New', 'selarl' ),
        'add_new_item'          => __( 'Add New FAQ', 'selarl' ),
        'new_item'              => __( 'New FAQ', 'selarl' ),
        'edit_item'             => __( 'Edit FAQ', 'selarl' ),
        'view_item'             => __( 'View FAQ', 'selarl' ),
        'all_items'             => __( 'All FAQs', 'selarl' ),
        'search_items'          => __( 'Search FAQs', 'selarl' ),
        'parent_item_colon'     => __( 'Parent FAQs:', 'selarl' ),
        'not_found'             => __( 'No FAQs found.', 'selarl' ),
        'not_found_in_trash'    => __( 'No FAQs found in Trash.', 'selarl' ),
        'featured_image'        => __( 'FAQ Cover Image', 'selarl' ),
        'set_featured_image'    => __( 'Set cover image', 'selarl' ),
        'remove_featured_image' => __( 'Remove cover image', 'selarl' ),
        'use_featured_image'    => __( 'Use as cover image', 'selarl' ),
        'archives'              => __( 'FAQ archives', 'selarl' ),
        'insert_into_item'      => __( 'Insert into FAQ', 'selarl' ),
        'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'selarl' ),
        'filter_items_list'     => __( 'Filter FAQs list', 'selarl' ),
        'items_list_navigation' => __( 'FAQs list navigation', 'selarl' ),
        'items_list'            => __( 'FAQs list', 'selarl' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'faq' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_rest'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'faq', $args );
}

add_action( 'init', 'pt_faq_init' );