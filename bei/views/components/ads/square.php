<?php
if (have_rows('sidebar_ads')) {
	echo '<div class="ad side">'.PHP_EOL;
	while (have_rows('sidebar_ads')) {
		the_row();
		echo '<figure class="ad__wrapper">'.PHP_EOL;
		echo '<figcaption>'.PHP_EOL;
		echo '<span class="ad__title"><h3 class="ad__title--txt">'.get_the_title().'</h3></span>'.PHP_EOL;
		echo '<span class="ad__desc">'.PHP_EOL;
		the_excerpt();
		echo '</span>'.PHP_EOL;
		echo '<span class="ad__button">'.PHP_EOL;
		echo '<a href="#" class="ad__link">Learn More</a>'.PHP_EOL;
		echo '</span>'.PHP_EOL;
		echo '</figcaption>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
}