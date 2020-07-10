<?php
// WP_Query arguments
$promos_args = array(
	'post_type'   => array('post'),
	'post_status' => array('publish'),
);

// The Query
$promos_query = new WP_Query($promos_args);

if ($promos_query->have_posts()) {
	echo '<section id="tiled" class="tiled">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="tiled__wrapper row">'.PHP_EOL;
	while ($promos_query->have_posts()) {
		$promos_query->the_post();
		$promos_title = get_the_title();
		echo '<figure class="tiled__item card col-12 col-md-3">'.PHP_EOL;
		echo '<a href="'.get_the_permalink().'" class="tiled__image--link">';
		the_post_thumbnail('medium');
		echo '</a>'.PHP_EOL;
		echo '<figcaption class="tiled__content">'.PHP_EOL;
		echo '<span class="tiled__title"><h3 class="tiled__title--text card-title">'.$promos_title.'</h3></span>'.PHP_EOL;
		echo '<a href="'.get_the_permalink().'" class="tiled__link">';
		_e('Read More', 'bei_core');
		echo ' <span class="tiled__link--icon">'.file_get_contents(get_template_directory().'/sprites/arrow.svg').'</span></a>'.PHP_EOL;
		echo '</figcaption>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}