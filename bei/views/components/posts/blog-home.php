<?php
$news_args = array(
	'category__not_in' => 17,
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'paged'            => get_query_var('paged'),
);

$news_query = new WP_Query($news_args);

echo '<section id="main" class="main news">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<header>'.PHP_EOL;
echo '<div class="breadcrumbs__content">'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</header>'.PHP_EOL;
if ($news_query->have_posts()) {
	echo '<div class="row news__wrapper">'.PHP_EOL;
	while ($news_query->have_posts()) {
		$news_query->the_post();
		echo '<article class="col-12 col-md-3 d-block news__item">'.PHP_EOL;
		echo '<header class="news__header">';
		echo '<span class="news__image"><a href="'.get_the_permalink().' class="news__image--link">'.PHP_EOL;
		the_post_thumbnail('medium', ['class' => 'img-fluid news__image--img']);
		echo '</a></span>'.PHP_EOL;
		echo '<span class="news__title"><h3 class="news__title--text"><a href="'.get_the_permalink().'" class="news__title--link">';
		the_title();
		echo '</a></h3></span>'.PHP_EOL;
		echo '<span class="news__details"><date class="news__date">'.get_the_date().'</date> ';
		the_category(' ');
		echo '</span>'.PHP_EOL;
		echo '</header>'.PHP_EOL;
		echo '<footer class="news__footer buttons">'.PHP_EOL;
		echo '<a href="'.$ti_link['url'].'" class="news__link">';
		_e('Read More', 'bei_core');
		echo ' <span class="news__link--icon">'.file_get_contents(get_template_directory().'/sprites/arrow.svg').'</span></a>'.PHP_EOL;
		echo '</footer>'.PHP_EOL;
		echo '</article>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
