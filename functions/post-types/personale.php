<?php 

add_action( 'init', 'smamo_add_medarbejder' );

function smamo_add_medarbejder() {
	register_post_type( 'medarbejder', array(
		
        'menu_icon' 		 => 'dashicons-businessman',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'medarbejder' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 25,
		'supports'           => array( 'title', 'thumbnail'),
        'labels'             => array(   
            'name'               => _x( 'Personale', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Personale', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Personale', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Personale', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'person', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny person', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se person', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find person', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny person.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}