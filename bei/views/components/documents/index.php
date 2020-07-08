<?php

$dc_group = get_sub_field('dc_group');

echo '<section id="documents" class="documents">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row documents__wrapper">'.PHP_EOL;
if (have_rows('dc_group')) {
	while (have_rows('dc_group')) {
		the_row();
		$dc_title     = get_sub_field('dc_title');
		$dc_documents = get_sub_field('dc_documents');
		echo '<div class="document__group col-12 col-md-6">'.PHP_EOL;
		echo '<span class="document__group__title"><h3 class="document__group__title--text">Group Title</h3></span>'.PHP_EOL;
		if (have_rows('dc_document')) {
			echo '<ul class="document__list">'.PHP_EOL;
			while (have_rows('dc_document')) {
				the_row();
				$dc_document = get_sub_field('dc_document');
				$dc_url      = $dc_document['url'];
				$dc_title    = $dc_document['title'];
				$dc_caption  = $dc_document['caption'];
				$dc_icon     = $dc_document['icon'];
				echo '<li class="document__item"><a href="'.esc_attr($dc_url).'" class="document__link"><abbr title="file type" class="document__icon"><img src="'.esc_attr($dc_icon).'" /></abbr> - '.esc_html($dc_title).'</a></li>'.PHP_EOL;
			}
			wp_reset_postdata();
			echo '</ul>'.PHP_EOL;
		}
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
}
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
