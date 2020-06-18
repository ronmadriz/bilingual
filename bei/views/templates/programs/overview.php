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
	echo '<div class="programs__list col-12 col-md-7">'.PHP_EOL;
	echo '<ul>'.PHP_EOL;
	while ($program_query->have_posts()) {
		$program_query->the_post();
		echo '<li>'.get_the_title().'</li>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</ul>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}