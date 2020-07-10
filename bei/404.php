<?php
get_header();
$contentThumb = get_field('content_with_thumbnail');
include ('views/components/banner/subpages.php');
if ($contentThumb == 1) {
	include ('views/pages/default.php');
} else {
	include ('views/layout/content-with-thumbnail.php');
}
get_footer();