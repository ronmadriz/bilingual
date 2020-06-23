<?php
global $post;
$slug              = get_post($post)->post_name;
$header_cta_top    = get_theme_mod('header_cta_top');
$header_cta_bottom = get_theme_mod('header_cta_bottom');
$theme_location    = get_template_directory();

include ($theme_location.'/views/components/nav/subsites.php');
include ($theme_location.'/views/components/nav/main.php');
