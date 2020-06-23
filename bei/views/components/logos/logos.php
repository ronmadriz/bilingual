<?php
if (have_rows('logo_strip')) {
	echo '<section id="logos" class="logos">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_rows('logo_strip')) {
		the_row();
		echo '<div class="row align-content-center text-center">'.PHP_EOL;
		$partner_logos = get_sub_field('logos');
		if ($partner_logos) {
			foreach ($partner_logos as $partner_logo) {
				echo '<div class="col-6 col-md-3 logos_item"><img src="'.$partner_logo['url'].'" alt="'.$partner_logo['alt'].'" class="logos_image img-fluid"></div>'.PHP_EOL;
			}
		}
		echo '</div>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
