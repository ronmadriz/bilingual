<?php
if (have_rows('sidebar_ads')) {
	echo '<div class="ad side">'.PHP_EOL;
	echo '<div class="ad__wrapper">'.PHP_EOL
	while (have_rows('sidebar_ads')) {
		the_row();
		$ad_title   = get_sub_field('ad_title');
		$ad_excerpt = get_sub_field('ad_excerpt');
		$ad_link    = get_sub_field('ad_link');
		$ad_img     = get_sub_field('ad_image');
		$ad_size    = 'medium';
		$ad_image   = $ad_img['sizes'][$ad_size];
		echo '<figure class="ad__item">'.PHP_EOL;
		echo '<a href="'.$ad_link['url'].'" class="ad__link"><img src="'.$ad_image.'" class="img-fluid ad__image"></a>'.PHP_EOL;
		echo '<figcaption>'.PHP_EOL;
		echo '<span class="ad__title"><h3 class="ad__title--txt">'.$ad_title.'</h3></span>'.PHP_EOL;
		echo '<span class="ad__desc">'.$ad_excerpt.'</span>'.PHP_EOL;
		echo '<span class="ad__button">'.PHP_EOL;
		echo '<a href="'.$ad_link['url'].'" class="ad__link">'.$ad_link['title'].'</a>'.PHP_EOL;
		echo '</span>'.PHP_EOL;
		echo '</figcaption>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
}