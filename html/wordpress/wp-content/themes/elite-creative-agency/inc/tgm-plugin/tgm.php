<?php
	
require get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function elite_creative_agency_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'elite-creative-agency' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	elite_creative_agency_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'elite_creative_agency_register_recommended_plugins' );