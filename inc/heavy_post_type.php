<?php
//Custom Post type

function heavytheme_post_types(){
	register_post_type('slider', array(
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'has_archive'=> true,
		'public' => true,
		'labels' => array(
			'name' => 'Slider',
			'add_new_item' => 'Add New Slider',
			'edit_item' => 'Edit Slider',
			'all_items' => 'All Slider',
			'singular_name' => 'Slider'
		),

		'menu_icon' => 'dashicons-format-gallery',

	));

	register_taxonomy(
		'slider-category',
		'slider',
		array(
			'label' => __( 'Categories' ),
			'rewrite' => array( 'slug' => 'slider-category' ),
			'hierarchical' => true,
			'show_admin_column' => true,
		)
	);


//Another CPT
	register_post_type('service', array(
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'has_archive'=> true,
		'public' => true,
		'labels' => array(
			'name' => 'Service',
			'add_new_item' => 'Add New service',
			'edit_item' => 'Edit service',
			'all_items' => 'All service',
			'singular_name' => 'service'
		),

		'menu_icon' => 'dashicons-admin-tools',

	));

	register_taxonomy(
		'service-category',
		'service',
		array(
			'label' => __( 'Categories' ),
			'rewrite' => array( 'slug' => 'service-category' ),
			'hierarchical' => true,
			'show_admin_column' => true,
		)
	);


	//Another CPT
	register_post_type('gallery', array(
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'has_archive'=> true,
		'public' => true,
		'labels' => array(
			'name' => 'Gallery',
			'add_new_item' => 'Add New gallery',
			'edit_item' => 'Edit gallery',
			'all_items' => 'All gallery',
			'singular_name' => 'gallery'
		),

		'menu_icon' => 'dashicons-images-alt2',

	));

	register_taxonomy(
		'gallery-category',
		'gallery',
		array(
			'label' => __( 'Categories' ),
			'rewrite' => array( 'slug' => 'gallery-category' ),
			'hierarchical' => true,
			'show_admin_column' => true,
		)
	);

		//Another CPT
	register_post_type('review', array(
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'has_archive'=> true,
		'public' => true,
		'labels' => array(
			'name' => 'Reviews',
			'add_new_item' => 'Add New review',
			'edit_item' => 'Edit review',
			'all_items' => 'All review',
			'singular_name' => 'review'
		),

		'menu_icon' => 'dashicons-format-chat',

	));

	register_taxonomy(
		'review-category',
		'review',
		array(
			'label' => __( 'Categories' ),
			'rewrite' => array( 'slug' => 'category' ),
			'hierarchical' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'show_ui' => true,
		)
	);


}


add_action( 'init', 'heavytheme_post_types' );