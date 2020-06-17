<?php
$pageID  = get_the_id();
$pageCF  = get_post_custom($pageID);
$tempDir = get_template_directory();
get_header();
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();

	}
}
get_footer();?>