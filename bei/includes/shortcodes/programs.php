<?php
function childprograms_shortcode_callback($atts) {
	$atts = shortcode_atts(array(
			'parent' => false,
		), $atts, 'childprograms');

	$parent_id = false;
	if ($atts['parent']) {
		$parent = get_page_by_path($atts['parent']);
		if ($parent) {
			$parent_id = $parent->ID;
		}
	} else {// if no parent passed, then show children of current page
		$parent_id = get_the_ID();
	}

	$postresult = '';
	if (!$parent_id) {// don't waste time getting pages, if we couldn't get parent page
		return $postresult;
	}

	$childprograms = wp_list_pages(array(
			'post_type'   => 'programs',
			'sort_column' => 'menu_order',
			'title_li'    => '',
			'child_of'    => $parent_id,
			'echo'        => 0,
		));

	if ($childprograms) {
		$postresult = '<ul>'.$childprograms.'</ul>';
	}

	return $postresult;
}
add_shortcode('childprograms', 'childprograms_shortcode_callback');