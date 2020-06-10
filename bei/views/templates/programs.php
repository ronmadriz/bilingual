<?php
if (have_posts()) {
	echo '<section id="summary" class="summary">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="col-12">'.PHP_EOL;
		echo '<h1 class="summary__title">'.get_the_title().'</h1>'.PHP_EOL;
		echo '<div class="summary__content">'.get_the_content().'</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
if (have_rows('subjects')) {
	echo '<section id="subjects" class="subjects">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	while (have_rows('subjects')) {
		the_row();
		$subject_icon  = get_sub_field('icon');
		$subject_title = get_sub_field('title');
		$subject_desc  = get_sub_field('description');
		echo '<div class="col-6 col-md-3">'.PHP_EOL;
		echo '<span class="icons__img">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/'.$subject_icon.'.svg').'</span>'.PHP_EOL;
		echo '<h3 class="icons__title">'.$subject_title.'</h3>'.PHP_EOL;
		echo '<p class="icons__desc">'.$subject_desc.'</p>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}