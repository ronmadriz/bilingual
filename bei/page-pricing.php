<?php
/**
 * Template Name: Pricing
 *
 */
get_header();
$contentThumb = get_field('content_with_thumbnail');
include ('views/components/banner/subpages.php');

if ($contentThumb == 1) {
	include ('views/pages/default.php');
} else {
	include ('views/layout/content-with-thumbnail.php');
}
if (have_rows('plans')) {
	echo '<section id="plan" class="plan">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row plan__wrapper">'.PHP_EOL;
	while (have_rows('plans')) {
		the_row();
		$plan_name   = get_sub_field('plan_name');
		$plan_id_raw = preg_replace("/[^a-zA-Z]/", "_", $plan_name);
		$plan_id     = strtolower($plan_id_raw);

		$plan_desc   = get_sub_field('plan_desc');
		$plan_cost   = get_sub_field('plan_cost');
		$plan_button = get_sub_field('plan_button');
		echo '<article id="'.$plan_id.'" class="plan__item">'.PHP_EOL;
		echo '<header class="plan__header">'.PHP_EOL;
		echo '<h4 class="plan__header--text">'.$plan_name.'</h4>'.PHP_EOL;
		echo '<small>'.$plan_desc.'</small>'.PHP_EOL;
		echo '</header>'.PHP_EOL;
		echo '<div class="plan__content">'.PHP_EOL;
		echo '<span class="plan__cost">'.$plan_cost.'</span>'.PHP_EOL;
		echo '<footer class="plan__footer"><a href="https://beipaynow.securepayments.cardpointe.com/pay" class="plan__footer--link">Get Started</a></footer>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '</article>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>	'.PHP_EOL;
}

get_footer();