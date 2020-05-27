<?php
add_action('admin_menu', 'rmc_add_admin_menu');
add_action('admin_init', 'rmc_settings_init');

function rmc_add_admin_menu() {

	add_menu_page(
		'School Info',
		'School Info',
		'manage_info',
		'theme_info',
		'rmc_info_page',
		'dashicons-building'
	);

}

function rmc_settings_init() {

	register_setting(
		'rmc_info_settings',
		'rmc_settings'
	);

	add_settings_section(
		'rmc_info_section',
		__('BEI Information', 'rmc_core'),
		'rmc_settings_section_callback',
		'rmc_info_settings'
	);

	add_settings_field(
		'rmc_street_info',
		__('Street Address', 'rmc_core'),
		'rmc_street_info',
		'rmc_info_settings',
		'rmc_info_section'
	);

	add_settings_field(
		'rmc_city_info',
		__('City', 'rmc_options'),
		'rmc_city_info',
		'rmc_info_settings',
		'rmc_info_section'
	);

	add_settings_field(
		'rmc_state_info',
		__('State', 'rmc_options'),
		'rmc_state_info',
		'rmc_info_settings',
		'rmc_info_section'
	);

	add_settings_field(
		'rmc_zip_info',
		__('Zip', 'rmc_options'),
		'rmc_zip_info',
		'rmc_info_settings',
		'rmc_info_section'
	);

	add_settings_field(
		'rmc_phone_info',
		__('Phone', 'rmc_options'),
		'rmc_phone_info',
		'rmc_info_settings',
		'rmc_info_section'
	);
}

// settings controls

function rmc_header_extra_render() {

	$options = get_option('rmc_settings');
	?>
	<textarea cols='40' rows='5' name='rmc_settings[rmc_header_extra]'>
	<?php echo $options['rmc_header_extra'];?>
	</textarea>
	<?php

}

function rmc_footer_extra_render() {
	$options = get_option('rmc_settings');
	?>
	<textarea cols='40' rows='5' name='rmc_settings[rmc_footer_extra]'>
	<?php echo $options['rmc_footer_extra'];?>
	</textarea>
	<?php

}

function rmc_settings_section_callback() {
	echo __('This area is where we will insert code that will apply globally throughout the website.', 'rmc_options');
}

function rmc_options_page() {

	?>
	<div class="wrap">
																			<div id="icon-themes" class="icon32"></div>
																			<h1>Theme Options</h1>
	<?php settings_errors();?>
	<form action='options.php' method='post'>
	<?php
	settings_fields('rmc_info_settings');
	do_settings_sections('rmc_info_settings');
	submit_button();
	?>
	</form>
																			</div>
	<?php

}

?>
