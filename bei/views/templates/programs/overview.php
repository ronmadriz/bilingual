<?php
$program_args = array(
	'post_type'   => 'programs',
	'post_status' => 'publish',
);
$program_query = new WP_Query($program_args);
if ($program_query->have_posts()) {
	echo '<section id="main" class="programs">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	echo '<div class="programs__content col-12 col-md-7">'.PHP_EOL;
	echo '<ul class="programs__list">'.PHP_EOL;
	while ($program_query->have_posts()) {
		$program_query->the_post();
		echo '<li class="programs__item"><a href="'.get_the_permalink().'" class="programs__link">'.get_the_title().'</a></li>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</ul>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}