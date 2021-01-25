<?php

function heavy_theme(){

	//CSS
wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css'  );

wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.css'  );

wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css'  );

wp_enqueue_style( 'carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css'  );

wp_enqueue_style( 'popup-min', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"'  );

wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

wp_enqueue_style( 'googleapis', '//fonts.googleapis.com/css?family=Abril+Fatface&display=swap'  );

wp_enqueue_style( 'pacifico', '//fonts.googleapis.com/css?family=Pacifico&display=swap'  );

wp_enqueue_style( 'heavy-style', get_stylesheet_uri() );

//JS

wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20151215', true );

wp_enqueue_script( 'cloudflare', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array('jquery'), '20151215', true );

//wp_enqueue_script( 'ease-scroll', get_template_directory_uri() . '/js/jquery.easeScroll.js', array('jquery'), '20151215', true );

wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '20151215', true );

wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '20151215', true );


wp_enqueue_script( 'custome', get_template_directory_uri() . '/js/custome.js', array('jquery'), '20151215', true );

}

add_action( 'wp_enqueue_scripts', 'heavy_theme' );

function heavy_menu(){ 

	register_nav_menus(array(
		'header' => 'Primary Menu',
		'footer' => 'Footer Menu'
	));

	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

}

add_action('after_setup_theme', 'heavy_menu');

function my_register_sidebars() {
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);



	register_sidebar(
		array(
			'id'            => 'footer-1',
			'name'          => __( 'Footer One' ),
			'description'   => __( 'Drag and Drop here' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	

	register_sidebar(
		array(
			'id'            => 'footer-2',
			'name'          => __( 'Footer Two' ),
			'description'   => __( 'Drag and Drop here' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer-3',
			'name'          => __( 'Footer Three' ),
			'description'   => __( 'Drag and Drop here' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer-4',
			'name'          => __( 'Footer Four' ),
			'description'   => __( 'Drag and Drop here' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'my_register_sidebars' );

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/heavy_post_type.php';
require get_template_directory() . '/inc/heavy-shortcode.php';

function heavy_register_metabox() {

    //page
	add_meta_box("heavy-page-id", "Page Metabox", "wporg_custom_box_html", "page", "normal", "high");

    //post
	add_meta_box("heavy-post-id", "Post Metabox", "wporg_custom_box_html", "post", "normal", "high");

	//Custom Post type
	add_meta_box("heavy-cpt-id", "Service Metabox", "wporg_custom_box_html", "service", "side", "high");
}

add_action("add_meta_boxes", "heavy_register_metabox");


//
 
function wporg_custom_box_html( $post ) {

    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>
 
 <p>
    <span class="prfx-row-title"><?php _e( 'Check if this is a featured post ', 'prfx-textdomain' )?></span>
    <div class="prfx-row-content">
        <label for="featured-checkbox">
            <input type="checkbox" name="featured-checkbox" id="featured-checkbox" value="yes" <?php if ( isset ( $prfx_stored_meta['featured-checkbox'] ) ) checked( $prfx_stored_meta['featured-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured Item', 'prfx-textdomain' )?>
        </label>
 
    </div>
</p>   
 
    <?php
}
 

function prfx_meta_save( $post_id ) {
 
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
if( isset( $_POST[ 'featured-checkbox' ] ) ) {
    update_post_meta( $post_id, 'featured-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'featured-checkbox', 'no' );
}
 
}
add_action( 'save_post', 'prfx_meta_save' );