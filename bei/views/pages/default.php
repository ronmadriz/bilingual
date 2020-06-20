<?php
$page_content = get_the_content();
if (have_posts()) {
	include (get_template_directory().'/views/components/banner/subpages.php');
	echo '<section id="main-content">'.PHP_EOL;
	echo '<div class="container">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="row"><div id="content" class="col">'.$page_content.'</div></div>'.PHP_EOL;
	}
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}