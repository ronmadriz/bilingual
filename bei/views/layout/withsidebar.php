<?php
$column_alignment     = get_sub_field('column_alignment');// True / False
$main_column_content  = get_sub_field('main_column_content');// Wysiwyg Editor
$main_column_flip     = get_sub_field('main_column_flip');// Repeater
$side_column_image    = get_sub_field('side_column_image');// Image
$side_column_articles = get_sub_field('side_column_articles');// Repeater

echo '<section class="wsb">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row wsb__wrapper">'.PHP_EOL;
echo '<div class="wsb__main col-12 col-md-7'.(($column_alignment == true)?' order-12':'').'">'.PHP_EOL;
echo '<div class="wsb__main--content">'.$main_column_content.'</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<aside class="wsb__sidebar col-12 col-md-5">'.PHP_EOL;
echo '</aside>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;

/*
$main_column_flip
$side_column_image
$side_column_articles
 */