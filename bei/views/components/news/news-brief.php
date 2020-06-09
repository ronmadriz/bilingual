<?php
echo '<section id="news" class="news-brief">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div id="brief" class="brief col-12 col-md-8">'.PHP_EOL;
?>
<h2 class="news-brief__title">News &amp; Updates</h2>
<p><a class="news-brief__link" href="#">Read All News</a></p>
<div class="row">
	<div class="brief__featured col-12 col-md-6">
		<span class="brief__image"><img src="https://via.placeholder.com/640x480" alt="featured story image" class="img-fluid"></span>
		<span class="brief__details"><date class="brief__date">JUNE 6, 2016</date> <a href="#" class="brief__category">ADMISSION</a>, <a href="#" class="brief__author">STUDENT</a></span>
		<h3 class="brief__title"><a href="#" class="brief__link">Professor Albert joint research on mobile money in Tanzania</a></h3>
	</div>
	<div class="brief__list col-12 col-md-6">
		<article class="brief__item">
			<span class="brief__image brief__item--image"><img src="https://via.placeholder.com/90" alt="featured story image" class="img-fluid"></span>
			<span class="brief__details brief__item--details"><date class="brief__date">JUNE 6, 2016</date> <a href="#" class="brief__category">ADMISSION</a>, <a href="#" class="brief__author">STUDENT</a></span>
			<h3 class="brief__title brief__item--title"><a href="#" class="brief__link">Professor Albert joint research on mobile money in Tanzania</a></h3>
		</article>
		<article class="brief__item">
			<span class="brief__image brief__item--image"><img src="https://via.placeholder.com/90" alt="featured story image" class="img-fluid"></span>
			<span class="brief__details brief__item--details"><date class="brief__date">JUNE 6, 2016</date> <a href="#" class="brief__category">ADMISSION</a>, <a href="#" class="brief__author">STUDENT</a></span>
			<h3 class="brief__title brief__item--title"><a href="#" class="brief__link">Professor Albert joint research on mobile money in Tanzania</a></h3>
		</article>
		<article class="brief__item">
			<span class="brief__image brief__item--image"><img src="https://via.placeholder.com/90" alt="featured story image" class="img-fluid"></span>
			<span class="brief__details brief__item--details"><date class="brief__date">JUNE 6, 2016</date> <a href="#" class="brief__category">ADMISSION</a>, <a href="#" class="brief__author">STUDENT</a></span>
			<h3 class="brief__title brief__item--title"><a href="#" class="brief__link">Professor Albert joint research on mobile money in Tanzania</a></h3>
		</article>
	</div>
</div>
<?
echo '</div>'.PHP_EOL;
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
