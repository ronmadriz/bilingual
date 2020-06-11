<?php
// Used on Program Schedules
if (have_rows('schedules')) {
	echo '<section id="schedule" class="schedule">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_rows('schedules')) {
		the_row();
		$schedule_title = get_sub_field('schedule_title');
		echo '<div class="row justify-content-end">'.PHP_EOL;
		echo '<div class="col-12 col-md-10">'.PHP_EOL;
		echo (!empty($schedule_title)?'<h3>'.$schedule_title.'</h3>'.PHP_EOL:'');
		echo '<table class="table">'.PHP_EOL;
		echo '<thead>'.PHP_EOL;
		echo '<tr>'.PHP_EOL;
		echo '<th>'.PHP_EOL;
		_e('Cycle # &amp; Year');
		echo '</th>'.PHP_EOL;
		echo '<th>'.PHP_EOL;
		_e('Start Date');
		echo '</th>'.PHP_EOL;
		echo '<th>'.PHP_EOL;
		_e('End Date');
		echo '</th></tr>'.PHP_EOL;
		echo '</thead>'.PHP_EOL;
		if (have_rows('schedule')) {
			echo '<tbody>'.PHP_EOL;
			while (have_rows('schedule')) {
				the_row();
				$cycle_info  = get_sub_field('cycle');
				$cycle_start = get_sub_field('start');
				$cycle_end   = get_sub_field('end');
				echo '<tr>'.PHP_EOL;
				echo '<td data-label="';
				_e('Cycle # &amp; Year');
				echo '">'.(!empty($cycle_info)?$cycle_info:'').'</td>'.PHP_EOL;
				echo '<td data-label="';
				_e('Start Date');
				echo '">'.(!empty($cycle_start)?$cycle_start:'').'</td>'.PHP_EOL;
				echo '<td data-label="';
				_e('End Date');
				echo '">'.(!empty($cycle_end)?$cycle_end:'').'</td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
			}
			wp_reset_postdata();
			echo '</tbody>'.PHP_EOL;
		}
		echo '</table>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}