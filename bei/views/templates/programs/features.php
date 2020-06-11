<?php
if (have_rows('features')) {
	while (have_rows('features')) {
		the_row();
		$feature_item_title   = get_sub_field('feature_item_title');
		$feature_item_content = get_sub_field('feature_item_content');
	}
}