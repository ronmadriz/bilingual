<?
$tr_title   = get_sub_field('tr_title');
$tr_content = get_sub_field('tr_content');

$tr_id_raw = preg_replace("/[^a-zA-Z]/", "_", $tr_title);
$tr_id     = strtolower($tr_id_raw);

echo '<section id="text_right" class="text_right">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="text_right__wrapper row">'.PHP_EOL;
echo '<span class="text_right__title col-12"><h2 class="text_right__title--text">'.$tr_title.'</h2></span>'.PHP_EOL;
echo '<span class="text_right__desc col-12">'.$tr_content.'</span>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
