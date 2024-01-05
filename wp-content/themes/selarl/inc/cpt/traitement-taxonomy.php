<?php

function tx_traitement_init() {
    $labels = array(
        'name'              => _x( 'Traitement categories', 'taxonomy general name', 'selarl' ),
        'singular_name'     => _x( 'Traitement category', 'taxonomy singular name', 'selarl' ),
        'search_items'      => __( 'Search Traitement categories', 'selarl' ),
        'all_items'         => __( 'All Traitement categories', 'selarl' ),
        'parent_item'       => __( 'Parent Traitement category', 'selarl' ),
        'parent_item_colon' => __( 'Parent Traitement category:', 'selarl' ),
        'edit_item'         => __( 'Edit Traitement category', 'selarl' ),
        'update_item'       => __( 'Update Traitement category', 'selarl' ),
        'add_new_item'      => __( 'Add New Traitement category', 'selarl' ),
        'new_item_name'     => __( 'New Traitement category Name', 'selarl' ),
        'menu_name'         => __( 'Traitement category', 'selarl' ),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest'          => true,
        'rewrite'               => array(
            'slug'          => 'traitements',
            'with_front'    => true,
        ),
    );

    register_taxonomy( 'traitement', array( 'traitements' ), $args );
}

add_action( 'init', 'tx_traitement_init', 0 );
