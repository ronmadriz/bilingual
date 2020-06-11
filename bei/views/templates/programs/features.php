<?php
if (have_rows('featured')) {
	echo '<section id="featured" class="featured">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	while (have_rows('features')) {
		the_row();
		$featured_item_title   = get_sub_field('featured_item_title');
		$featured_item_content = get_sub_field('featured_item_content');
		echo '<div class="featured__content col-12 col-md-6">'.PHP_EOL;
		echo '<h3 class="featured__title">'.$feature_item_title.'</h3>'.PHP_EOL;
		echo '<span class="featured__desc">'.$feature_item_title.'</span>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}