<?php
if (have_posts()) {
	echo '<section id="main" class="main">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="col-12">'.PHP_EOL;
		echo '<h1 class="main__title">'.get_the_title().'</h1>'.PHP_EOL;
		echo '<div class="main__content">'.get_the_content().'</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}