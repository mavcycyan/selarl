<?php

function tx_clinique_init() {
    $labels = array(
        'name'              => _x( 'Clinique categories', 'taxonomy general name', 'selarl' ),
        'singular_name'     => _x( 'Clinique category', 'taxonomy singular name', 'selarl' ),
        'search_items'      => __( 'Search Clinique categories', 'selarl' ),
        'all_items'         => __( 'All Clinique categories', 'selarl' ),
        'parent_item'       => __( 'Parent Clinique category', 'selarl' ),
        'parent_item_colon' => __( 'Parent Clinique category:', 'selarl' ),
        'edit_item'         => __( 'Edit Clinique category', 'selarl' ),
        'update_item'       => __( 'Update Clinique category', 'selarl' ),
        'add_new_item'      => __( 'Add New Clinique category', 'selarl' ),
        'new_item_name'     => __( 'New Clinique category Name', 'selarl' ),
        'menu_name'         => __( 'Clinique category', 'selarl' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'clinique' ),
    );

    register_taxonomy( 'clinique', array( 'cas-cliniques' ), $args );
}

add_action( 'init', 'tx_clinique_init', 0 );