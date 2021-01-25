<?php
function heavy_customize_register($wp_customize){

	$wp_customize->add_panel( 'heavy_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Topbar Settings'),

	) );

	$wp_customize->add_section('heavy_text_scheme', array(
		'title'    => __('Social Icon'),
		'description' => '',
		'priority' => 120,
		'panel' => 'heavy_panel_id'
	));
//

	$wp_customize->add_setting('heavy_fb_url', array(
		//'default' => '#',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw'
	));

	$wp_customize->add_control('heavy_fb_url', array(
		'label'      => __('Facebook'),
		'section'    => 'heavy_text_scheme',
	));

//
    $wp_customize->add_setting('heavy_twitter_url', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
 
    ));
 
    $wp_customize->add_control('heavy_twitter_url', array(
        'label'      => __('Twitter'),
        'section'    => 'heavy_text_scheme',
    ));
//


    $wp_customize->add_setting('heavy_linkedin_url', array(
    	'capability'     => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url_raw'

    ));

    $wp_customize->add_control('heavy_linkedin_url', array(
    	'label'      => __('Linked In'),
    	'section'    => 'heavy_text_scheme',
    ));
//
    $wp_customize->add_setting('heavy_instagram_url', array(
    	'capability'     => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url_raw'

    ));

    $wp_customize->add_control('heavy_instagram_url', array(
    	'label'      => __('Instagram'),
    	'section'    => 'heavy_text_scheme',
    ));


    //

    $wp_customize->add_section('phone_text_scheme', array(
		'title'    => __('Contact info'),
		'description' => '',
		'priority' => 120,
		'panel' => 'heavy_panel_id'
	));

	$wp_customize->add_setting('heavy_phone_num', array(
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'absint'

	));

	$wp_customize->add_control('heavy_phone_num', array(
		'label'      => __('Contact Number'),
		'section'    => 'phone_text_scheme',
	));

	//
		$wp_customize->add_setting('heavy_time', array(
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'wp_filter_nohtml_kses'

	));

	$wp_customize->add_control('heavy_time', array(
		'label'      => __('Your Time'),
		'section'    => 'phone_text_scheme',
	));
//
	$wp_customize->add_setting('heavy_email', array(
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_email'

	));

	$wp_customize->add_control('heavy_email', array(
		'label'      => __('Email'),
		'section'    => 'phone_text_scheme',
	));

}

add_action('customize_register', 'heavy_customize_register');