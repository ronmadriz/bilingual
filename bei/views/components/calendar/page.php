<?php
$calendar_args = array(
	// Type & Status Parameters
	'post_type'   => 'programs',
	'post_status' => 'publish',
	'meta_query'  => array(
		'relation'   => 'AND',
		array(
			'key'     => 'calendars_section',
			'compare' => 'IN',
		)
	),
	'order'          => 'DESC',
	'orderby'        => 'date',
	'posts_per_page' => 10,

);

$calendar_query = new WP_Query($calendar_args);

if ($calendar_query->have_posts()) {
	while ($calendar_query->have_posts()) {
		$calendar_query->the_post();
		$cal_post_id = get_the_ID($calendar_query);
		if (have_rows('calendars_section', $cal_post_id)) {
			while (have_rows('calendars_section', $cal_post_id)) {
				the_row();
				$calendar_section_title = get_sub_field('section_title', $cal_post_id);
				echo '<section id="calendar" class="calendar">'.PHP_EOL;
				echo '<div class="container-fluid">'.PHP_EOL;
				echo (!empty($calendar_section_title)?'<div class="row justify-content-end"><div class="col-12 calendar__title"><h2>'.$calendar_section_title.'</h2></div></div>'.PHP_EOL:'');
				if (have_rows('calendars')) {
					echo '<div class="row">'.PHP_EOL;

					echo '</div>'.PHP_EOL;
				}
				echo '</div>'.PHP_EOL;
				echo '</section>'.PHP_EOL;
			}
		}
	}
	wp_reset_postdata();
}
