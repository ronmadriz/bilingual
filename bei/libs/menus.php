<?php

add_action('after_setup_theme', 'register_my_menu');
require get_template_directory().'/bootstrap-navwalker.php';

function register_my_menu() {
	register_nav_menu('primary', __('main-nav', 'main-nav'));
}