<?php
	echo '<section id="logos" class="logos">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row align-content-center text-center">'.PHP_EOL;
	$fl_logos = get_sub_field('logos');
	if ($fl_logos) {
		foreach ($fl_logos as $fl_logo) {
			echo '<div class="col-6 col-md-3 logos_item"><img src="'.$fl_logo['url'].'" alt="'.$fl_logo['alt'].'" class="logos_image img-fluid"></div>'.PHP_EOL;
		}
	}
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;