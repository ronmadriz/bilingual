<?php
$banner_images = get_field('banner');
$size          = 'full';
?>
<section id="banner" class="banner">
  <div class="container-fluid">
	<div id="bannerSlides" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner row banner__slides" role="listbox">
			<figure class="carousel-item banner__slide active">
				<img src="https://demo.goodlayers.com/kingster/wp-content/uploads/2018/08/slider-1-2.jpg" alt="" class="img-fluid banner__image">
				<figcaption class="banner__caption">
					<span class="banner__subtitle subtitle text-capitalize">Kingster has more than</span>
					<h2 class="banner__title title">180 Majors &amp; Minors</h2>
					<a class="banner__button d-inline-block" href="#">Take a Tour</a>
				</figcaption>
			</figure>
			<figure class="carousel-item banner__slide">
				<img src="https://demo.goodlayers.com/kingster/wp-content/uploads/2018/08/slider-1-2.jpg" alt="" class="img-fluid banner__image">
				<figcaption class="banner__caption">
					<span class="banner__subtitle subtitle text-capitalize">The best university of the state</span>
					<h2 class="banner__title title">Kingster University</h2>
					<a class="banner__button d-inline-block" href="#">Take a Tour</a>
				</figcaption>
			</figure>
		</div>
		<a class="carousel-control-prev banner__nav" href="#bannerSlides" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
		<a class="carousel-control-next banner__nav" href="#bannerSlides" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
	</div>
  </div>
</section>
<?php ?>