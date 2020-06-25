<?php
// ID of the current item in the WordPress Loop
$bei_fl_id = get_the_ID();
if (have_rows('page_builder', $bei_fl_id)) {
	while (have_rows('page_builder', $bei_fl_id)){
		the_row();
		if (get_row_layout() == 'imagebar') {
			include (get_template_directory().'/views/layout/imagebar.php');
		} elseif (get_row_layout() == 'quotes') {
			include (get_template_directory().'views/layout/quotes.php');
		}
	}
}
// include ('views/components/logos/logos.php');
// include ('views/components/tables/simple_tables.php');