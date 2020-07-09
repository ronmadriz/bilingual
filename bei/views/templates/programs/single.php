<?php
include (get_template_directory().'/views/components/banner/subpages.php');
include (get_template_directory().'/views/layout/content-with-thumbnail.php');
include ('single/blocks.php');
include (get_template_directory().'/views/components/icons/four_icons.php');
include ('single/tabs.php');
//include ('single/calendars.php');
include ('single/schedules.php');
if (have_rows('image_plus_content')) {
	while (have_rows('image_plus_content')) {
		the_row();
		include (get_template_directory().'/views/layout/image_plus_content.php');
	}
	wp_reset_postdata();
}
if (have_rows('cta')) {
	while (have_rows('cta')) {
		the_row();
		include (get_template_directory().'/views/components/ctas/withbg.php');
	}
	wp_reset_postdata();
}