<?php
// ID of the current item in the WordPress Loop
$bei_fl_id = get_the_ID();
if (have_rows('page_builder', $bei_fl_id)) {
	while (have_rows('page_builder', $bei_fl_id)){
		the_row();
		if (get_row_layout() == 'imagebar') {
				echo '<section id="imagebar" class="imagebar">'.PHP_EOL;
				echo '<div class="container-fluid imagebar__wrapper">'.PHP_EOL;
				echo '<div class="row">'.PHP_EOL;
			 	$ib_image = get_sub_field('image', $bei_fl_id);
			 	$ib_content = get_sub_field('content', $bei_fl_id);
			 	$ib_link = get_sub_field('link', $bei_fl_id);
				echo '<figure class="imagebar__content">'.PHP_EOL;
				echo '<img src="'.$ib_image['url'].'" alt="'.$ib_image['alt'].'" class="imagebar__image">'.PHP_EOL;
				echo '<figcaption class="imagebar__details">'.PHP_EOL;
				echo $ib_content;
				echo (!empty($ib_link)?'<footer class="imagebar__button"><a href="'.$ib_link['url'].'" class="button__green">'.$ib_link['title'].'</a></footer>'.PHP_EOL:'');
				echo '</figcaption>'.PHP_EOL;
				echo '</figure>'.PHP_EOL;
				echo '</div>'.PHP_EOL;
				echo '</div>'.PHP_EOL;
				echo '</section>'.PHP_EOL;	
			// include (get_template_directory().'/views/layout/imagebar.php');
			// get_template_part('views/layout/imagebar.php', 'imagebar');
		}
	}
}