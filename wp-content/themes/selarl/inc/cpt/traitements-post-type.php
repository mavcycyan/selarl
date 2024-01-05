<?php

function pt_traitements_init() {
    $labels = array(
        'name'                  => __( 'Traitements', 'selarl' ),
        'singular_name'         => __( 'Traitement', 'selarl' ),
        'menu_name'             => __( 'Traitements', 'selarl' ),
        'name_admin_bar'        => __( 'Traitement', 'selarl' ),
        'add_new'               => __( 'Add New', 'selarl' ),
        'add_new_item'          => __( 'Add New Traitement', 'selarl' ),
        'new_item'              => __( 'New Traitement', 'selarl' ),
        'edit_item'             => __( 'Edit Traitement', 'selarl' ),
        'view_item'             => __( 'View Traitement', 'selarl' ),
        'all_items'             => __( 'All Traitements', 'selarl' ),
        'search_items'          => __( 'Search Traitements', 'selarl' ),
        'parent_item_colon'     => __( 'Parent Traitements:', 'selarl' ),
        'not_found'             => __( 'No Traitements found.', 'selarl' ),
        'not_found_in_trash'    => __( 'No Traitements found in Trash.', 'selarl' ),
        'featured_image'        => __( 'Traitement Cover Image', 'selarl' ),
        'set_featured_image'    => __( 'Set cover image', 'selarl' ),
        'remove_featured_image' => __( 'Remove cover image', 'selarl' ),
        'use_featured_image'    => __( 'Use as cover image', 'selarl' ),
        'archives'              => __( 'Traitement archives', 'selarl' ),
        'insert_into_item'      => __( 'Insert into Traitement', 'selarl' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Traitement', 'selarl' ),
        'filter_items_list'     => __( 'Filter Traitements list', 'selarl' ),
        'items_list_navigation' => __( 'Traitements list navigation', 'selarl' ),
        'items_list'            => __( 'Traitements list', 'selarl' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array( 'slug'=>'traitements/%traitement%', 'with_front' => false ),
        'has_archive'           => true,
        'menu_position'         => 8,
        'show_in_rest'          => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'traitements', $args );
}

add_action( 'init', 'pt_traitements_init' );



function tx_traitement_category_permalink( $permalink, $post ){
    if( strpos($permalink, '%traitement%') === FALSE )
        return $permalink;

    $terms = get_the_terms($post, 'traitement');

    if( ! is_wp_error($terms) && !empty($terms) && is_object($terms[0]) ){
        $taxonomy_slug = $terms[0]->slug;
    }else{
        $taxonomy_slug = '';
    }

    return str_replace('%traitement%', $taxonomy_slug, $permalink );
}

add_filter('post_type_link', 'tx_traitement_category_permalink', 1, 2);