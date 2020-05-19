<?php get_header(); ?>
<?php
    $pageID = get_the_id();
    $pageCF = get_post_custom($pageID);
?>
   <main>
    <div class="container">
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <?php the_content(); ?>
	    <?php endwhile; else: ?>
	    <?php endif; ?>
    </div>
   </main>
<?php get_footer(); ?>
  