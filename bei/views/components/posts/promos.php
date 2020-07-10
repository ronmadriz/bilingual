<?php
$promos_args = arrays(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name'    => 'blog',
		'posts_per_page'         => 10,
);
$promos_query = new WP_Query( $promos_args );

if ($promos_query->have_posts()) {
	echo '<div class="tiled__wrapper row">'.PHP_EOL;
	while ($promos_query->have_posts()) {
		the_post();
		$promos_post = get_the_ID($promos_query);
		$promos_th - get_the_post_thumbnail( $promos_post,'medium');
		echo '<figure class="tiled__item card col-12 col-md-3">'.PHP_EOL;
		echo '<a href="'.get_the_permalink($promos_post).'" class="tiled__image--link" data-toggle="lightbox" data-gallery="tiled-gallery">'.$promos_th.'</a>'.PHP_EOL;
		echo '<figcaption class="tiled__content">'.PHP_EOL;
		echo (!empty($ti_title)?'<span class="tiled__title"><h3 class="tiled__title--text card-title">'.$ti_title.'</h3></span>'.PHP_EOL:'');
		echo (!empty($ti_content)?'<span class="tiled__desc card-text">'.$ti_content.'</span>'.PHP_EOL:'');
		echo (!empty($ti_link)?'<a href="'.$ti_link['url'].'" class="tiled__link">'.$ti_link['title'].' <span class="tiled__link--icon">'.file_get_contents(get_template_directory().'/sprites/arrow.svg').'</span></a>'.PHP_EOL:'');
		echo '</figcaption>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
}*/