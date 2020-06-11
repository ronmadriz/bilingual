<?php
if (have_rows('simple_tabs')) {
	while (have_rows('simple_tabs')) {
		the_row();
		$tab__item = get_sub_field('tab__item');
		if ($tab__item) {
			echo '<ul class="simple_tabs__items nav nav-pills nav-justified">'.PHP_EOL;
			$tab__count = 0;
			while (have_rows('tab__item')) {
				the_row();
				$tab__title    = get_sub_field('tab__title');
				$tab__subtitle = get_sub_field('tab__subtitle');
				echo '<li class="nav-item simple_tabs__item"><a class="nav-link simple_tabs__button'.($tab__count == 0?' active':'').'" data-toggle="tab" href="#home__tab-'.$tab__count++ .'">'.PHP_EOL;
				echo '<span class="simple_tabs__text">'.PHP_EOL;
				echo '<h3 class="simple_tabs__title">'.$tab__title.'</h3>'.PHP_EOL;
				echo '<p class="simple_tabs__subtitle">'.$tab__subtitle.'</p>'.PHP_EOL;
				echo '</span></a></li>'.PHP_EOL;
			}
			wp_reset_query();
			echo '</ul>'.PHP_EOL;
			echo '<div class="simple_tabs__content tab-content">'.PHP_EOL;
			$tabpanel__count = 0;
			while (have_rows('tab__item')) {
				the_row();
				$tab__content = get_sub_field('tab__content');
				echo '<div class="tab-pane row simple_tabs__pane fade show'.($tabpanel__count == 0?' active':'').'" id="home__tab-'.$tabpanel__count++ .'" role="tabpanel">'.PHP_EOL;
				echo '<div class="simple_tabs__details order-12">'.PHP_EOL;
				echo $tab__content.PHP_EOL;
				echo '</div>'.PHP_EOL;
				echo '</div>'.PHP_EOL;
			}
			wp_reset_query();
			echo '</div>'.PHP_EOL;
		}
	}
	wp_reset_postdata();
}
?>