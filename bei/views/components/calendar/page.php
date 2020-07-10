<?php
/*
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
$got_calendar = get_field('calendars_section');
if (!empty($got_calendar)) {
echo '<!-- got em -->'.PHP_EOL;
}
}
 */

$cal_posts = get_posts(array(
		'posts_per_page' => -1,
		'post_type'      => 'programs',
	));

if ($cal_posts) {
	foreach ($cal_posts as $cal_post) {
		setup_postdata($cal_post);
		echo '<!-- hi -->'.PHP_EOL;
		// include (get_template_directory().'/views/components/tables/calendars.php');
	}
}
