<?php
$ib_id_raw = preg_replace("/[^a-zA-Z]/", "_", $ib_title);
$ib_id     = strtolower($ib_id_raw);

echo '<section id="'.$ib_id.'" class="infoblocks">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
if (have_rows('ib_blocks')) {
	echo '<div class="infoblocks__content col-12">'.PHP_EOL;
	while (have_rows('ib_blocks')) {
		the_row();
		$info__icon    = get_sub_field('ib_icon');
		$info__title   = get_sub_field('ib_title');
		$info__content = get_sub_field('ib_content');
		echo '<div class="infoblocks__item">'.PHP_EOL;
		echo '<span class="infoblocks__icon">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/'.$info__icon.'.svg').'</span>'.PHP_EOL;
		echo '<h2 class="infoblocks__title">'.$info__title.'</h2>'.PHP_EOL;
		echo '<span class="infoblocks__content">'.$info__content.'</span>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;