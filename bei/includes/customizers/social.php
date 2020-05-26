<?php

function rmc_register_social_customizer($wp_customize) {

	function rmc_social_array() {

		/* store social site names in array */
		$social_sites = array('facebook', 'linkedin', 'instagram', 'twitter', 'youtube');

		return $social_sites;
	}

	$wp_customize->add_section('rmc_social_settings', array(
			'title'    => __('Social Media Links', 'rmc_core'),
			'priority' => 30,
		));

	$social_sites = rmc_social_array();
	$priority     = 5;

	foreach ($social_sites as $social_site) {

		$wp_customize->add_setting("$social_site", array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			));

		$wp_customize->add_control($social_site, array(
				'label'    => __("$social_site url:", 'rmc_core'),
				'section'  => 'rmc_social_settings',
				'type'     => 'text',
				'priority' => $priority,
			));

		$priority = $priority+5;
	}

}

add_action('customize_register', 'rmc_register_social_customizer');
