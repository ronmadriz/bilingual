<?php
get_header();
$contentThumb = get_field('content_with_thumbnail');
include ('views/components/banner/landing.php');
include ('views/pages/default.php');
include ('views/global/pagebuilder.php');
get_footer();