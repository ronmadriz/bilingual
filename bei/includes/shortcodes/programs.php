<?php
function function_childprograms() {
	global $post;
	// for Pages with a parent
	if (is_singular('programs') && $post->post_parent) {
		$childpages = wp_list_pages('post_type=uve_courses&sort_column=menu_order&title_li=&child_of='.$post->ID.'&echo=0');
	}
	if ($childpages) {
		$program_string = '<ul>'.$childpages.'</ul>';
	}
	return $program_string;
}
add_shortcode('childprograms', 'function_childprograms');