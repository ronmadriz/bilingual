<?php
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