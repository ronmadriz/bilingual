<?php
if (has_post_thumbnail()) {
	echo '<style type="text/css">'.PHP_EOL;
	echo '#banner {background-image:url('.get_the_post_thumbnail_url().');}'.PHP_EOL;
	echo '</style>'.PHP_EOL;
}
echo '<section id="banner" class="landing">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row landing__wrapper">'.PHP_EOL;
echo '<div class="landing__content col-12">'.PHP_EOL;
echo '<span class="landing__title"><h1 class="landing__title--text">'.get_the_title().'</h1></span>'.PHP_EOL;
echo '<span class="landing__desc">';
the_content();
echo '</span>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;