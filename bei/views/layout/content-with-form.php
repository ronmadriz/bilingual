<?php
$cwf_title      = get_sub_field('cwf_title');
$cwf_content    = get_sub_field('cwf_content');
$cwf_form_title = get_sub_field('cwf_form_title');
$cwf_form       = get_sub_field('cwf_form');
echo '<section id="content-with-form" class="cwf twoColumns">'.PHP_EOL;
echo '<div class="container-fluid twoColumns__wrapper">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<span class="cwf__title"><h2 class="cwf__title--text">'.$cwf_title.'</h2></span>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div class="row twoColumns__main">'.PHP_EOL;

echo '<div class="cwf__content twoColumns__main--content col-12 col-md-6">'.PHP_EOL;
echo $cwf_content.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div class="cwf__form col-12 col-md-6 twoColumns__sidebar">'.PHP_EOL;
echo '<span class="cwf__form__title"><h3 class="class="cwf__form__title--text">'.$cwf_form_title.'</h3></span>'.PHP_EOL;
echo $cwf_form;
echo '</div>'.PHP_EOL;

echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;