<?php
$page_content = get_the_content();
include (get_template_directory().'/views/banner/subpages.php');
if (have_posts()) {
	echo '<section id="main-content">'.PHP_EOL;
	echo '<div class="container">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="row"><div id="content" class="col">'.$page_content.'</div></div>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}