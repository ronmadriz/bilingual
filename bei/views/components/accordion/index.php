<?php
$acc_title = get_sub_field('csection_title', $bei_fl_id);

$acc_id_raw = preg_replace("/[^a-zA-Z]/", "_", $acc_title, $bei_fl_id);
$acc_id     = strtolower($acc_id_raw);

echo '<section id="'.$acc_id.'" class="accordion">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row"><div class="section__title col-12"><h2 class="section__title--text">'.$acc_title.'</h2></div></div>'.PHP_EOL;
if (have_rows('acc_accordion_item')) {
	echo '<div class="row">'.PHP_EOL;
	echo '<div id="'.$acc_id.'-accordion" class="accordion__wrapper col-12">'.PHP_EOL;
	$acc_counter = 0;
	while (have_rows('acc_accordion_item')) {
		the_row();
		$acc_item_title   = get_sub_field('acc_item_title');
		$acc_item_content = get_sub_field('acc_item_content');
		$acc_item_id_raw  = preg_replace("/[^a-zA-Z]/", "_", $acc_item_title);
		$acc_item_id      = strtolower($acc_item_id_raw);
		echo '<div class="card accordion__item">'.PHP_EOL;
		echo '<div class="card-header accordion__header" id="'.$acc_item_id.'-'.$acc_counter.'">'.PHP_EOL;
		echo '<button class="btn btn-link" data-toggle="collapse" data-target="#'.$acc_item_id.'_content" aria-expanded="'.(($acc_counter == 0?'true':'false')).'" aria-controls="'.$acc_item_id.'_content">'.$acc_item_title.'</button>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '<div id="'.$acc_item_id.'_content" class="collapse show  accordion__content" aria-labelledby="'.$acc_item_id.'" data-parent="#'.$acc_id.'-accordion">'.PHP_EOL;
		echo '<div class="card-body accordion__desc">'.PHP_EOL;
		echo $acc_item_content;
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		$acc_counter++;
	}
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;