<?php
$testimonial_Slider_i = 4;
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

			$testimonial__slider__image = get_the_post_thumbnail('thumbnail', array('class' => 'testimonial__image rounded-circle'));
			$author_origin              = get_field('country_of_origin');

			$testimonial_Slider_html .= '<figure class="testimonial__item col-12 col-md-4">'.PHP_EOL;
			$testimonial_Slider_html .= '<blockquote class="testimonial__quote">'.PHP_EOL;
			$testimonial_Slider_html .= get_the_content();
			$testimonial_Slider_html .= '</blockquote>'.PHP_EOL;
			$testimonial_Slider_html .= '<footer class="testimonial__details">'.PHP_EOL;
			$testimonial_Slider_html .= '<p class="testimonial__author"><cite class="testimonial__author--name">'.get_the_title().'</cite> <cite class="testimonial__author--country">('.$author_origin.')</cite></p>'.PHP_EOL;
			$testimonial_Slider_html .= $testimonial__slider__image;
			$testimonial_Slider_html .= '</footer>'.PHP_EOL;
			$testimonial_Slider_html .= '</figure>'.PHP_EOL;
		}
		$testimonial_Slider_html .= '</div>'.PHP_EOL;
	}
	echo $testimonial_Slider_html;
}