<?php
get_header();
$contentThumb = get_field('content_with_thumbnail');
include ('views/components/banner/subpages.php');
if ($contentThumb == 1) {
	include ('views/pages/default.php');
} else {
	include ('views/layout/content-with-thumbnail.php');
}
echo '<section id="tiled" class="tiled">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
include (get_template_directory().'/views/components/posts/promos.php');
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_footer();