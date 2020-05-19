<?php
$pageID = get_the_id();
$pageCF = get_post_custom($pageID);
get_header();
?>
<?php
$banner_images = get_field('banner');
$size          = 'full';// (thumbnail, medium, large, full or custom size)
if ($banner_images):?>
<section id="banner">
  <div class="container-fluid">
    <div class="row">
		<div id="bannerSlides" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner row w-100 fixme" role="listbox">
<?php $count = 0;
foreach ($banner_images as $banner_image):?>
			<div class="carousel-item col-md-4 align-middle <?php if ($count == 0) {echo ' active';}?>">
				<img src="<?php echo $banner_image['url'];?>" alt="<?php echo $banner_image['alt'];?>" class="img-fluid mx-auto my-auto d-block">
			</div>
<?php $count++;
endforeach;?>
</div>
			<a class="carousel-control-prev" href="#bannerSlides" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
			<a class="carousel-control-next" href="#bannerSlides" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
		</div>
    </div>
  </div>
</section>
<?php endif;?>
<?php if (have_posts()):while (have_posts()):the_post();?>
<!-- hi -->
<?php
endwhile;
endif;
?>
<?php get_footer();?>