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
	'order'          => 'ASC',
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
				if (have_rows('calendars', $cal_post_id)) {
					echo '<div class="row">'.PHP_EOL;
					while (have_rows('calendars', $cal_post_id)) {
						the_row();
						$calendar_title = get_sub_field('calendar_title', $cal_post_id);
						echo '<div class="calendar__wrapper col-12 col-md-6">'.PHP_EOL;
						echo (!empty($calendar_title)?'<h3 class="calendar__label">'.$calendar_title.'</h3>'.PHP_EOL:'');
						echo '<table class="table calendar__table">'.PHP_EOL;
						echo '<thead>'.PHP_EOL;
						echo '<tr>'.PHP_EOL;
						echo '<th class="calendar__headers">'.PHP_EOL;
						_e('Cycle # &amp; Year', 'bei_core');
						echo '</th>'.PHP_EOL;
						echo '<th class="calendar__headers">'.PHP_EOL;
						_e('Start Date', 'bei_core');
						echo '</th>'.PHP_EOL;
						echo '<th class="calendar__headers">'.PHP_EOL;
						_e('End Date', 'bei_core');
						echo '</th></tr>'.PHP_EOL;
						echo '</thead>'.PHP_EOL;
						if (have_rows('calendar', $cal_post_id)) {
							echo '<tbody>'.PHP_EOL;
							while (have_rows('calendar', $cal_post_id)) {
								the_row();
								$cycle_info  = get_sub_field('cycle', $cal_post_id);
								$cycle_start = get_sub_field('start', $cal_post_id);
								$cycle_end   = get_sub_field('end', $cal_post_id);
								echo '<tr class="calendar__row">'.PHP_EOL;
								echo '<td class="calendar__data">'.(!empty($cycle_info)?$cycle_info:'').'</td>'.PHP_EOL;
								echo '<td class="calendar__data" data-label="Start Date">'.(!empty($cycle_start)?$cycle_start:'').'</td>'.PHP_EOL;
								echo '<td class="calendar__data" data-label="End Date">'.(!empty($cycle_end)?$cycle_end:'').'</td>'.PHP_EOL;
								echo '</tr>'.PHP_EOL;
							}
							echo '</tbody>'.PHP_EOL;
						}
						echo '</table>'.PHP_EOL;
						echo '</div>'.PHP_EOL;
					}
					wp_reset_postdata();
					echo '</div>'.PHP_EOL;
				}
				echo '</div>'.PHP_EOL;
				echo '</section>'.PHP_EOL;
			}
		}
	}
	wp_reset_postdata();
}
