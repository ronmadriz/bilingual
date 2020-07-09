<?php
get_header();

$contentThumb = get_field('content_with_thumbnail');
include ('views/components/banner/subpages.php');

if ($contentThumb == 1) {
	include ('views/pages/default.php');
} else {
	include ('views/layout/content-with-thumbnail.php');
}

$calendar_args = array(
	// Type & Status Parameters
	'post_type'      => 'programs',
	'post_status'    => 'publish',
	'order'          => 'DESC',
	'orderby'        => 'date',
	'posts_per_page' => 10,

);

$calendar_query = new WP_Query($calendar_args);

get_footer();