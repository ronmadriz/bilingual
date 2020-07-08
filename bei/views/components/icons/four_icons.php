<?php
if (have_rows('fi_icon_group')) {
	echo '<section id="four_icons" class="four_icons">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row"><div class="col-12 four_icons__section"><h2>';
	_e('Core Subjects', 'bei_core');
	echo '</h2></div></div>'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	while (have_rows('fi_icon_group')) {
		the_row();
		$subject_icon  = get_sub_field('fi_icon');
		$subject_title = get_sub_field('fi_title');
		$subject_desc  = get_sub_field('fi_description');
		echo '<div class="four_icons__item col-6 col-md-3">'.PHP_EOL;
		echo (!empty($subject_icon)?'<span class="four_icons__img">'.file_get_contents(get_template_directory().'/sprites/'.$subject_icon.'.svg').'</span>'.PHP_EOL:'');
		echo '<h3 class="four_icons__title">'.$subject_title.'</h3>'.PHP_EOL;
		echo '<p class="four_icons__desc">'.$subject_desc.'</p>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
