<?php
// do not set any of these to a class of ad(s) or advertisement(s) ad blockers will not show it

if (have_rows('sidebar_ads')) {
	echo '<div class="special side">'.PHP_EOL;
	echo '<div class="special__wrapper">'.PHP_EOL;
	while (have_rows('sidebar_ads')) {
		the_row();
		$special__title   = get_sub_field('ad_title');
		$special__excerpt = get_sub_field('ad_excerpt');
		$special__link    = get_sub_field('ad_link');
		$special__img     = get_sub_field('ad_image');
		$special__size    = 'medium';
		$special__image   = $special__img['sizes'][$special__size];
		echo '<figure class="special__item">'.PHP_EOL;
		echo '<a href="'.$special__link['url'].'" class="special__link"><img class="img-fluid special__image" src="'.$special__image.'"></a>'.PHP_EOL;
		echo '<figcaption>'.PHP_EOL;
		echo '<span class="special__title"><h3 class="special__title--txt">'.$special__title.'</h3></span>'.PHP_EOL;
		echo '<span class="special__desc">'.$special__excerpt.'</span>'.PHP_EOL;
		echo '<span class="special__button">'.PHP_EOL;
		echo '<a href="'.$special__link['url'].'" class="special__link">'.$special__link['title'].'</a>'.PHP_EOL;
		echo '</span>'.PHP_EOL;
		echo '</figcaption>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
}