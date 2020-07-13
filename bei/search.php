<?php
/**
 * Template Name: Search Page
 */
get_header();
$contentThumb = get_field('content_with_thumbnail');
include ('views/components/banner/subpages.php');
echo '<section id="main-content" class="main-content">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row"><div id="content" class="col-12">';
get_search_form();
echo '</div></div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_footer();