<?php
$banner_images = get_field('banner');
$size          = 'full';
if (have_rows('banner')) {
	echo '<section id="banner" class="banner">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_rows('banner')) {
		the_row();
		echo '<div id="banner__slides" class="carousel slide" data-ride="carousel">'.PHP_EOL;
		if (have_rows('slides')) {
			echo '<div class="carousel-inner row banner__slides" role="listbox">'.PHP_EOL;
			$slide__count = 0;
			while (have_rows('slides')) {
				the_row();
				$subtitle = get_sub_field('subtitle');
				$title    = get_sub_field('title');
				$button   = get_sub_field('button');
				$image    = get_sub_field('image');
				echo '<figure class="carousel-item banner__slide h-100 align-items-center '.($slide__count == 0?' active':'').'">'.PHP_EOL;
				echo '<img src="https://demo.goodlayers.com/kingster/wp-content/uploads/2018/08/slider-1-2.jpg" alt="" class="img-fluid banner__image">'.PHP_EOL;
				echo '<figcaption class="banner__caption">'.PHP_EOL;
				echo (!empty($subtitle)?'<span class="banner__subtitle subtitle text-capitalize">'.$subtitle.'</span>'.PHP_EOL:'');
				echo (!empty($title)?'<h2 class="banner__title title">'.$title.'</h2>'.PHP_EOL:'');
				echo (!empty($button)?'<a class="banner__button d-inline-block" href="'.$button['url'].'">'.$button['title'].'</a>'.PHP_EOL:'');
				echo '</figcaption>'.PHP_EOL;
				echo '</figure>'.PHP_EOL;
				$slide__count++;
			}
			echo '</div>'.PHP_EOL;
		}
		echo '<a class="carousel-control-prev banner__nav banner__nav--prev" href="#banner__slides" role="button" data-slide="prev"><img src="'.get_stylesheet_directory_uri().'/sprites/chevron.svg'.'" alt="" class="img-fluid"><span class="sr-only">Previous</span></a>'.PHP_EOL;
		echo '<a class="carousel-control-next banner__nav banner__nav--next" href="#banner__slides" role="button" data-slide="next"><img src="'.get_stylesheet_directory_uri().'/sprites/chevron.svg'.'" alt="" class="img-fluid"><span class="sr-only">Next</span></a>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;

}

// USE LATER

/*
endforeach;
$count = 0;
foreach ($banner_images as $banner_image):?>

<?php ?>

<?php echo $banner_image['url'];?>
<?php echo $banner_image['alt'];?>*/

?>