<?php

function enqueue_my_scripts() {
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array('jquery'), '', false);
	wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), false);
	wp_enqueue_script('device-js', get_template_directory_uri().'/dist/scripts/device.min.js', array('jquery'), true, true);
	wp_enqueue_script('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
// Enqueue Font Awesome.
add_action('wp_enqueue_scripts', 'ronmadriz_load_font_awesome');
function ronmadriz_load_font_awesome() {
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.1/js/all.js', array(), null);
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
function add_defer_attribute($tag, $handle) {
	if ('font-awesome' === $handle) {
		$tag = str_replace(' src', ' defer src', $tag);
	}

	return $tag;
}
function enqueue_my_styles() {
	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css');
	wp_enqueue_style('my-style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('site-style', get_template_directory_uri().'/dist/css/style.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles');
define('THEME_DIRECTORY', get_stylesheet_directory());
define('THEME_URI', get_stylesheet_directory_uri());
define('THEME_LIBS', THEME_URI.'/libs');
define('THEME_INCLUDE', THEME_DIRECTORY.'/includes');
define('THEME_IMAGES', THEME_URI.'/dist/images');
define('THEME_CSS', THEME_URI.'/dist/css');
define('THEME_JS', THEME_URI.'/dist/scripts');
include (THEME_INCLUDE.'/core/extended-cpts.php');
include (THEME_INCLUDE.'/core/extended-taxos.php');
foreach (glob(THEME_INCLUDE.'/cpt_files/*.php') as $filename) {include $filename;}
foreach (glob(THEME_INCLUDE.'/customizers/*.php') as $customizers) {include $customizers;}
include (THEME_INCLUDE.'/options/default.php');
foreach (glob('libs/*.php') as $libs) {include $libs;}
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

add_filter('upload_mimes', 'cc_mime_types');
function site_scripts() {
	wp_deregister_script('jquery');
	wp_deregister_script('jquery-ui-core');
	$pathTojQuery  = "https://code.jquery.com/jquery-1.11.2.min.js";
	$pathToScripts = THEME_JS."/main.min.js";
	wp_enqueue_script('jquery', $pathTojQuery, array(), '1.10.2', true);
	wp_enqueue_script('site_script', $pathToScripts, array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'site_scripts');