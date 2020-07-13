<?php
$cta_title   = get_sub_field('cta_title');
$cta_content = get_sub_field('cta_content');
$cta_button  = get_sub_field('cta_button');
$cta_bgimg   = get_sub_field('cta_bgimg');

if ($cta_bgimg) {
	echo '<style>'.PHP_EOL;
	echo '.cta.withBg {'.PHP_EOL;
	echo 'background-image:url('.$cta_bgimg['url'].')'.PHP_EOL;
	echo '}'.PHP_EOL;
	echo '</style>'.PHP_EOL;
}
echo '<section id="cta" class="cta'.(!empty($cta_bgimg)?' withBg':'').'">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row cta__wrapper">'.PHP_EOL;
echo '<div class="col-12 cta__content">'.PHP_EOL;
echo (!empty($cta_title)?'<span class="cta__title"><h2 class="cta__title--text">'.$cta_title.'</h2></span>'.PHP_EOL:'');
echo (!empty($cta_content)?'<span class="cta__details">'.$cta_content.'</span>'.PHP_EOL:'');
echo (!empty($cta_button)?'<span class="cta__button"><a href="'.esc_url($cta_button['url']).'" class="cta__button--btn button__green">'.esc_html($cta_button['title']).'</a></span>'.PHP_EOL:'');
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
