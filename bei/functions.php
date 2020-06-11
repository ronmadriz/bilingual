<?php

function enqueue_my_scripts() {
	wp_enqueue_script('bei-jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array('jquery'), '', false);
	wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), false);
	wp_enqueue_script('device-js', get_template_directory_uri().'/dist/scripts/device.min.js', array('jquery'), true, true);
	wp_enqueue_script('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
function enqueue_my_styles() {
	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
	wp_enqueue_style('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css');
	wp_enqueue_style('my-style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('site-style', get_template_directory_uri().'/dist/css/index.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles');

// remove wp version number from scripts and styles
function remove_css_js_version($src) {
	if (strpos($src, '?ver=')) {
		$src = remove_query_arg('ver', $src);
	}

	return $src;
}
add_filter('style_loader_src', 'remove_css_js_version', 9999);
add_filter('script_loader_src', 'remove_css_js_version', 9999);

define('THEME_DIRECTORY', get_stylesheet_directory());
define('THEME_URI', get_stylesheet_directory_uri());
define('THEME_LIBS', THEME_URI.'/libs');
define('THEME_INCLUDE', THEME_DIRECTORY.'/includes');
define('THEME_IMAGES', THEME_URI.'/dist/images');
define('THEME_SPRITES', THEME_URI.'/sprites/');
define('THEME_CSS', THEME_URI.'/dist/css');
define('THEME_JS', THEME_URI.'/dist/scripts');
include (THEME_INCLUDE.'/core/extended-cpts.php');
include (THEME_INCLUDE.'/core/extended-taxos.php');
foreach (glob(THEME_INCLUDE.'/cpt_files/*.php') as $filename) {include $filename;}
foreach (glob(THEME_INCLUDE.'/customizers/*.php') as $customizers) {include $customizers;}
foreach (glob(THEME_LIBS.'/*.php') as $libs) {include $libs;}
include (THEME_INCLUDE.'/class-wp-bootstrap-navwalker.php');
include (THEME_INCLUDE.'/options/default.php');
include (THEME_INCLUDE.'/breadcrumbs-functions.php');
// include (THEME_INCLUDE.'/options/info.php');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

add_theme_support('post-thumbnails');
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
function site_scripts() {
	wp_deregister_script('jquery-ui-core');
	$pathToScripts = THEME_JS."/main.min.js";
	wp_enqueue_script('site_script', $pathToScripts, array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'site_scripts');

function category_id_class($classes) {
	global $post;
	foreach ((get_the_category($post->ID)) as $category)
	$classes[] = 'cat-'.$category->cat_ID.'-id';
	return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

add_action('after_setup_theme', 'register_my_menu');
// require get_template_directory().'/bootstrap-navwalker.php';
// Menus
function register_my_menu() {
	register_nav_menu('primary', __('main-nav', 'main-nav'));
	register_nav_menu('subsites', __('subsites-nav', 'subsites-nav'));
	register_nav_menu('footer', __('footer-nav', 'footer-nav'));
}
function my_mce_buttons_2($buttons) {
	$buttons[] = 'sup';
	$buttons[] = 'sub';

	return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');

function reg_split_my_array($origin, $chunk) {
	$odds  = array();// left
	$evens = array();// right

	foreach ($origin as $k => $v) {
		if ($k%2 == 0) {
			$evens[] = $v;
		} else {
			$odds[] = $v;
		}
	}

	if ($chunk == 'even') {
		return $evens;
	}

	if ($chunk == 'odd') {
		return $odds;
	}
}

function filter_ptags_on_images($content) {
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

function the_slug($echo = true) {
	$slug = basename(get_permalink());
	do_action('before_slug', $slug);
	$slug = apply_filters('slug_filter', $slug);
	if ($echo) {echo $slug;
	}

	do_action('after_slug', $slug);
	return $slug;
}

function reg_get_random_string($length, $valid_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456790") {
	$random_string   = "";
	$num_valid_chars = strlen($valid_chars);
	for ($i = 0; $i < $length; $i++, $random_string .= $valid_chars[mt_rand(1, $num_valid_chars)-1]) {;
	}

	return $random_string;
}

function reg_clean_title($source) {
	$lowered = strtolower($source);
	$search  = array(' ', '-');
	$replace = array('_', '_');
	$modded  = str_replace($search, $replace, $lowered);

	return $modded;
}

add_action('get_header', 'my_filter_head');

function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

// Clean the up the image from wp_get_attachment_image()
add_filter('wp_get_attachment_image_attributes', function ($attr) {
		if (isset($attr['sizes'])) {
			unset($attr['sizes']);
		}

		if (isset($attr['srcset'])) {
			unset($attr['srcset']);
		}

		return $attr;

	}, PHP_INT_MAX);

// Override the calculated image sizes
add_filter('wp_calculate_image_sizes', '__return_false', PHP_INT_MAX);

// Override the calculated image sources
add_filter('wp_calculate_image_srcset', '__return_false', PHP_INT_MAX);

// Remove the reponsive stuff from the content
remove_filter('the_content', 'wp_make_content_images_responsive');

function disable_wp_emojicons() {

	// all actions related to emojis
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');

	// filter to remove TinyMCE emojis
	add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
}
add_action('init', 'disable_wp_emojicons');

function disable_emojicons_tinymce($plugins) {
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

// Social Media Button Function

function social_media_icons() {
	function rmc_social_media_array() {
		/* store social site names in array */
		$social_sites = array('facebook', 'linkedin', 'instagram', 'twitter', 'youtube', 'email', 'rss');
		return $social_sites;
	}
	$social_sites = rmc_social_media_array();
	foreach ($social_sites as $social_site) {
		if (strlen(get_theme_mod($social_site)) > 0) {
			$active_sites[] = $social_site;
		}
	}
	if (!empty($active_sites)) {
		foreach ($active_sites as $active_site) {
			$class = $active_site;
			if ($active_site == 'email') {
				echo '<span class="social__item">';
				echo '<a class="email social__link" href="mailto:'.antispambot(is_email(get_theme_mod($active_site))).'">';
				echo '<img src="'.THEME_SPRITES.'email.svg" alt="">';
				echo '</a>';
				echo '</span>'.PHP_EOL;
			} else {
				echo '<span class="social__item">';
				echo '<a class="'.$active_site.' social__link" href="'.get_theme_mod($active_site).'">';
				echo '<img src="'.THEME_SPRITES.$class.'.svg'.'" alt="">';
				;
				echo '</a>';
				echo '</span>'.PHP_EOL;
			}
		}
	}
}

function social_media_icons_ft() {
	function rmc_social_media_array() {
		/* store social site names in array */
		$social_sites = array('facebook', 'linkedin', 'instagram', 'twitter', 'youtube', 'email', 'rss');
		return $social_sites;
	}
	$social_sites = rmc_social_media_array();
	foreach ($social_sites as $social_site) {
		if (strlen(get_theme_mod($social_site)) > 0) {
			$active_sites[] = $social_site;
		}
	}
	if (!empty($active_sites)) {
		foreach ($active_sites as $active_site) {
			$class = $active_site;
			if ($active_site == 'email') {
				echo '<span class="social__item">';
				echo '<a class="email social__link" href="mailto:'.antispambot(is_email(get_theme_mod($active_site))).'">';
				echo '<img src="'.THEME_SPRITES.'email.svg" alt="">';
				echo '</a>';
				echo '</span>'.PHP_EOL;
			} else {
				echo '<span class="social__item">';
				echo '<a class="'.$active_site.' social__link" href="'.get_theme_mod($active_site).'">';
				echo file_get_contents(THEME_SPRITES.$class.'.svg');
				;
				echo '</a>';
				echo '</span>'.PHP_EOL;
			}
		}
	}
}
function rmc_remove_gallery_css($css) {
	return preg_replace("#<style type='text/css'>(.*?)</style>#s", '', $css);
}
add_filter('gallery_style', 'rmc_remove_gallery_css');
add_shortcode('gallery', 'rmc_gallery_shortcode');
/**
 * Overwrite the native [gallery] shortcode, to modify the HTML layout.
 */
function rmc_gallery_shortcode($attr = array(), $content = '') {
	$attr['itemtag']    = "";
	$attr['icontag']    = "";
	$attr['captiontag'] = "";

	// Run the native gallery shortcode callback:
	$html = gallery_shortcode($attr);

	// Remove all tags except a, img,li, p
	$html = strip_tags($html, '<a>, <img>');

	// Some trivial replacements:
	$from = array(
		"class='gallery-item'",
		"class='gallery-icon landscape'",
		'class="attachment-thumbnail"',
		'a href=',
	);
	$to = array(
		'class="col-lg-3 col-md-4 col-sm-12"',
		'',
		'class="gallery-th"',
		'a class="colorbox" href=',
	);
	$html = str_replace($from, $to, $html);

	// Remove width/height attributes:
	$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);

	// Wrap the output in ul tags:
	$html = sprintf('<div id="gallery">%s</div>', $html);

	return $html;
}
function rmc_img_tag($class) {
	$class .= ' img-responsive';
	return $class;
}
add_filter('get_image_tag_class', 'rmc_img_tag');

// SVG Icons

add_filter('acf_icon_path_suffix', 'acf_icon_path_suffix');

function acf_icon_path_suffix($path_suffix) {
	return 'sprites/';
}

// modify the path to the above prefix
add_filter('acf_icon_path', 'acf_icon_path');

function acf_icon_path($path_suffix) {
	return plugin_dir_path(__FILE__);
}

// modify the URL to the icons directory to display on the page
add_filter('acf_icon_url', 'acf_icon_url');

function acf_icon_url($path_suffix) {
	return plugin_dir_url(__FILE__);
}