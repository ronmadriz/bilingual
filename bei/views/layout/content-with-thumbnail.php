<?php
$pageID = get_the_id();
$pageCF = get_post_custom($pageID);
if (have_posts()) {
	echo '<section id="main" class="main">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<header>'.PHP_EOL;
		//		echo '<h1 class="main__title">'.get_the_title().'</h1>'.PHP_EOL;
		echo '<div class="breadcrumbs__content">'.PHP_EOL;
		if (!is_home()) {
			the_breadcrumb();
		}
		echo '</div>'.PHP_EOL;
		echo '</header>'.PHP_EOL;
		if ('' !== get_post()->post_content) {
			echo '<div class="row">'.PHP_EOL;
			echo '<div class="main__thumbnail col-12 col-md-4">'.get_the_post_thumbnail($pageID, 'large', array('class' => 'img-fluid')).'</div>'.PHP_EOL;
			echo '<div class="main__content col-12 col-md-8">';
			the_content();
			echo '</div>'.PHP_EOL;
			echo '</div>'.PHP_EOL;
		}
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
