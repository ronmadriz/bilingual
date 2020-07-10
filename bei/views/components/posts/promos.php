<?php
$promos_args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name'    => 'blog',
	'posts_per_page'         => 10,
);
$promos_query = new WP_Query( $promos_args );

if ($promos_query->have_posts()) {
	echo '<div class="tiled__wrapper row">'.PHP_EOL;
	while ($promos_query->have_posts()) {
		$promos_query->the_post();
		// $promos_link = get_the_permalink();
		// $promos_th - get_the_post_thumbnail('medium');
		echo '<figure class="tiled__item card col-12 col-md-3">'.PHP_EOL;
		echo '<a href="'.$promos_link.'" class="tiled__image--link" data-toggle="lightbox" data-gallery="tiled-gallery">'.$promos_th.'</a>'.PHP_EOL;
		echo '<figcaption class="tiled__content">'.PHP_EOL;
		echo '<span class="tiled__title"><h3 class="tiled__title--text card-title">'.$promos_title.'</h3></span>'.PHP_EOL:'');
		echo '<span class="tiled__desc card-text">';
		the_content($promos_post);
		echo '</span>'.PHP_EOL:'');
		echo '<a href="'.$promos_link.'" class="tiled__link">';
		_e('Read More', 'bei_core');
		echo ' <span class="tiled__link--icon">'.file_get_contents(get_template_directory().'/sprites/arrow.svg').'</span></a>'.PHP_EOL:'');
		echo '</figcaption>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
}