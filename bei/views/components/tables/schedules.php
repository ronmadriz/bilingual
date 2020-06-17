<?php
// Used on Program Schedules
if (have_rows('schedules_section')) {
	while (have_rows('schedules_section')) {
		the_row();
		$schedule_section_title = get_sub_field('schedule_section_title');
		echo '<section id="schedule" class="schedule">'.PHP_EOL;
		echo '<div class="container-fluid">'.PHP_EOL;
		echo (!empty($schedule_section_title)?'<div class="row justify-content-end"><div class="col-12 schedule__title"><h2>'.$schedule_section_title.'</h2></div></div>'.PHP_EOL:'');
		if (have_rows('schedules')) {
			echo '<div class="row">'.PHP_EOL;
			while (have_rows('schedules')) {
				the_row();
				$schedule_title = get_sub_field('schedule_title');
				echo '<div class="schedule__wrapper col-12 col-md-6">'.PHP_EOL;
				echo (!empty($schedule_title)?'<h3 class="schedule__label">'.$schedule_title.'</h3>'.PHP_EOL:'');
				echo '<table class="table schedule__table">'.PHP_EOL;
				echo '<thead>'.PHP_EOL;
				echo '<tr>'.PHP_EOL;
				echo '<th class="schedule__headers">'.PHP_EOL;
				_e('Cycle # &amp; Year', 'bei_core');
				echo '</th>'.PHP_EOL;
				echo '<th class="schedule__headers">'.PHP_EOL;
				_e('Start Date', 'bei_core');
				echo '</th>'.PHP_EOL;
				echo '<th class="schedule__headers">'.PHP_EOL;
				_e('End Date', 'bei_core');
				echo '</th></tr>'.PHP_EOL;
				echo '</thead>'.PHP_EOL;
				if (have_rows('schedule')) {
					echo '<tbody>'.PHP_EOL;
					while (have_rows('schedule')) {
						the_row();
						$cycle_info  = get_sub_field('cycle');
						$cycle_start = get_sub_field('start');
						$cycle_end   = get_sub_field('end');
						echo '<tr class="schedule__row">'.PHP_EOL;
						echo '<td class="schedule__data">'.(!empty($cycle_info)?$cycle_info:'').'</td>'.PHP_EOL;
						echo '<td class="schedule__data" data-label="';
						_e('Start Date', 'bei_core');
						echo '">'.(!empty($cycle_start)?$cycle_start:'').'</td>'.PHP_EOL;
						echo '<td class="schedule__data" data-label="';
						_e('End Date', 'bei_core');
						echo '">'.(!empty($cycle_end)?$cycle_end:'').'</td>'.PHP_EOL;
						echo '</tr>'.PHP_EOL;
					}
					wp_reset_postdata();
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
	wp_reset_postdata();
}