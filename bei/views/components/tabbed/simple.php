<?php
$tab__item            = get_sub_field('tab__item');
$simple_section_title = get_sub_field('tab__section_title');
echo '<section id="simple_tabs" class="simple_tabs">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row"><div class="simple_tabs__title section__title col-12"><h2 class="simple_tabs__title--text section__title--text">'.$simple_section_title.'</h2></div></div>'.PHP_EOL;
echo '<div class="row justify-content-end">'.PHP_EOL;
echo '<div class="simple_tabs__wrapper col-12">'.PHP_EOL;
if ($tab__item) {
	echo '<ul class="simple_tabs__items nav nav-pills nav-justified">'.PHP_EOL;
	$tab__count = 0;
	while (have_rows('tab__item')) {
		the_row();
		$tab__title = get_sub_field('tab__title');
		echo '<li class="nav-item simple_tabs__item"><a class="nav-link simple_tabs__link'.($tab__count == 0?' active':'').'" data-toggle="tab" href="#simple_tabs__tab-'.$tab__count++ .'">'.PHP_EOL;
		echo '<span class="simple_tabs__title">'.$tab__title.'</span>'.PHP_EOL;
		echo '</a></li>'.PHP_EOL;
	}
	wp_reset_query();
	echo '</ul>'.PHP_EOL;
	echo '<div class="simple_tabs__content tab-content">'.PHP_EOL;
	$tabpanel__count = 0;
	while (have_rows('tab__item')) {
		the_row();
		$tab__content = get_sub_field('tab__content');
		echo '<div class="tab-pane row simple_tabs__pane fade show'.($tabpanel__count == 0?' active':'').'" id="simple_tabs__tab-'.$tabpanel__count++ .'" role="tabpanel">'.PHP_EOL;
		echo '<div class="simple_tabs__details order-12">'.PHP_EOL;
		echo $tab__content.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_query();
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
?>
