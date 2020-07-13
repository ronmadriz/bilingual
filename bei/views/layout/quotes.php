<?php
$qt_title   = get_sub_field('qt_title', $bei_fl_id);
$qt_boxes   = get_sub_field('qt_boxes', $bei_fl_id);
$qt_content = get_sub_field('qt_content', $bei_fl_id);

$qt_id_raw = preg_replace("/[^a-zA-Z]/", "_", $qt_title, $bei_fl_id);
$qt_id     = strtolower($qt_id_raw);
echo '<section id="'.$qt_id.'" class="quotes">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row quotes__wrapper">'.PHP_EOL;
echo '<div class="col-12 quotes__content">'.PHP_EOL;
echo '<span class="section__title"><h2 class="section__title--text">'.$qt_title.'</h2></span>'.PHP_EOL;
if (have_rows('qt_boxes')) {
	echo '<ul class="quotes__boxes list-unstyled list-inline">'.PHP_EOL;
	while (have_rows('qt_boxes')) {
		the_row();
		$qt_box_text = get_sub_field('qt_box_text');
		echo '<li class="quotes__boxes--item list-inline-item">'.$qt_box_text.'</li>'.PHP_EOL;
	}
	echo '</ul>'.PHP_EOL;
}
echo '<span class="quotes__desc">'.PHP_EOL;
echo $qt_content;
echo '</span>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
