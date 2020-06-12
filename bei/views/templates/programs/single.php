<?php
$pageID = get_the_id();
$pageCF = get_post_custom($pageID);
if (have_posts()) {
	echo '<section id="main" class="main">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<header>'.PHP_EOL;
		echo '<h1 class="main__title">'.get_the_title().'</h1>'.PHP_EOL;
		echo '<div class="breadcrumbs__content">'.PHP_EOL;
		the_breadcrumb();
		echo '</header>'.PHP_EOL;
		echo '<div class="row">'.PHP_EOL;
		echo '<div class="main__thumbnail col-12 col-md-4">'.get_the_post_thumbnail($pageID, 'large', array('class' => 'img-fluid')).'</div>'.PHP_EOL;
		echo '<div class="main__content col-12 col-md-8">'.get_the_content().'</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}?>
<section id="block" class="block">
	<div class="container-fluid">
		<div class="row">
			<div class="block__item col-6 col-md-3">
				<span class="block__desc">Hours 20/Week</span>
			</div>
			<div class="block__item col-6 col-md-3">
				<span class="block__desc">Free Tutoring</span>
			</div>
			<div class="block__item col-6 col-md-3">
				<span class="block__desc">F-Visa Eligible</span>
			</div>
			<div class="block__item col-6 col-md-3">
				<span class="block__desc">9 Levels</span>
			</div>
		</div>
	</div>
</section>
<?
include ('subjects.php');
include ('schedules.php');
include ('featured.php');