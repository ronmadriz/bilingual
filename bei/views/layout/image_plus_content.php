<?php
$ipc_title   = get_sub_field('ipc_title');
$ipc_content = get_sub_field('ipc_content');
$ipc_image   = get_sub_field('ipc_image');
$ipc_button  = get_sub_field('ipc_button');
$ipc_size    = 'medium';
$ipc_thumb   = $ipc_image['sizes'][$ipc_size];
echo '<section id="ipc" class="ipc">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<style type="text/css">'.PHP_EOL;
echo '@media(min-width:786px) {'.PHP_EOL;
echo '.ipc__image {background-image:url('.$ipc_image['url'].')}'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</style>'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="ipc__content col-12 col-md-6">'.PHP_EOL;
echo '<span class="ipc__desc">'.PHP_EOL
echo '<span class="ipc__title section__title"><h2 class="section__title--text">'.$ipc_title.'</h2></span>'.PHP_EOL;
echo $ipc_content.PHP_EOL;
echo '</span>'.PHP_EOL;
echo (!empty($ipc_button)?'<span class="ipc__button">'.$ipc_button.'</span>'.PHP_EOL:'');
echo '</div>'.PHP_EOL;
echo '<div class="ipc__image col-12 col-md-6 text-sm-center"><img src="'.esc_url($ipc_thumb).'" alt="" class="img-fluid d-md-none"></div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;