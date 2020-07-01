<?php
$ri_images = get_sub_field('ri_images');
echo '<section id="rotating" class="rotating">'.PHP_EOL;
echo '<div class="rotating__container container-fluid">'.PHP_EOL;
echo '<div class="rotating__wrapper row justify-content-center">'.PHP_EOL;
echo '<div id="rotating__content" class="rotating__content col-8 carousel slide carousel-fade" data-ride="carousel">'.PHP_EOL;
if ($ri_images) {
	echo '<div class="rotating__inner carousel-inner" role="listbox">'.PHP_EOL;
	$ri_counter = 0;
	foreach ($ri_images as $ri_image) {
		echo '<div class="rotating__item carousel-item'.(($ri_counter == 0)?' active':'').'"><img class="d-block w-100 rotating__item--image" src="'.esc_url($ri_image['sizes']['large']).'" alt=""></div>'.PHP_EOL;
		$ri_counter++;
	}
	echo '</div>'.PHP_EOL;
	echo '<a class="carousel-control-prev rotating__nav rotating__nav--prev" href="#rotating__slides" role="button" data-slide="prev"><img src="'.get_stylesheet_directory_uri().'/sprites/chevron.svg'.'" alt="" class="img-fluid"><span class="sr-only">Previous</span></a>'.PHP_EOL;
	echo '<a class="carousel-control-next rotating__nav rotating__nav--next" href="#rotating__slides" role="button" data-slide="next"><img src="'.get_stylesheet_directory_uri().'/sprites/chevron.svg'.'" alt="" class="img-fluid"><span class="sr-only">Next</span></a>'.PHP_EOL;
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
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;