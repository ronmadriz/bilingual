<?php
if (has_post_thumbnail()) {
	echo '<style type="text/css">'.PHP_EOL;
	echo '#banner {background-image:url('.get_the_post_thumbnail_url().');}'.PHP_EOL;
	echo '</style>'.PHP_EOL;
}
echo '<section id="banner" class="landing_banner">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row landing_banner__wrapper">'.PHP_EOL;
echo '<div class="landing_banner__content col-12">'.PHP_EOL;
echo '<span class="landing_banner__title"><h1 class="landing_banner__title--text">'.get_the_title().'</h1></span>'.PHP_EOL;
echo '<span class="landing_banner__desc">';
the_content();
echo '</span>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;