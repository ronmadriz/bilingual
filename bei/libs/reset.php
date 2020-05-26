<?php
// Disabling WP Emojis
function disable_wp_emojicons() {
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
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

function category_id_class($classes) {
	global $post;
	foreach ((get_the_category($post->ID)) as $category)
	$classes[] = 'cat-'.$category->cat_ID.'-id';
	return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

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
