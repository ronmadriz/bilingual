<?php
/**
 * Template Name: Search Page
 */
global $query_string;

wp_parse_str($query_string, $search_query);
$search = new WP_Query($search_query);

get_header();
$contentThumb = get_field('content_with_thumbnail');
echo '<section id="subbanner" class="subbanner">'.PHP_EOL;
echo '<div class="container-fluid subbanner__wrapper">'.PHP_EOL;
echo '<div class="row subbanner__row align-content-center">'.PHP_EOL;
echo '<div class="col-12 subbanner__content">'.PHP_EOL;
echo '<h1 class="subbanner__title">';
single_post_title();
echo '</h1>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
echo '<section id="main-content" class="main-content">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row"><div id="content" class="col-12 align-content-center justify-content-center">';
get_search_form();
echo '</div></div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;

echo '<section id="results" class="results">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row results__wrapper">'.PHP_EOL;
echo '<div class="col-12 section__title">'.PHP_EOL;
echo '<h2 class="section__title--text">Displaying Search Results For: ';
printf(esc_html__('%s', 'webdevors'), '<span>'.get_search_query().'</span>');
echo '</h2>'.PHP_EOL;
echo '</div>'.PHP_EOL;
if (have_posts()) {
	echo '<div class="row justify-content-center align-content-center results__content mb-2">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="results__item col-12 mt-1 mb-1">'.PHP_EOL;
		echo '<h4 class="results__title"><a class="results__link" href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h4>'.PHP_EOL;
		echo '<div class="results__summary">'.PHP_EOL;
		the_excerpt();
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
} else {
	echo '<div class="col-12 results__item">'.PHP_EOL;
	echo '<p class="results__message">';
	_e('Not what you&apos;re looking for? Start a new search:', 'bei_core');
	echo '</p>'.PHP_EOL;
	get_search_form();
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_footer();