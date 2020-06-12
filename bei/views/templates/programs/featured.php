<?php
if (have_rows('featured')) {
	echo '<section id="featured" class="featured">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_rows('featured')) {
		the_row();
		$featured_item_title   = get_sub_field('featured_item_title');
		$featured_item_content = get_sub_field('featured_item_content');
		$featured_item_image   = get_sub_field('featured_item_image');
		echo '<style type="text/css">'.PHP_EOL;
		echo '.featured__image {background-image:url('.$featured_item_image['url'].')}'.PHP_EOL;
		echo '</style>'.PHP_EOL;
		echo '<div class="row">'.PHP_EOL;
		echo '<div class="featured__content col-12 col-md-6">'.PHP_EOL;
		echo '<span class="featured__desc">'.$featured_item_content.'</span>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '<div class="featured__image col-12 col-md-6"><img src="'.esc_url($featured_item_image['url']['medium']).'" alt="" class="img-fluid d-md-none"></div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}