<?php
if (have_posts()) {
	echo '<section id="main-content" class="main-content">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="row"><div class="breadcrumbs__content">'.PHP_EOL;
		if (!is_home()) {
			the_breadcrumb();
		}
		echo '</div></div>'.PHP_EOL;
		echo '<div class="row"><div id="content" class="col-12">';
		the_content();
		echo '</div></div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
