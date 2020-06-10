<?php
if (have_posts()) {
	echo '<section id="summary" class="summary">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		the_title();
		the_content();
	}
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}