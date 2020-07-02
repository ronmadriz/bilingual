<?php
// ID of the current item in the WordPress Loop
$bei_fl_id = get_the_ID();
if (have_rows('page_builder', $bei_fl_id)) {
	while (have_rows('page_builder', $bei_fl_id)) {
		the_row();
		if (get_row_layout() == 'imagebar') {
			include (get_template_directory().'/views/layout/imagebar.php');
		} elseif (get_row_layout() == 'quotes') {
			include (get_template_directory().'/views/layout/quotes.php');
		} elseif (get_row_layout() == 'fl_logos') {
			include (get_template_directory().'/views/components/logos/flexible-logos.php');
		} elseif (get_row_layout() == 'simple_tables') {
			include (get_template_directory().'/views/components/tables/simple_table.php');
		} elseif (get_row_layout() == 'info_blocks') {
			include (get_template_directory().'/views/layout/infoblocks.php');
		} elseif (get_row_layout() == 'tiled_images') {
			include (get_template_directory().'/views/layout/tiled.php');
		} elseif (get_row_layout() == 'gen_content') {
			include (get_template_directory().'/views/layout/gen-content.php');
		} elseif (get_row_layout() == 'gen_content_w_boxes') {
			include (get_template_directory().'/views/layout/gen-content-w-boxes.php');
		} elseif (get_row_layout() == 'text_right') {
			include (get_template_directory().'/views/layout/text_right.php');
		} elseif (get_row_layout() == 'rotating') {
			include (get_template_directory().'/views/components/galleries/rotating.php');
		} elseif (get_row_layout() == 'two_columns') {
			include (get_template_directory().'/views/layout/twoColumns.php');
		} elseif (get_row_layout() == 'two_item_feature') {
			include (get_template_directory().'/views/layout/two-item-feature.php');
		} elseif (get_row_layout() == 'accordion') {
			include (get_template_directory().'/views/components/accordion/index.php');
		} elseif (get_row_layout() == 'testiomnial') {
			include (get_template_directory().'/views/layout/testiomnial.php');
		} elseif (get_row_layout() == 'cta') {
			include (get_template_directory().'/views/components/ctas/withbg.php');
		} elseif (get_row_layout() == 'latest_testimonials') {
			include (get_template_directory().'/views/components/testimonials/static.php');
		} elseif (get_row_layout() == 'testimonials_slider') {
			include (get_template_directory().'/views/components/testimonials/slider.php');
		} elseif (get_row_layout() == 'html') {
			include (get_template_directory().'/views/layout/html.php');
		}
	}
}