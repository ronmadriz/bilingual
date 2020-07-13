<?php
/**
 * Template Name: Pricing
 *
 */
get_header();
$contentThumb = get_field('content_with_thumbnail');
include ('views/components/banner/subpages.php');

if ($contentThumb == 1) {
	include ('views/pages/default.php');
} else {
	include ('views/layout/content-with-thumbnail.php');
}
if (have_rows('plans')) {
	include (get_template_directory().'/views/components/price/plan.php');
}
include ('views/global/pagebuilder.php');
get_footer();
