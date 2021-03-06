<?php

function rmc_register_favicon_customizer($wp_customize) {

	// Header Logo

	$wp_customize->add_setting('site_logo_header');
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'site_logo_file',
			array(
				'label'    => __('Header Logo', 'rmc_core'),
				'section'  => 'title_tagline',
				'settings' => 'site_logo_header',
			)
		)
	);

	// header CTA BOTTOM
	$wp_customize->add_setting('site_favicon');
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'site_favicon',
			array(
				'label'    => __('Favicon found in Browser tab', 'rmc_core'),
				'section'  => 'title_tagline',
				'settings' => 'site_favicon',
			)
		)
	);
}

add_action('customize_register', 'rmc_register_favicon_customizer');
