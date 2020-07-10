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
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}