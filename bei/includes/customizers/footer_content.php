<?php

function rmc_register_cta_customizer($wp_customize) {

	// footer CTA Section

	$wp_customize->add_section(
		'footer_content',
		array(
			'title'       => 'Footer Content',
			'description' => 'Update Footer Content displayed at Bottom of Pages',
			'priority'    => 35,
		)
	);

	$wp_customize->add_setting('site_logo_footer');
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'site_logo_footer',
			array(
				'label'    => __('Footer Logo', 'rmc_core'),
				'section'  => 'footer_content',
				'settings' => 'site_logo_footer',
			)
		)
	);
	$wp_customize->add_setting('footer_about');
	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize, 'foot_about',
			array(
				'label'    => __('Footer Content', 'rmc_core'),
				'section'  => 'footer_content',
				'type'     => 'textarea',
				'settings' => 'footer_about',
			)

		)
	);
}

add_action('customize_register', 'rmc_register_cta_customizer');
