<?php
$pageID = get_the_id();
$pageCF = get_post_custom($pageID);
get_header();
include ('../components/banner/home.php')
get_footer();
?>