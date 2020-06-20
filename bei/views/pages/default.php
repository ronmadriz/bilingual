<?php
$page_content = get_the_content();
if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<section id="main-content">'.PHP_EOL;
		echo '<div class="container">'.PHP_EOL;
		echo '<div class="row">'.PHP_EOL;
		echo '<div id="title"><h1>'.get_the_title().'</h1></div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		if (!empty($page_content) {
			echo '<div class="row">'.PHP_EOL;
			echo '<div id="content" class="col">'.$page_content.'</div>'.PHP_EOL;
			echo '</div>'.PHP_EOL;
		}
		echo '</div>'.PHP_EOL;
		echo '</section>'.PHP_EOL;
	}
}