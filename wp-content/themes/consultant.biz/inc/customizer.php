<?php
/**
 * businnesdrive Theme Customizer
 *
 * @package businnesdrive
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function businnesdrive_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'businnesdrive_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'businnesdrive_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'businnesdrive_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function businnesdrive_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function businnesdrive_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function businnesdrive_customize_preview_js() {
	wp_enqueue_script( 'businnesdrive-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'businnesdrive_customize_preview_js' );


//
function businnesdrive_social_customize_register($wp_customize)
{
	$wp_customize->add_section('aldo_theme_options', array(
		'title' => __('Social link', 'dorobalo'),
		'priority' => 20,
	));

	// phone 
	$wp_customize->add_setting('telegram');
	$wp_customize->add_control('telegram', array(
		'label' => __('Telegram link', 'dorobalo'),
		'section' => 'aldo_theme_options'
	));

	// instagram 
	$wp_customize->add_setting('instagram');
	$wp_customize->add_control('instagram', array(
		'label' => __('Instagram link', 'dorobalo'),
		'section' => 'aldo_theme_options'
	));

	// facebook 
	$wp_customize->add_setting('facebook');
	$wp_customize->add_control('facebook', array(
		'label' => __('Facebook link', 'dorobalo'),
		'section' => 'aldo_theme_options'
	));

	// youtube 
	$wp_customize->add_setting('youtube');
	$wp_customize->add_control('youtube', array(
		'label' => __('YouTube link', 'dorobalo'),
		'section' => 'aldo_theme_options'
	));
}
add_action('customize_register', 'businnesdrive_social_customize_register');


function dorobalo_theme_options()
{
	return array(
		'telegram' => get_theme_mod('telegram'),
		'instagram' => get_theme_mod('instagram'),
		'facebook' => get_theme_mod('facebook'),
		'youtube' => get_theme_mod('youtube'),
	);
}
//