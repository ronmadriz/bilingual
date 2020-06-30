<?php
global $post;
$slug              = get_post($post)->post_name;
$header_cta_top    = get_theme_mod('header_cta_top');
$header_cta_bottom = get_theme_mod('header_cta_bottom');
$theme_location    = get_template_directory();

include ($theme_location.'/views/components/nav/subsites.php');

if (is_child(313)) {
	include ($theme_location.'/views/components/nav/refugees.php');
} else {
	include ($theme_location.'/views/components/nav/main.php');
}
