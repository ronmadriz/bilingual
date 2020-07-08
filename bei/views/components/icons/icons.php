<?php
if (have_rows('icons')) {
	echo '<section id="icons" class="icons">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	while (have_rows('icons')) {
		the_row();
		$icons_icon   = get_sub_field('icon');
		$icons_title  = get_sub_field('title');
		$icons_desc   = get_sub_field('desc');
		$icons_button = get_sub_field('button');
		echo '<div class="icons__item col-6 col-md-3">'.PHP_EOL;
		// echo '<img class="" src="'.get_stylesheet_directory_uri().'/sprites/'.$icons_icon.'.svg" alt="'.$icons_icon.'" class="img-fluid">'.PHP_EOL;
		echo '<span class="icons__img">'.file_get_contents(get_template_directory_uri().'sprites/'.$icons_icon.'.svg').'</span>'.PHP_EOL;
		echo '<h3 class="icons__title">'.$icons_title.'</h3>'.PHP_EOL;
		echo '<p class="icons__desc">'.$icons_desc.'</p>'.PHP_EOL;
		echo (!empty($icons_button)?'<a class="icons__button" href="'.$icons_button['url'].'">'.$icons_button['title'].'</a>'.PHP_EOL:'');
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
