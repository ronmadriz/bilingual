<?php
if (have_rows('page_builder')) {
	while (have_rows('page_builder')) {
		the_row();
		if (get_row_layout() == 'paragraph') {
			get_template_part(get_template_directory().'partials/flexible-layouts/flexible', 'paragraph');
		}
	}
}