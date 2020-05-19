<?php
add_action('admin_menu', 'fc_add_admin_menu');
add_action('admin_init', 'fc_settings_init');

function fc_add_admin_menu() {

	add_menu_page(
		'Theme Options',
		'Theme Options',
		'manage_options',
		'theme_options',
		'fc_options_page',
		'dashicons-schedule'
	);

}

function fc_settings_init() {

	register_setting(
		'fc_options_settings',
		'fc_settings'
	);

	add_settings_section(
		'fc_options_settings_section',
		__('HTML Extras', 'fc_options'),
		'fc_settings_section_callback',
		'fc_options_settings'
	);

	add_settings_field(
		'fc_header_extra',
		__('Head extra', 'fc_options'),
		'fc_header_extra_render',
		'fc_options_settings',
		'fc_options_settings_section'
	);

	add_settings_field(
		'fc_footer_extra',
		__('Foot extra', 'fc_options'),
		'fc_footer_extra_render',
		'fc_options_settings',
		'fc_options_settings_section'
	);
}

// settings controls

function fc_header_extra_render() {

	$options = get_option('fc_settings');
	?>
	<textarea cols='40' rows='5' name='fc_settings[fc_header_extra]'>
	<?php echo $options['fc_header_extra'];?>
	</textarea>
	<?php

}

function fc_footer_extra_render() {

	$options = get_option('fc_settings');
	?>
	<textarea cols='40' rows='5' name='fc_settings[fc_footer_extra]'>
	<?php echo $options['fc_footer_extra'];?>
	</textarea>
	<?php

}

function fc_settings_section_callback() {

	echo __('This area is where we will insert code that will apply globally throughout the website.', 'fc_options');

}

function fc_options_page() {

	?>
	<div class="wrap">
						<div id="icon-themes" class="icon32"></div>
						<h1>Theme Options</h1>
	<?php settings_errors();?>
	<form action='options.php' method='post'>
	<?php
	settings_fields('fc_options_settings');
	do_settings_sections('fc_options_settings');
	submit_button();
	?>
	</form>
					</div>
	<?php

}

?>
