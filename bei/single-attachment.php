<?php
$pageID = get_the_id();
$pageCF = get_post_custom($pageID);
get_header();
?>
<?php if (have_posts()):while (have_posts()):the_post();?>
<section id="main-content">
  <div class="container">
    <div class="row">
      <div id="title"><h1><?php the_title();?></h1></div>
    </div>
    <div class="row">
      <div id="image" class="col-12"><?php if (wp_attachment_is_image($post->id)):$att_image = wp_get_attachment_image_src($post->id, "full");?></div>
    </div>
<?php if (has_excerpt()):?>
    <div class="row">
      <div id="content" class="col-12"><?php the_content();?></div>
    </div>
<?php endif;?>
</div>
</section>
<?php endwhile;
endif;
?>
<?php get_footer();?>
