<?php
$gc_title   = get_sub_field('gc_title', $bei_fl_id);
$gc_content = get_sub_field('gc_content', $bei_fl_id);

$gc_id_raw = preg_replace("/[^a-zA-Z]/", "_", $gc_title);
$gc_id     = strtolower($gc_id_raw);
echo '<section id="content" class="gencontent">'.PHP_EOL;
echo '<div class="content-fluid">'.PHP_EOL;
echo '<div class="row align-content-center gencontent__wrapper">'.PHP_EOL;
echo '<div class="col-12 col-md-10 gencontent__content">'.PHP_EOL;
echo '<span class="gencontent__title">'.$gc_title.'</span>'.PHP_EOL;
echo '<span class="gencontent__desc">'.$gc_content.'</span>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;