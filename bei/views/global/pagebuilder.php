<?php
// ID of the current item in the WordPress Loop
$bei_fl_id = get_the_ID();
if (have_rows('page_builder', $bei_fl_id)) {
	while (have_rows('page_builder', $bei_fl_id)){
		the_row();
		if (get_row_layout() == 'imagebar') {
			include ('views/layout/imagebar.php');
			// get_template_part('views/layout/imagebar.php', 'imagebar');
		}
	}
}