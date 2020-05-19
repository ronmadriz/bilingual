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
<?php if (!empty(get_the_content())):?>
    <div class="row">
      <div id="content" class="col"><?php the_content();?></div>
    </div>
<?php endif;?>
</div>
</section>
<?php endwhile;
endif;
?>
<?php get_footer();?>