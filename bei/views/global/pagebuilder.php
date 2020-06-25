<?php
// ID of the current item in the WordPress Loop
$bei_fl_id = get_the_ID();
if (have_rows('page_builder', $bei_fl_id)) {
	while (have_rows('page_builder', $bei_fl_id)){
		the_row();
		if (get_row_layout() == 'imagebar') {
			echo $bei_fl_id;
//			get_template_part(get_template_directory().'views/layout/imagebar.php', 'imagebar');
		}
	}
}