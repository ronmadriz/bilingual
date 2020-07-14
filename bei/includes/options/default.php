<?php
add_action('admin_menu', 'rmc_add_admin_menu');
add_action('admin_init', 'rmc_settings_init');

function rmc_add_admin_menu() {

	add_menu_page(
		'Theme Options',
		'Theme Options',
		'manage_options',
		'theme_options',
		'rmc_options_page',
		'dashicons-schedule'
	);

}

function rmc_settings_init() {

	register_setting(
		'rmc_options_settings',
		'rmc_settings'
	);

	add_settings_section(
		'rmc_options_settings_section',
		__('HTML Extras', 'rmc_options'),
		'rmc_settings_section_callback',
		'rmc_options_settings'
	);

	add_settings_field(
		'rmc_header_extra',
		__('Head extra', 'rmc_options'),
		'rmc_header_extra_render',
		'rmc_options_settings',
		'rmc_options_settings_section'
	);

	add_settings_field(
		'rmc_body_extra',
		__('Body extra', 'rmc_options'),
		'rmc_body_extra_render',
		'rmc_options_settings',
		'rmc_options_settings_section'
	);

	add_settings_field(
		'rmc_footer_extra',
		__('Foot extra', 'rmc_options'),
		'rmc_footer_extra_render',
		'rmc_options_settings',
		'rmc_options_settings_section'
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

function rmc_body_extra_render() {
	$options = get_option('rmc_settings');
	?>
	<textarea cols='40' rows='5' name='rmc_settings[rmc_body_extra]'>
	<?php echo $options['rmc_body_extra'];?>
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
	settings_fields('rmc_options_settings');
	do_settings_sections('rmc_options_settings');
	submit_button();
	?>
	</form>
		</div>
	<?php

}

?>
