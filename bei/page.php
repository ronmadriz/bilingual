<?php
$pageID = get_the_id();
$pageCF = get_post_custom($pageID);

get_header();
include ('views/pages/default.php');
get_footer();
