<?php
// Used on Program calendars
if (have_rows('calendars_section')) {
	while (have_rows('calendars_section')) {
		the_row();
		$calendar_section_title = get_sub_field('section_title');
		echo '<section id="calendar" class="calendar">'.PHP_EOL;
		echo '<div class="container-fluid">'.PHP_EOL;
		echo (!empty($calendar_section_title)?'<div class="row justify-content-end"><div class="col-12 calendar__title"><h2>'.$calendar_section_title.'</h2></div></div>'.PHP_EOL:'');
		if (have_rows('calendars')) {
			echo '<div class="row">'.PHP_EOL;
			while (have_rows('calendars')) {
				the_row();
				$calendar_title = get_sub_field('calendar_title');
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
				if (have_rows('calendar')) {
					echo '<tbody>'.PHP_EOL;
					while (have_rows('calendar')) {
						the_row();
						$cycle_info  = get_sub_field('cycle');
						$cycle_start = get_sub_field('start');
						$cycle_end   = get_sub_field('end');
						echo '<tr class="calendar__row">'.PHP_EOL;
						echo '<td class="calendar__data">'.(!empty($cycle_info)?$cycle_info:'').'</td>'.PHP_EOL;
						echo '<td class="calendar__data" data-label="';
						_e('Start Date', 'bei_core');
						echo '">'.(!empty($cycle_start)?$cycle_start:'').'</td>'.PHP_EOL;
						echo '<td class="calendar__data" data-label="';
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
