<?php
if ( ! function_exists( 'elite_creative_agency_setup' ) ) :
function elite_creative_agency_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( "responsive-embeds" );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	
	add_theme_support( 'custom-header' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'elite-creative-agency' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	/*
	 * Enable support for custom logo.
	 */
	add_theme_support('custom-logo');
	
	remove_theme_support( 'widgets-block-editor' );

	// -- Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
		
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
		
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', elite_creative_agency_google_font() ) );
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'elite_creative_agency_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'elite_creative_agency_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elite_creative_agency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'elite_creative_agency_content_width', 1170 );
}
add_action( 'after_setup_theme', 'elite_creative_agency_content_width', 0 );

/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Sidebar.
 */
require_once get_template_directory() . '/inc/sidebar/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/inc/jetpack.php';

/**
 * Load Web Font
 */
require_once get_template_directory() . '/inc/wptt-webfont-loader.php';

/**
 * Load Recommended Plugin
 */
require_once get_template_directory() . '/inc/tgm-plugin/tgm.php';

/**
 * Called all the Customize file.
 */
require( get_template_directory() . '/inc/customize/premium.php');
