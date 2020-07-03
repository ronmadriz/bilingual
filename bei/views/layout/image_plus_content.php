<?
echo '<section id="featured" class="featured">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
while (have_rows('featured')) {
	the_row();
	$ipc_title   = get_sub_field('ipc_title');
	$ipc_content = get_sub_field('ipc_content');
	$ipc_image   = get_sub_field('ipc_image');
	$ipc_button  = get_sub_field('ipc_button');
	$ipc_size    = 'medium';
	$ipc_thumb   = $ipc_image['sizes'][$ipc_size];

	echo '<style type="text/css">'.PHP_EOL;
	echo '@media(min-width:786px) {'.PHP_EOL;
	echo '.featured__image {background-image:url('.$ipc_image['url'].')}'.PHP_EOL;
	echo '}'.PHP_EOL;
	echo '</style>'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	echo '<div class="featured__content col-12 col-md-6">'.PHP_EOL;
	echo '<span class="featured__title">'.$ipc_title.'</span>'.PHP_EOL;
	echo '<span class="featured__desc">'.$ipc_content.'</span>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '<div class="featured__image col-12 col-md-6 text-sm-center"><img src="'.esc_url($ipc_thumb).'" alt="" class="img-fluid d-md-none"></div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
}
wp_reset_postdata();
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;