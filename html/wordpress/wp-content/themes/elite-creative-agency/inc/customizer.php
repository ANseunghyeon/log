<?php
/**
 * elite-creative-agency Theme Customizer.
 *
 * @package elite-creative-agency
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function elite_creative_agency_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting('custom_logo')->transport = 'refresh';	
}
add_action( 'customize_register', 'elite_creative_agency_customize_register' );

if ( class_exists("Kirki")){

	/* Top Header */

	new \Kirki\Section(
		'elite_creative_agency_header_section',
		[
			'title'       => esc_html__( 'Header', 'elite-creative-agency' ),
			'description' => esc_html__( 'Here you can add contact information.', 'elite-creative-agency' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_creative_agency_header_phone_number_feild',
			'label'    => esc_html__( 'Add Phone Number', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_creative_agency_header_email_address_feild',
			'label'    => esc_html__( 'Add Email Address', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_creative_agency_header_opening_time_feild',
			'label'    => esc_html__( 'Add Opening Time', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	/* Top Header End */

	/* Social Media */

	new \Kirki\Section(
		'elite_creative_agency_header_social_media_section',
		[
			'title'       => esc_html__( 'Social Media', 'elite-creative-agency' ),
			'description' => esc_html__( 'Here you can add social media links.', 'elite-creative-agency' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Dashicons(
		[
			'settings'    => 'elite_creative_agency_header_social_icon_1_feild',
			'label'       => esc_html__( 'Social Icon 1', 'elite-creative-agency' ),
			'section'     => 'elite_creative_agency_header_social_media_section',
			'default'     => '',
			'priority' => 10,
			'choices'     => [
				'facebook-alt' => 'facebook-alt',
				'instagram' => 'instagram',
				'pinterest' => 'pinterest',
				'linkedin' => 'linkedin',
				'youtube' => 'youtube',
				'twitter' => 'twitter',
				'whatsapp' => 'whatsapp',
				'rss' => 'rss',
			],
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_creative_agency_header_social_link_1_feild',
			'label'    => esc_html__( 'Social Link 1', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_social_media_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\Dashicons(
		[
			'settings'    => 'elite_creative_agency_header_social_icon_2_feild',
			'label'       => esc_html__( 'Social Icon 1', 'elite-creative-agency' ),
			'section'     => 'elite_creative_agency_header_social_media_section',
			'default'     => '',
			'priority' => 10,
			'choices'     => [
				'facebook-alt' => 'facebook-alt',
				'instagram' => 'instagram',
				'pinterest' => 'pinterest',
				'linkedin' => 'linkedin',
				'youtube' => 'youtube',
				'twitter' => 'twitter',
				'whatsapp' => 'whatsapp',
				'rss' => 'rss',
			],
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_creative_agency_header_social_link_2_feild',
			'label'    => esc_html__( 'Social Link 2', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_social_media_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\Dashicons(
		[
			'settings'    => 'elite_creative_agency_header_social_icon_3_feild',
			'label'       => esc_html__( 'Social Icon 3', 'elite-creative-agency' ),
			'section'     => 'elite_creative_agency_header_social_media_section',
			'default'     => '',
			'priority' => 10,
			'choices'     => [
				'facebook-alt' => 'facebook-alt',
				'instagram' => 'instagram',
				'pinterest' => 'pinterest',
				'linkedin' => 'linkedin',
				'youtube' => 'youtube',
				'twitter' => 'twitter',
				'whatsapp' => 'whatsapp',
				'rss' => 'rss',
			],
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_creative_agency_header_social_link_3_feild',
			'label'    => esc_html__( 'Social Link 3', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_social_media_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\Dashicons(
		[
			'settings'    => 'elite_creative_agency_header_social_icon_4_feild',
			'label'       => esc_html__( 'Social Icon 4', 'elite-creative-agency' ),
			'section'     => 'elite_creative_agency_header_social_media_section',
			'default'     => '',
			'priority' => 10,
			'choices'     => [
				'facebook-alt' => 'facebook-alt',
				'instagram' => 'instagram',
				'pinterest' => 'pinterest',
				'linkedin' => 'linkedin',
				'youtube' => 'youtube',
				'twitter' => 'twitter',
				'whatsapp' => 'whatsapp',
				'rss' => 'rss',
			],
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_creative_agency_header_social_link_4_feild',
			'label'    => esc_html__( 'Social Link 4', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_social_media_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\Dashicons(
		[
			'settings'    => 'elite_creative_agency_header_social_icon_5_feild',
			'label'       => esc_html__( 'Social Icon 5', 'elite-creative-agency' ),
			'section'     => 'elite_creative_agency_header_social_media_section',
			'default'     => '',
			'priority' => 10,
			'choices'     => [
				'facebook-alt' => 'facebook-alt',
				'instagram' => 'instagram',
				'pinterest' => 'pinterest',
				'linkedin' => 'linkedin',
				'youtube' => 'youtube',
				'twitter' => 'twitter',
				'whatsapp' => 'whatsapp',
				'rss' => 'rss',
			],
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_creative_agency_header_social_link_5_feild',
			'label'    => esc_html__( 'Social Link 5', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_social_media_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	/* Social Media End */

	/* Header Button */

	new \Kirki\Section(
		'elite_creative_agency_header_button_section',
		[
			'title'       => esc_html__( 'Header Button', 'elite-creative-agency' ),
			'description' => esc_html__( 'Here you can add header button text and link.', 'elite-creative-agency' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_creative_agency_header_btn_text',
			'label'    => esc_html__( 'Button Text', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_creative_agency_header_btn_link',
			'label'    => esc_html__( 'Button Link', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	/* Home Slider */

	new \Kirki\Section(
		'elite_creative_agency_home_slider_section',
		[
			'title'       => esc_html__( 'Home Slider', 'elite-creative-agency' ),
			'description' => esc_html__( 'Here you can add slider image, title and text.', 'elite-creative-agency' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_creative_agency_slide_on_off',
			'label'       => esc_html__( 'Slider On / Off', 'elite-creative-agency' ),
			'section'     => 'elite_creative_agency_home_slider_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-creative-agency' ),
				'off' => esc_html__( 'Disable', 'elite-creative-agency' ),
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'elite_creative_agency_slide_count',
			'label'    => esc_html__( 'Slider Number Control', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_home_slider_section',
			'default'  => '',
			'choices'  => [
				'min'  => 0,
				'max'  => 3,
				'step' => 1,
			],
		]
	);

	$slide_count = get_theme_mod('elite_creative_agency_slide_count');

	for ($i=1; $i <= $slide_count; $i++) { 
		
		new \Kirki\Field\Image(
			[
				'settings'    => 'elite_creative_agency_slider_image'.$i,
				'label'       => esc_html__( 'Slider Image 0', 'elite-creative-agency' ).$i,
				'section'     => 'elite_creative_agency_home_slider_section',
				'default'     => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_creative_agency_slider_short_heading'.$i,
				'label'    => esc_html__( 'Short Heading 0', 'elite-creative-agency' ).$i,
				'section'  => 'elite_creative_agency_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_creative_agency_slider_heading'.$i,
				'label'    => esc_html__( 'Main Heading 0', 'elite-creative-agency' ).$i,
				'section'  => 'elite_creative_agency_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_creative_agency_slider_text'.$i,
				'label'    => esc_html__( 'Text 0', 'elite-creative-agency' ).$i,
				'section'  => 'elite_creative_agency_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_creative_agency_slider_button_text'.$i,
				'label'    => esc_html__( 'Button Text 0', 'elite-creative-agency' ).$i,
				'section'  => 'elite_creative_agency_home_slider_section',
			]
		);

		new \Kirki\Field\URL(
			[
				'settings' => 'elite_creative_agency_slider_button_link'.$i,
				'label'    => esc_html__( 'Button Url 0', 'elite-creative-agency' ).$i,
				'section'  => 'elite_creative_agency_home_slider_section',
				'default'  => '',
			]
		);

	}

	/* Home Team */

	new \Kirki\Section(
		'elite_creative_agency_home_team_section',
		[
			'title'       => esc_html__( 'Home Team', 'elite-creative-agency' ),
			'description' => esc_html__( 'Here you can add team image, title and text.', 'elite-creative-agency' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_creative_agency_team_on_off',
			'label'       => esc_html__( 'Team On / Off', 'elite-creative-agency' ),
			'section'     => 'elite_creative_agency_home_team_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-creative-agency' ),
				'off' => esc_html__( 'Disable', 'elite-creative-agency' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_creative_agency_team_extra_heading',
			'label'    => esc_html__( 'Extra Heading', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_home_team_section',
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_creative_agency_team_main_heading',
			'label'    => esc_html__( 'Main Heading', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_home_team_section',
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'elite_creative_agency_team_count',
			'label'    => esc_html__( 'Team Number Control', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_home_team_section',
			'default'  => '',
			'choices'  => [
				'min'  => 0,
				'max'  => 6,
				'step' => 1,
			],
		]
	);

	$team_count = get_theme_mod('elite_creative_agency_team_count');

	for ($i=1; $i <= $team_count; $i++) { 
		
		new \Kirki\Field\Image(
			[
				'settings'    => 'elite_creative_agency_team_image'.$i,
				'label'       => esc_html__( 'Team Image 0', 'elite-creative-agency' ).$i,
				'section'     => 'elite_creative_agency_home_team_section',
				'default'     => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_creative_agency_team_designation'.$i,
				'label'    => esc_html__( 'Member Designation 0', 'elite-creative-agency' ).$i,
				'section'  => 'elite_creative_agency_home_team_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_creative_agency_team_member_name'.$i,
				'label'    => esc_html__( 'Member Name 0', 'elite-creative-agency' ).$i,
				'section'  => 'elite_creative_agency_home_team_section',
			]
		);

		new \Kirki\Field\URL(
			[
				'settings' => 'elite_creative_agency_team_member_link'.$i,
				'label'    => esc_html__( 'Member Url 0', 'elite-creative-agency' ).$i,
				'section'  => 'elite_creative_agency_home_team_section',
				'default'  => '',
			]
		);

	}

	/* Footer */

	new \Kirki\Section(
		'elite_creative_agency_footer_section',
		[
			'title'       => esc_html__( 'Footer', 'elite-creative-agency' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_creative_agency_copyright_on_off',
			'label'       => esc_html__( 'Footer On / Off', 'elite-creative-agency' ),
			'section'     => 'elite_creative_agency_footer_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-creative-agency' ),
				'off' => esc_html__( 'Disable', 'elite-creative-agency' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_creative_agency_copyright_content_text',
			'label'    => esc_html__( 'Copyright Text', 'elite-creative-agency' ),
			'section'  => 'elite_creative_agency_footer_section',
		]
	);

}