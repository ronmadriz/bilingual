<?php while (have_rows('subjects')) {
	the_row();
	$subject_icon  = get_sub_field('icon');
	$subject_title = get_sub_field('title');
	$subject_desc  = get_sub_field('description');
	echo '<div class="subjects__item col-6 col-md-3">'.PHP_EOL;
	echo (!empty($subject_icon)?'<span class="subjects__img">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/'.$subject_icon.'.svg').'</span>'.PHP_EOL:'');
	echo '<h3 class="subjects__title">'.$subject_title.'</h3>'.PHP_EOL;
	echo '<p class="subjects__desc">'.$subject_desc.'</p>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
}
wp_reset_postdata();