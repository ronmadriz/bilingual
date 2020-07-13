<?php
$gcwb_title   = get_sub_field('gcwb_title', $bei_fl_id);
$gcwb_content = get_sub_field('gcwb_content', $bei_fl_id);

$gcwb_id_raw = preg_replace("/[^a-zA-Z]/", "_", $gcwb_title);
$gcwb_id     = strtolower($gcwb_id_raw);
echo '<section id="'.$gcwb_id.'" class="gencontent">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row gencontent__wrapper">'.PHP_EOL;
echo '<div class="col-12 gencontent__content">'.PHP_EOL;
echo '<span class="gencontent__title section__title"><h2 class="section__title--text">'.$gcwb_title.'</h2></span>'.PHP_EOL;
echo '<span class="gencontent__desc">'.$gcwb_content.'</span>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
if (have_rows('gcwb_boxes')) {
	echo '<div class="row align-content-center gencontent__boxes">'.PHP_EOL;
	while (have_rows('gcwb_boxes')) {
		the_row();
		$gcwb_box_icon    = get_sub_field('gcwb_box_icon');
		$gcwb_box_title   = get_sub_field('gcwb_box_title');
		$gcwb_box_content = get_sub_field('gcwb_box_content');
		echo '<div class="gencontent__boxes--item col-12 col-md-4">'.PHP_EOL;
		echo '<span class="gencontent__boxes--icon">'.file_get_contents(get_template_directory().'/sprites/'.$gcwb_box_icon.'.svg').'</span>'.PHP_EOL;
		echo '<h4 class="gencontent__boxes--title">'.$gcwb_box_title.'</h4>'.PHP_EOL;
		echo '<span class="gencontent__boxes--desc">'.$gcwb_box_content.'</span>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
