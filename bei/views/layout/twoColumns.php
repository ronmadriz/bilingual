<?php
$column_alignment     = get_sub_field('column_alignment');// True / False
$main_column_content  = get_sub_field('main_column_content');// Wysiwyg Editor
$main_column_flip     = get_sub_field('main_column_flip');// Repeater
$side_column_image    = get_sub_field('side_column_image');// Image
$side_column_img      = $side_column_image['size']['large'];
$side_column_articles = get_sub_field('side_column_articles');// Repeater

echo '<section id="twoColumns" class="twoColumns">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row twoColumns__wrapper">'.PHP_EOL;
echo '<div class="twoColumns__main col-12 col-md-7'.(($column_alignment == true)?' order-12':'').'">'.PHP_EOL;
echo '<div class="twoColumns__main--content">'.$main_column_content.'</div>'.PHP_EOL;
if (have_rows('main_column_flip')) {
	while (have_rows('main_column_flip')) {
		the_row();
		echo '<article class="twoColumns__flip">';
		echo '</article>'.PHP_EOL;
	}
}
echo '</div>'.PHP_EOL;

echo '<aside class="twoColumns__sidebar col-12 col-md-5">'.PHP_EOL;
echo (!empty($side_column_image)?'<span class="two_columns__image"><img src="'.$side_column_img.'" alt="" class="img-fluid two_columns__image--img"></span>':'');
if (have_rows('side_column_articles')) {
	while (have_rows('side_column_articles')) {
		the_row();
		echo '<article class="twoColumns__article">';
		echo '</article>'.PHP_EOL;
	}
}
echo '</aside>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;

/*
$side_column_image
 */