<?php
$ri_images = get_sub_field('ri_images');
echo '<section id="rotating" class="rotating">'.PHP_EOL;
echo '<div id="rotating__content" class="rotating__content col-12 carousel slide carousel-fade" data-ride="carousel">'.PHP_EOL;
if ($ri_images) {
	echo '<div class="rotating__inner carousel-inner" role="listbox">'.PHP_EOL;
	$ri_counter = 0;
	foreach ($ri_images as $ri_image) {
		echo '<div class="rotating__item carousel-item'.(($ri_counter == 0)?' active':'').'"><img class="d-block w-100 rotating__item--image" src="'.esc_url($ri_image['sizes']['large']).'" alt=""></div>'.PHP_EOL;
		$ri_counter++;
	}
	echo '</div>'.PHP_EOL;
	echo '<a class="rotating__nav rotating__nav--prev carousel-control-prev" href="#rotating__content" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>'.PHP_EOL;
	echo '<a class="rotating__nav rotating__nav--next carousel-control-next" href="#rotating__content" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>'.PHP_EOL;
	echo '<ol class="carousel-indicators rotating__indicators">'.PHP_EOL;
	$ri_ind_counter = 0;
	foreach ($ri_images as $ri_image_indicator) {
		echo '<li data-target="#rotating__content" data-slide-to="'.$ri_ind_counter.'" class="rotating__indicators--item'.(($ri_ind_counter == 0)?' active':'').'"></li>'.PHP_EOL;
		$ri_ind_counter++;
	}
	echo '</ol>'.PHP_EOL;
	wp_reset_postdata();
}
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;