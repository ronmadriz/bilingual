<?php
if (have_rows('tab')) {
	echo '<section id="tabbed" class="tabbed">'.PHP_EOL;
	while (have_rows('tab')) {
		the_row();
		echo '<div class="container">'.PHP_EOL;
		echo '<div class="row">'.PHP_EOL;
		echo '<div class="tabbed__wrapper col-12">'.PHP_EOL;
		$tab__item = get_sub_field('tab__item');
		if ($tab__item) {
			echo '<ul class="tabbed__items nav nav-pills nav-justified">'.PHP_EOL;
			$tab__count = 0;
			while (have_rows('tab__item')) {
				the_row();
				$tab__icon     = get_sub_field('tab__icon');
				$tab__title    = get_sub_field('tab__title');
				$tab__subtitle = get_sub_field('tab__subtitle');
				echo '<li class="nav-item tabbed__item"><a class="nav-link tabbed__button'.($tab__count == 0?' active':'').'" data-toggle="tab" href="#home__tab-'.$tab__count++ .'">'.PHP_EOL;
				echo '<img class="tabbed__icon img-fluid" src="'.get_stylesheet_directory_uri().'/sprites/'.$tab__icon.'.svg" alt="'.$tab__icon.'">'.PHP_EOL;
				echo '<span class="tabbed__text">'.PHP_EOL;
				echo '<h3 class="tabbed__title">'.$tab__title.'</h3>'.PHP_EOL;
				echo '<p class="tabbed__subtitle">'.$tab__subtitle.'</p>'.PHP_EOL;
				echo '</span></a></li>'.PHP_EOL;
			}
			wp_reset_query();
			echo '</ul>'.PHP_EOL;
			echo '<div class="tabbed__content tab-content">'.PHP_EOL;
			$tabpanel__count = 0;
			while (have_rows('tab__item')) {
				the_row();
				$tab__image   = get_sub_field('tab__image');
				$tab__content = get_sub_field('tab__content');
				$tab__button  = get_sub_field('tab__button');
				echo '<div class="tab-pane row tabbed__pane fade show'.($tabpanel__count == 0?' active':'').'" id="home__tab-'.$tabpanel__count++ .'" role="tabpanel">'.PHP_EOL;
				echo '<span class="tabbed__image"><img src="'.$tab__image['url'].'" alt="'.$tab__image['alt'].'" class="img-fluid"></span>'.PHP_EOL;
				echo '<span class="tabbed__details">'.PHP_EOL;
				echo $tab__content.PHP_EOL;
				echo (!empty($tab__button)?'<a class="tabbed__button button__green" href="'.$tab__button['url'].'">'.$tab__button['title'].'</a>'.PHP_EOL:'');
				echo '</span>'.PHP_EOL;
				echo '</div>'.PHP_EOL;
			}
			wp_reset_query();
			echo '</div>'.PHP_EOL;
		}
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</section>'.PHP_EOL;
}

?>