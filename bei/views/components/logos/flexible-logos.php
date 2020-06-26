<?php
$fl_logos_title = get_sub_field('fl_logos_title');
echo '<section id="logos" class="logos">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo (!empty($fl_logos_title)?'<span class="section__title"><h2 class="section__title--text">'.$fl_logos_title.'</h2></span>'.PHP_EOL:'');
echo '<div class="row align-content-center text-center">'.PHP_EOL;
if (have_rows('logos')) {
	while (have_rows('logos')) {
		the_row();
		$fl_logo      = get_sub_field('logo_image');
		$fl_logo_link = get_sub_field('logo_link');
		echo '<div class="col-6 col-md-3 logos__item">';
		echo (!empty($fl_logo_link)?'<a href="'.$fl_logo_link['url'].'" rel="nofollow">':'');
		echo '<img src="'.$fl_logo['url'].'" alt="'.$fl_logo['alt'].'" class="logos_image img-fluid"></div>'.PHP_EOL;
		echo (!empty($fl_logo_link)?'</a>':'');
	}
}
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;