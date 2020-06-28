<?php
$column_alignment     = get_sub_field('column_alignment');// True / False
$main_column_content  = get_sub_field('main_column_content');// Wysiwyg Editor
$main_column_flip     = get_sub_field('main_column_flip');// Repeater
$side_column_image    = get_sub_field('side_column_image');// Image
$side_column_img      = $side_column_image['sizes']['large'];
$side_column_articles = get_sub_field('side_column_articles');// Repeater

echo '<section id="twoColumns" class="twoColumns">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row twoColumns__wrapper">'.PHP_EOL;
echo '<div class="twoColumns__main col-12 col-md-7">'.PHP_EOL;
echo '<article class="twoColumns__main--content">'.PHP_EOL;
echo $main_column_content;
echo '</article>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div class="twoColumns__flip cards col-12 col-md-7">'.PHP_EOL;
if (have_rows('main_column_flip')) {
	echo '<a class="cards__wrapper">'.PHP_EOL;
	echo '<div class="twoColumns__flip--wrapper cards__body">'.PHP_EOL;
	$flipcount = 0;
	while (have_rows('main_column_flip')) {
		the_row();
		$mcf_icon    = get_sub_field('mcf_icon');
		$mcf_title   = get_sub_field('mcf_title');
		$mcf_content = get_sub_field('mcf_content');
		echo '<article class="twoColumns__flip--inner '.(($flipcount == 0)?'cards__front':'cards__back').'">';
		echo (!empty($mcf_icon)?'<span class="twoColumns__flip--icon">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/'.$mcf_icon.'.svg').'</span>'.PHP_EOL:'');
		echo '<h2 class="twoColumns__flip--title">'.$mcf_title.'</h2>'.PHP_EOL;
		echo '<span class="twoColumns__flip--content">'.$mcf_content.'</span>'.PHP_EOL;
		echo '</article>'.PHP_EOL;
		$flipcount++;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</a>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;

echo '<aside class="twoColumns__sidebar col-12 col-md-5'.(($column_alignment == true)?' order-1':' order-12').'">'.PHP_EOL;
echo (!empty($side_column_image)?'<span class="twoColumns__image"><img src="'.$side_column_img.'" alt="" class="img-fluid two_columns__image--img"></span>':'');
if (have_rows('side_column_articles')) {
	while (have_rows('side_column_articles')) {
		the_row();
		$sca_icon    = get_sub_field('sca_icon');
		$sca_title   = get_sub_field('sca_title');
		$sca_content = get_sub_field('sca_content');
		echo '<article class="twoColumns__article">';
		echo '<h2 class="twoColumns__article--title">'.(!empty($sca_icon)?'<span class="twoColumns__article--icon">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/'.$sca_icon.'.svg').'</span> ':'').$sca_title.'</h2>'.PHP_EOL;
		echo '<span class="twoColumns__article--content">'.$sca_content.'</span>'.PHP_EOL;
		echo '</article>'.PHP_EOL;
	}
	wp_reset_postdata();
}
echo '</aside>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
