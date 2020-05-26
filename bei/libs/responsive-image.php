<?php
function ronmadriz_img_tag($class) {
	$class .= ' img-responsive';
	return $class;
}
add_filter('get_image_tag_class', 'ronmadriz_img_tag');
