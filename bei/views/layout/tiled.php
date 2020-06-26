<?php
$ti_section_title = get_sub_field('ti_section_title');
echo '<section id="tiled" class="tiled">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo (!empty($ti_section_title)?'<div class="row"><span class="section__title col-12"><h2 class="section__title--text">'.$ti_section_title.'</h2></span></div>'.PHP_EOL:'');
if (have_rows('tiles')) {
	echo '<div class="tiled__wrapper row">'.PHP_EOL;
	while (have_rows('tiles')) {
		the_row();
		$ti_title   = get_sub_field('ti_title');
		$ti_image   = get_sub_field('ti_image');
		$ti_content = get_sub_field('ti_content');
		$ti_link    = get_sub_field('ti_link');

		$ti_img_size  = 'medium';
		$ti_link_size = 'large';
		$ti_thumb     = $ti_image['sizes'][$ti_img_size];
		$ti_link_img  = $ti_image['sizes'][$ti_link_size];

		echo '<figure class="tiled__item card col-12 col-md-3">'.PHP_EOL;
		echo '<a href="'.$ti_link_img.'" class="tiled__image--link" data-toggle="lightbox" data-gallery="tiled-gallery"><img src="'.esc_url($ti_thumb).'" alt="'.$ti_image['alt'].'" class="tiled__image card-img-top img-fluid"></a>'.PHP_EOL;
		echo '<figcaption class="tiled__content">'.PHP_EOL;
		echo (!empty($ti_title)?'<span class="tiled__title"><h3 class="tiled__title--text card-title">'.$ti_title.'</h3></span>'.PHP_EOL:'');
		echo (!empty($ti_content)?'<span class="tiled__desc card-text">'.$ti_content.'</span>'.PHP_EOL:'');
		echo (!empty($ti_link)?'<a href="'.$ti_link['url'].'" class="tiled__link">'.$ti_link['title'].' <span class="tiled__link--icon">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/arrow.svg').'</span></a>'.PHP_EOL:'');
		echo '</figcaption>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
}
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;