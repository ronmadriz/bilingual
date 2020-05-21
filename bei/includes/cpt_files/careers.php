<?php
add_action('init', function () {

		register_extended_post_type('careers', array(

				# Add the post type to the site's main RSS feed:
				'show_in_feed' => true,
				'has_archive'  => false,
				'menu_icon'    => 'dashicons-groups',
			), array(

				# Override the base names used for labels:
				'singular' => 'Career',
				'plural'   => 'Careers',
				'slug'     => 'careers',

			));

	});

?>