<?
if (have_rows('tc_columns')) {
	$tc_column_count = 0;
	while (have_rows('tc_columns')) {
		the_row();
		$tc_column_one   = get_sub_field('tc_column_one');
		$tc_column_two   = get_sub_field('tc_column_two');
		$tc_column_three = get_sub_field('tc_column_three');
		echo '<section id="three_'.$tc_column_count.'" class="three">'.PHP_EOL;
		echo '<div class="container-fluid">'.PHP_EOL;
		echo '<div class="row three__wrapper">'.PHP_EOL;
		echo '<div class="three__item col-12 col-md-4">'.$tc_column_one.'</div>'.PHP_EOL;
		echo '<div class="three__item col-12 col-md-4">'.$tc_column_two.'</div>'.PHP_EOL;
		echo '<div class="three__item col-12 col-md-4">'.$tc_column_three.'</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '</section>'.PHP_EOL;
	}
	$tc_column_count++;
}
