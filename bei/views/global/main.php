<?php
if (have_posts()) {
	echo '<section id="main" class="main">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="row"><div class="page__title col-12"><h1 class="main__title">'.get_the_title().'</h1></div></div>'.PHP_EOL;
		the_breadcrumb();
		echo '<div class="row"><div class="page__content col-12">'.get_the_content().'</div></div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}