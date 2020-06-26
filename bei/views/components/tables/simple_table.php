<?php
echo '<section id="simple_table" class="simple_table">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
$simple_table_section_title = get_sub_field('st_section_title');
echo (!empty($simple_table_section_title)?'<div class="row justify-content-end"><div class="col-12 section__title"><h2 class="section__title--text">'.$simple_table_section_title.'</h2></div></div>'.PHP_EOL:'');
if (have_rows('st_tables')) {
	echo '<div class="row">'.PHP_EOL;
	while (have_rows('st_tables')) {
		the_row();
		$simple_table_table = get_sub_field('simple_table');
		if (!empty($simple_table_table)) {
			echo '<div class="simple_table__wrapper col-12 col-md-6">'.PHP_EOL;
			if (!empty($simple_table_table['caption'])) {
				echo '<h3 class="simple_table__label">'.$simple_table_table['caption'].'</h3>'.PHP_EOL;
			}
			echo '<table class="table simple_table__table'.(!empty($simple_table_table['caption'])?' w_caption':'').'">'.PHP_EOL;
			if (!empty($simple_table_table['header'])) {
				echo '<thead>'.PHP_EOL;
				echo '<tr>'.PHP_EOL;
				foreach ($simple_table_table['header'] as $th) {
					echo '<th class="simple_table__headers" scope="col">';
					echo $th['c'];
					echo '</th>'.PHP_EOL;
				}
				echo '</tr>'.PHP_EOL;
				echo '</thead>'.PHP_EOL;
			}
			echo '<tbody>'.PHP_EOL;
			foreach ($simple_table_table['body'] as $tr) {
				echo '<tr class="simple_table__row">'.PHP_EOL;
				foreach ($tr as $key => $td) {
					echo '<td class="simple_table__data" data-label="'.$simple_table_table['header'][$key]['c'].'">';
					echo $td['c'];
					echo '</td>'.PHP_EOL;
				}
				echo '</tr>'.PHP_EOL;
			}
			echo '</tbody>'.PHP_EOL;
			echo '</table>'.PHP_EOL;
			echo '</div>'.PHP_EOL;
		}
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
