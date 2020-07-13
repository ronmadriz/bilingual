<?php
/**
 * Template Name: Search Page
 */
global $query_string;

wp_parse_str($query_string, $search_query);
$search = new WP_Query($search_query);

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