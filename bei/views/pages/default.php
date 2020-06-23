<?php
if (have_posts()) {
	include (get_template_directory().'/views/components/banner/subpages.php');
	echo '<section id="main-content" class="main-content">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="row"><div id="content" class="col-12">';
		the_content();
		echo '</div></div>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
