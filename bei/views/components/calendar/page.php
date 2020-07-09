<?php
$cal_meta_query = [
	[
		'key'     => 'my_repeater_field_0_a_field_on_the_repeater',
		'compare' => 'EXISTS',
	]
];

$calendar_args = array(
	// Type & Status Parameters
	'post_type'   => 'programs',
	'post_status' => 'publish',
	// 'meta_query'     => $cal_meta_query,
	'order'          => 'DESC',
	'orderby'        => 'date',
	'posts_per_page' => 10,

);

$calendar_query = new WP_Query($calendar_args);

if ($calendar_query->have_posts()) {
	while ($calendar_query->have_posts()) {
		$calendar_query->the_post();
		echo '<!-- hi -->'.PHP_EOL;
	}
}