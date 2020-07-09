<?php
$cal_meta_query = [
	[
		'key'     => 'acf-field-5eea531878ce1',
		'compare' => 'EXISTS',
	]
];

$calendar_args = array(
	// Type & Status Parameters
	'post_type'      => 'programs',
	'post_status'    => 'publish',
	'meta_query'     => $cal_meta_query,
	'order'          => 'DESC',
	'orderby'        => 'date',
	'posts_per_page' => 10,

);

$calendar_query = new WP_Query($calendar_args);

if ($calendar_query->have_posts()) {
	while ($calendar_query->have_posts()) {
		$calendar_query->the_post();
		$got_calendar = get_field('calendars_section');
		if (!empty($got_calendar)) {
			echo '<!-- got em -->'.PHP_EOL;
		}
	}
}