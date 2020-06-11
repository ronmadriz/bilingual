<?php
$pageID = get_the_id();
$pageCF = get_post_custom($pageID);
if (have_posts()) {
	echo '<section id="main" class="main">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="row"><div class="col-12 col-md-8"><h1 class="main__title">'.get_the_title().'</h1></div></div>'.PHP_EOL;
		echo '<div class="row"><div class="col-12 col-md-8 breadcrumbs__content">'.PHP_EOL;
		the_breadcrumb();
		echo '</div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		echo '<div class="row"><div class="main__thumbnail col-12 col-md-4">'.get_the_post_thumbnail($pageID, 'medium', array('class' => 'alignleft')).'</div></div>'.PHP_EOL;
		echo '<div class="row"><div class="main__content col-12 col-md-8">'.get_the_content().'</div></div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
include ('subjects.php');
include ('tabs.php');
include (get_template_directory().'/views/components/schedules/table.php');
include ('featured.php');