<?php
$testimonial_Slider_i = 3;
global $post;
$testimonial_Slider_args = array(
	'numberposts' => -1, // -1 is for all
	'post_type'   => 'testimonials',
	//  'order' 	      => 'ASC',
);

$testimonial_Slider_posts   = get_posts($testimonial_Slider_args);
$testimonials_section_title = get_sub_field('tsl_section_title', $post->ID);
echo '<section id="testimonial" class="testimonial">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row"><div class="col-12 testimonial__title"><h2 class="testimonial__title--text">'.$testimonials_section_title.'</h2></div></div>'.PHP_EOL;
echo '<div id="testimonial__slider" class="row testimonial__wrapper carousel slide carousel-multi-item" data-ride="carousel">'.PHP_EOL;
echo '<div class="controls-top">'.PHP_EOL;
echo '<a class="btn-floating" href="#testimonial__slider" data-slide="prev"><i class="fas fa-chevron-left"></i></a>'.PHP_EOL;
echo '<a class="btn-floating" href="#testimonial__slider" data-slide="next"><i class="fas fa-chevron-right"></i></a>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div class="col-12 carousel-inner testimonial__slider" role="listbox">'.PHP_EOL;
if ($testimonial_Slider_posts) {
	$testimonial_Slider_chunks = array_chunk($testimonial_Slider_posts, $testimonial_Slider_i);
	$testimonial_Slider_html   = "";
	foreach ($testimonial_Slider_chunks as $testimonial_Slider_chunk) {
		($testimonial_Slider_chunk === reset($testimonial_Slider_chunks))?$testimonial_active = ' active':$testimonial_active = '';
		$testimonial_Slider_html .= '<div class="carousel-item'.$testimonial_active.'">'.PHP_EOL;
		foreach ($testimonial_Slider_chunk as $post) {

			$testimonial__slider__image = get_the_post_thumbnail($post->ID, 'thumbnail', array('class' => 'testimonial__image rounded-circle'));
			$author_origin              = get_field('country_of_origin');

			$testimonial_Slider_html .= '<figure class="testimonial__slideitem col-12 col-md-4">'.PHP_EOL;
			$testimonial_Slider_html .= $testimonial__slider__image;
			$testimonial_Slider_html .= '<blockquote class="testimonial__quote">'.PHP_EOL;
			$testimonial_Slider_html .= the_content($post->ID);
			$testimonial_Slider_html .= '</blockquote>'.PHP_EOL;
			$testimonial_Slider_html .= '<footer class="testimonial__details">'.PHP_EOL;
			$testimonial_Slider_html .= '<p class="testimonial__author"><cite class="testimonial__author--name">'.get_the_title($post->ID).'</cite> <cite class="testimonial__author--country">('.$author_origin.')</cite></p>'.PHP_EOL;
			$testimonial__slider__image;
			$testimonial_Slider_html .= '</footer>'.PHP_EOL;
			$testimonial_Slider_html .= '</figure>'.PHP_EOL;
		}
		$testimonial_Slider_html .= '</div>'.PHP_EOL;
	}
	echo $testimonial_Slider_html;
}
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;