<?php
if (have_rows('blocks')) {
	echo '<section id="block" class="block">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row block__wrapper">'.PHP_EOL;
	echo '<div class="col-12 block__content">'.PHP_EOL;
	while (have_rows('blocks')) {
		the_row();
		$program__blocks = get_sub_field('block');
		echo '<div class="block__item">'.PHP_EOL;
		echo '<span class="block__desc">'.$program__blocks.'</span>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
