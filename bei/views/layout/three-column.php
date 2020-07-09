<?
$column_count = 0;
$column_one   = get_sub_field('column_one');
$column_two   = get_sub_field('column_two');
$column_three = get_sub_field('column_three');
echo '<section id="three_'.$column_count.'" class="three">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL
echo '<div class="row three__wrapper">'.PHP_EOL
echo '<div class="three__item col-12 col-md-4">'.$column_one.'</div>'.PHP_EOL;
echo '<div class="three__item col-12 col-md-4">'.$column_two.'</div>'.PHP_EOL;
echo '<div class="three__item col-12 col-md-4">'.$column_three.'</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
$column_count = ++;