<?php
echo '<section id="twoItemFeature" class="twoItemFeature">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row temFeature__wrapper">'.PHP_EOL;
if (have_rows('first_item')) {
	echo '<div class="twoItemFeature__wrapper col-12">'.PHP_EOL;
	while (have_rows('first_item')) {
		the_row();
		$tif_1__icon    = get_sub_field('tif_1_icon');
		$tif_1__title   = get_sub_field('tif_1_title');
		$tif_1__content = get_sub_field('tif_1_content');
		echo '<div class="twoItemFeature__item">'.PHP_EOL;
		echo '<span class="twoItemFeature__icon">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/'.$tif_1__icon.'.svg').'</span>'.PHP_EOL;
		echo '<h2 class="twoItemFeature__title">'.$tif_1__title.'</h2>'.PHP_EOL;
		echo '<span class="twoItemFeature__content">'.$tif_1__content.'</span>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div class="row twoItemFeature__wrapper">'.PHP_EOL;
if (have_rows('second_item')) {
	echo '<div class="twoItemFeature__content col-12">'.PHP_EOL;
	while (have_rows('second_item')) {
		the_row();
		$tif_2__icon    = get_sub_field('tif_2_icon');
		$tif_2__title   = get_sub_field('tif_2_title');
		$tif_2__content = get_sub_field('tif_2_content');
		echo '<div class="twoItemFeature__item">'.PHP_EOL;
		echo '<span class="twoItemFeature__icon">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/'.$tif_2_icon.'.svg').'</span>'.PHP_EOL;
		echo '<h2 class="twoItemFeature__title">'.$tif_2_title.'</h2>'.PHP_EOL;
		echo '<span class="twoItemFeature__content">'.$tif_2_content.'</span>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;