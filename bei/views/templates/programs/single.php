<?php
include (get_template_directory().'/views/components/banner/subpages.php');
include (get_template_directory().'/views/layout/content-with-thumbnail.php');
include ('blocks');
include (get_template_directory().'/views/components/icons/four_icons.php');
include ('single/tabs.php');
include ('single/calendars.php');
include ('single/schedules.php');
if (have_rows('image_plus_content')) {;
	include (get_template_directory().'/views/layout/image_plus_content.php');
}