<?php
$tml_args = array(
	'post_type' => 'testimonials',
);
$tml_query = new WP_Query($tml_args);
if ($tml_query->have_posts()) {
	echo '<section id="testimonial" class="testimonial">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row testimonial__wrapper">'.PHP_EOL;
	while ($tml_query->have_posts()) {
		$tml_query->the_post();
		$author_origin = get_field('country_of_origin');
		echo '<figure class="testimonial__item col-12 col-md-4">'.PHP_EOL;
		echo '<blockquote class="testimonial__quote">'.PHP_EOL;
		the_content();
		echo '</blockquote>'.PHP_EOL;
		echo '<footer class="testimonial__author">'.PHP_EOL;
		echo '<cite class="testimonial__author--name">'.get_the_title().'</cite>, <cite class="testimonial__author--country">('.$author_origin.')</cite>'.PHP_EOL;
		the_post_thumbnail('thumbnail', array('class' => 'testimonial__image rounded-circle'));
		echo '</footer>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}