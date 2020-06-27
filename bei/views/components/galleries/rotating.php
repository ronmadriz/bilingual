<?php
echo '<section id="rotating" class="rotating">'.PHP_EOL;
echo '<div class="rotating__container container-fluid">'.PHP_EOL;
echo '<div class="rotating__wrapper row">'.PHP_EOL;
$ri_images = get_sub_field('ri_images');
if ($ri_images) {
	echo '<div id="rotating__content" class="rotating__content col-12 carousel slide carousel-fade" data-ride="carousel">'.PHP_EOL;
	echo '<div class="rotating__inner carousel-inner" role="listbox">'.PHP_EOL;

	echo '</ol>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;