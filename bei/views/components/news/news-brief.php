<?php
echo '<section id="news" class="news-brief">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
$featured_brief_args = array(
	'post_type'      => 'post',
	'posts_per_page' => '1',
);
$featured_brief_query = new WP_query($featured_brief_args);
if ($featured_brief_query->have_posts()) {
	echo '<div id="brief" class="brief col-12 col-md-8">'.PHP_EOL;
	echo '<h2 class="news-brief__title">';
	_e('News &amp; Updates', 'bei_core');
	echo '</h2>'.PHP_EOL;
	echo '<p><a class="news-brief__link" href="#">';
	_e('Read All News', 'bei_core');
	echo '</a></p>'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	while ($featured_brief_query->have_posts()) {
		$featured_brief_query->the_post();
		echo '<div class="brief__featured col-12 col-md-6">'.PHP_EOL;
		echo '<span class="brief__image"><img src="https://via.placeholder.com/640x480" alt="featured story image" class="img-fluid"></span>'.PHP_EOL;
		echo '<span class="brief__details"><date class="brief__date">JUNE 6, 2016</date> <a href="#" class="brief__category">ADMISSION</a>, <a href="#" class="brief__author">STUDENT</a></span>'.PHP_EOL;
		echo '<h3 class="brief__title"><a href="#" class="brief__link">Professor Albert joint research on mobile money in Tanzania</a></h3>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	rewind_posts();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
}
echo '<div id="quick" class="quick col-12 col-md-4">'.PHP_EOL;
echo '<h3 class="quick__title">';
echo '<span class="quick__icon">'.file_get_contents(get_template_directory_uri().'/sprites/link.svg').'</span> ';
_e('Quick Links', 'bei_core');
echo '</h3>'.PHP_EOL;
echo '<ul class="quick__list">'.PHP_EOL;
echo '<li class="quick__item"><a href="#" class="quick__link">Do you like to Learn Spanish?</a></li>'.PHP_EOL;
echo '<li class="quick__item"><a href="#" class="quick__link">#BEIOnline #BEIStrong</a></li>'.PHP_EOL;
echo '<li class="quick__item"><a href="#" class="quick__link">Our Promotion</a></li>'.PHP_EOL;
echo '<li class="quick__item"><a href="#" class="quick__link">About Change of StatusCorona Virus Update</a></li>'.PHP_EOL;
echo '</ul>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
