<?php
add_action('init', function () {

		register_extended_post_type('programs', array(

				# Add the post type to the site's main RSS feed:
				'show_in_feed' => true,
				'has_archive'  => false,
				'menu_icon'    => 'dashicons-networking',
			), array(

				# Override the base names used for labels:
				'singular' => 'Program',
				'plural'   => 'Programs',
				'slug'     => 'programs',

			));

	});

?>