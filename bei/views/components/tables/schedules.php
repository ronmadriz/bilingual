<?php
// Used on Program Schedules
if (have_rows('schedules_section')) {
	echo '<section id="schedule" class="schedule">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_rows('schedules_section')) {
		the_row();
		$schedule_section_title = get_sub_field('schedule_section_title');
		echo (!empty($schedule_section_title)?'<div class="row justify-content-end"><div class="col-12 schedule__title"><h2>'.$schedule_section_title.'</h2></div></div>'.PHP_EOL:'');
		if (have_rows('schedules')) {
			echo '<div class="row">'.PHP_EOL;
			while (have_rows('schedules')) {
				the_row();
				$schedule_table = get_sub_field('schedule');
				echo '<div class="schedule__wrapper col-12 col-md-6">'.PHP_EOL;
				if (!empty($schedule_table)) {
					if (!empty($schedule_table['caption'])) {
						echo '<h3 class="schedule__label">'.$schedule_table['caption'].'</h3>';
					}
					echo '<table class="table schedule__table'.(!empty($schedule_table['caption'])?' w_caption':'').'">'.PHP_EOL;
					if (!empty($schedule_table['header'])) {
						echo '<thead>';
						echo '<tr>';
						foreach ($schedule_table['header'] as $th) {
							echo '<th class="schedule__headers" scope="col">';
							echo $th['c'];
							echo '</th>';
						}
						echo '</tr>';
						echo '</thead>';
					}
					echo '<tbody>';
					foreach ($schedule_table['body'] as $tr) {
						echo '<tr class="schedule__row">';
						foreach ($tr as $key => $td) {
							echo '<td class="schedule__data" data-label="'.$schedule_table['header'][$key]['c'].'">';
							echo $td['c'];
							echo '</td>';
						}
						echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>';
				}
			}
			wp_reset_postdata();
			echo '</div>'.PHP_EOL;
		}
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}