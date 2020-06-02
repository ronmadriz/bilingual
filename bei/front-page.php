<?php
$pageID = get_the_id();
$pageCF = get_post_custom($pageID);
get_header();
?>
<?php
$banner_images = get_field('banner');
$size          = 'full';// (thumbnail, medium, large, full or custom size)
if (have_posts()):while (have_posts()):the_post();?>
<!-- hi -->
<?php
endwhile;
endif;
?>
<?php get_footer();?>