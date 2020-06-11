<?php
// Used on Program Schedules
if (have_rows('schedules')) {
	echo '<section id="schedule" class="schedule">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_rows('schedules')) {
		the_row();
		echo '<div class="row justify-content-end">'.PHP_EOL;
		echo '<div class="col-12 col-md-10">'.PHP_EOL;
		echo '<table class="table">'.PHP_EOL;
		echo '<caption>CAPTION</caption>'.PHP_EOL;
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
		echo '<tbody>'.PHP_EOL;
		echo '<tr>'.PHP_EOL;
		echo '<td>Value 1</td>'.PHP_EOL;
		echo '<td>Value 2</td>'.PHP_EOL;
		echo '<td>Value 3</td>'.PHP_EOL;
		echo '</tr>'.PHP_EOL;
		echo '</tbody>'.PHP_EOL;
		echo '</table>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}