<?php
$args = array(
	'post_type'      => 'any-post-type',
	'posts_per_page' => 4,
);
$query = query_posts($args);

// Carousel
$testimonial_Slider_i = 4;
// Set the arguments for the query
global $post;
$testimonial_Slider_args = array(
	'numberposts' => -1, // -1 is for all
	'post_type'   => 'testimonials',
	//  'order' 	      => 'ASC',
);

$testimonial_Slider_posts = get_posts($testimonial_Slider_args);

if ($testimonial_Slider_posts) {
	$testimonial_Slider_chunks = array_chunk($testimonial_Slider_posts, $testimonial_Slider_i);
	$testimonial_Slider_html   = "";
	foreach ($testimonial_Slider_chunks as $testimonial_Slider_chunk) {
		($testimonial_Slider_chunk === reset($testimonial_Slider_chunk))?$active = "active":$active = "";
		$testimonial_Slider_html .= '<div class="item '.$active.'">';
		foreach ($testimonial_Slider_chunk as $post) {
			$testimonial_Slider_html .= '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">';
			$testimonial_Slider_html .= get_the_title($post->ID);
			$testimonial_Slider_html .= '</div>';
		}
		$testimonial_Slider_html .= '</div></div></div>';
	}
	echo $testimonial_Slider_html;
}