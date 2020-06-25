<?php
 	$qt_title = get_sub_field('title', $bei_fl_id);
 	$qt_boxes = get_sub_field('boxes', $bei_fl_id);
 	$qt_content = get_sub_field('content', $bei_fl_id);
	echo '<section id="quotes" class="quotes">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row quotes__wrapper">'.PHP_EOL;
	echo '<div class="col-12 quotes__content">'.PHP_EOL;
	echo '<span class="quotes__title"><h2 class="quotes__title--text">'.$qt_title.'</h2></span>'.PHP_EOL;
	if(have_rows('boxes')){
		echo '<ul class="quotes__boxes list-unstyled list-inline">'.PHP_EOL;
		while(have_rows('boxes')){
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