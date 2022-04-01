<?php
   // Register Custom Post Type Portfolio
    function create_portfolio_cpt() {

        $labels = array(
            'name' => _x( 'Portfolios', 'Post Type General Name', 'htmlTowordpress' ),
            'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'htmlTowordpress' ),
            'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'htmlTowordpress' ),
            'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'htmlTowordpress' ),
            'archives' => __( 'Portfolio Archives', 'htmlTowordpress' ),
            'attributes' => __( 'Portfolio Attributes', 'htmlTowordpress' ),
            'parent_item_colon' => __( 'Parent Portfolio:', 'htmlTowordpress' ),
            'all_items' => __( 'All Portfolios', 'htmlTowordpress' ),
            'add_new_item' => __( 'Add New Portfolio', 'htmlTowordpress' ),
            'add_new' => __( 'Add New', 'htmlTowordpress' ),
            'new_item' => __( 'New Portfolio', 'htmlTowordpress' ),
            'edit_item' => __( 'Edit Portfolio', 'htmlTowordpress' ),
            'update_item' => __( 'Update Portfolio', 'htmlTowordpress' ),
            'view_item' => __( 'View Portfolio', 'htmlTowordpress' ),
            'view_items' => __( 'View Portfolios', 'htmlTowordpress' ),
            'search_items' => __( 'Search Portfolio', 'htmlTowordpress' ),
            'not_found' => __( 'Not found', 'htmlTowordpress' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'htmlTowordpress' ),
            'featured_image' => __( 'Featured Image', 'htmlTowordpress' ),
            'set_featured_image' => __( 'Set featured image', 'htmlTowordpress' ),
            'remove_featured_image' => __( 'Remove featured image', 'htmlTowordpress' ),
            'use_featured_image' => __( 'Use as featured image', 'htmlTowordpress' ),
            'insert_into_item' => __( 'Insert into Portfolio', 'htmlTowordpress' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'htmlTowordpress' ),
            'items_list' => __( 'Portfolios list', 'htmlTowordpress' ),
            'items_list_navigation' => __( 'Portfolios list navigation', 'htmlTowordpress' ),
            'filter_items_list' => __( 'Filter Portfolios list', 'htmlTowordpress' ),
        );
        $args = array(
            'label' => __( 'Portfolio', 'htmlTowordpress' ),
            'description' => __( '', 'htmlTowordpress' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-art',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type( 'portfolio', $args );

    }
    add_action( 'init', 'create_portfolio_cpt', 0 );
?>