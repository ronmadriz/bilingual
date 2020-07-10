<?php
if (have_posts()) {
	echo '<section id="main-content" class="main-content">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		echo '<div class="row"><div id="content" class="col-12">';
		if (!is_404()) {
			the_content();
		} else {
			echo '<h1>Oops!</h1>'.PHP_EOL;
			echo '<p>Something seems to be wrong.</p>'.PHP_EOL;
		}
		echo '</div></div>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
