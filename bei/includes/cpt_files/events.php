<?php
add_action('init', function () {

		register_extended_post_type('bei_events', array(

				# Add the post type to the site's main RSS feed:
				'show_in_feed' => true,
				'has_archive'  => false,
				'menu_icon'    => 'dashicons-calendar-alt',
			), array(

				# Override the base names used for labels:
				'singular' => 'Event',
				'plural'   => 'Events',
				'slug'     => 'events',

			));

	});

?>
