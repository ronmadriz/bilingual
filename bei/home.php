<?php
get_header();
$contentThumb = get_field('content_with_thumbnail');
include ('views/components/banner/blog.php');
include ('views/layout/blog-home.php');
get_footer();
