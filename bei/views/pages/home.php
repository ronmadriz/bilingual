<?php
// home
include (get_template_directory().'/views/components/banner/home.php');
include (get_template_directory().'/views/components/tabbed/home.php');
include (get_template_directory().'/views/components/icons/icons.php');
if (have_rows('simple_tabs')) {
	while (have_rows('simple_tabs')) {
		the_row();
		include (get_template_directory().'/views/components/tabbed/simple.php');
	}
}
include (get_template_directory().'/views/components/news/news-brief.php');
include (get_template_directory().'/views/components/logos/logos.php');
