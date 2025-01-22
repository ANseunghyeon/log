<?php
 /**
 * Enqueue scripts and styles.
 */
function elite_creative_agency_scripts() {
	
	// Styles

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/css/bootstrap.min.css');

	wp_enqueue_style('owl-carousel',get_template_directory_uri().'/css/owl.carousel.css');
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/fonts/font-awesome/css/font-awesome.min.css');
	
	wp_enqueue_style('elite-creative-agency-widget',get_template_directory_uri().'/css/widget.css');
	
	wp_enqueue_style('elite-creative-agency-color-default',get_template_directory_uri().'/css/colors/default.css');
	
	wp_enqueue_style('elite-creative-agency-wp-test',get_template_directory_uri().'/css/wp-test.css');
	
	wp_enqueue_style('elite-creative-agency-menu',get_template_directory_uri().'/css/menu.css');
	
	wp_enqueue_style( 'elite-creative-agency-style', get_stylesheet_uri() );
	
	wp_enqueue_style('elite-creative-agency-gutenberg',get_template_directory_uri().'/css/gutenberg.css');
	
	wp_enqueue_style('elite-creative-agency-responsive',get_template_directory_uri().'/css/responsive.css');
	
	// Scripts
	wp_enqueue_script( 'jquery-ui-core');
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true); 

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), true); 
	
	wp_enqueue_script('elite-creative-agency-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, true);

	wp_enqueue_script( 'elite-creative-agency-navigation-focus', get_template_directory_uri() . '/js/navigation-focus.js', array(), true );
	
	wp_enqueue_script( 'jquery.superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array(), true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elite_creative_agency_scripts' );

//Admin Enqueue for Admin
function elite_creative_agency_admin_enqueue_scripts(){	
	wp_enqueue_style('elite-creative-agency-style-customizer',get_template_directory_uri(). '/css/style-customizer.css');
}
add_action( 'admin_enqueue_scripts', 'elite_creative_agency_admin_enqueue_scripts' );


?>