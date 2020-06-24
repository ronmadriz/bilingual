<?php
add_action('init', function () {
		register_extended_post_type('testimonials', array(
				'show_in_feed' => true,
				'has_archive'  => false,
				'menu_icon'    => false,
			), array(
				'singular' => 'Testimonial',
				'plural'   => 'Testimonials',
				'slug'     => 'testimonials',
			));
	});
?>