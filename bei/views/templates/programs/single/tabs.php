<?php
if (have_rows('simple_tabs')) {
	while (have_rows('simple_tabs')) {
		the_row();
		include (get_template_directory().'/views/components/tabbed/simple.php');
	}
	wp_reset_postdata();
}
