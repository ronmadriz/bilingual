<?php
$banner_images = get_field('banner');
$size          = 'full';
echo '<section id="banner" class="banner">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div id="banner__slides" class="carousel slide" data-ride="carousel">'.PHP_EOL;
echo '<div class="carousel-inner row banner__slides" role="listbox">'.PHP_EOL;
echo '<figure class="carousel-item banner__slide h-100 align-items-center active">'.PHP_EOL;
echo '<img src="https://demo.goodlayers.com/kingster/wp-content/uploads/2018/08/slider-1-2.jpg" alt="" class="img-fluid banner__image">'.PHP_EOL;
echo '<figcaption class="banner__caption">'.PHP_EOL;
echo '<span class="banner__subtitle subtitle text-capitalize">Kingster has more than</span>'.PHP_EOL;
echo '<h2 class="banner__title title">180 Majors &amp; Minors</h2>'.PHP_EOL;
echo '<a class="banner__button d-inline-block" href="#">Take a Tour</a>'.PHP_EOL;
echo '</figcaption>'.PHP_EOL;
echo '</figure>'.PHP_EOL;
echo '<figure class="carousel-item banner__slide h-100 align-items-center">'.PHP_EOL;
echo '<img src="https://demo.goodlayers.com/kingster/wp-content/uploads/2018/08/slider-1-2.jpg" alt="" class="img-fluid banner__image">'.PHP_EOL;
echo '<figcaption class="banner__caption">'.PHP_EOL;
echo '<span class="banner__subtitle subtitle text-capitalize">The best university of the state</span>'.PHP_EOL;
echo '<h2 class="banner__title title">Kingster University</h2>'.PHP_EOL;
echo '<a class="banner__button d-inline-block" href="#">Take a Tour</a>'.PHP_EOL;
echo '</figcaption>'.PHP_EOL;
echo '</figure>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<a class="carousel-control-prev banner__nav" href="#bannerSlides" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>'.PHP_EOL;
echo '<a class="carousel-control-next banner__nav" href="#bannerSlides" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;

// USE LATER

/*$count++;
endforeach;
$count = 0;
foreach ($banner_images as $banner_image):?>

<?php if ($count == 0) {echo ' active';}?>

<?php echo $banner_image['url'];?>
<?php echo $banner_image['alt'];?>*/

?>