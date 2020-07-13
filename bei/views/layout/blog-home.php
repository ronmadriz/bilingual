<?php
$args = array(
	'category__not_in' => array( 1, 2 ),
	'post_type' => 'post',
	'post_status' => 'publish',
	'paged'                  => get_query_var( 'paged' ),
);

$query = new WP_Query( $args );


echo '<section id="main" class="main news">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<header>'.PHP_EOL;
echo '<div class="breadcrumbs__content">'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</header>'.PHP_EOL;
if (have_posts()) {
	echo '<div class="row news__wrapper">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		$news__itemID = get_the_id();
		echo '<article class="col-12 news__item">'.PHP_EOL;
		echo '<header class="news__header">'.PHP_EOL;
		the_post_thumbnail($news__itemID, 'post-thumbnail', ['class' => 'img-responsive responsive--full'] );
		echo '</header>'.PHP_EOL;
		echo '<footer class="news__footer buttons">'.PHP_EOL;
		echo '<a href="'.get_the_permalink($news__itemID).'>';
		_e('Read More', 'bei_core')
		echo '</a>'.PHP_EOL;
		echo '</footer>'.PHP_EOL;
		echo '</article>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
