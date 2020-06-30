<?php
include (get_template_directory().'/views/components/banner/subpages.php');
if (have_posts()) {
	echo '<section id="overview" class="overview">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	echo '<div class="overview__content col-12 col-md-8">'.PHP_EOL;
	while (have_posts()) {
		the_post();
		$children = wp_list_pages(
			array(
				'title_li'  => '',
				'child_of'  => wp_get_post_parent_id(), // child of only the parent page
				'echo'      => 0, // do not echo
				'exclude'   => $post->ID, // exclude the parent page from being added to array
				'post_type' => 'programs', // only posts from the location post type
			)
		);
		if ($children) {
			echo '<ul class="overview__list">'.$children.'</ul>';
		}
	}
	echo '</div>'.PHP_EOL;
	echo '<div class="overview__sub col-12 col-md-4">'.PHP_EOL;
	echo '<h3 class="overview__sub--title">Department Contact Info</h3>'.PHP_EOL;
	echo '<span class="overview__sub--desc">'.PHP_EOL;
	echo '<p>Bachelor Of Science in Business Administration</p>'.PHP_EOL;
	echo '<p>1810 Campus Way<br>NE Bothell, WA 98011-8246</p>'.PHP_EOL;
	echo '<p>+1-2345-5432-45<br>bsba@kuuniver.edu</p>'.PHP_EOL;
	echo '<p>Mon – Fri 9:00A.M. – 5:00P.M.</p>'.PHP_EOL;
	echo '<span class="overview__sub--btn"><a class="btn button__green">Schedule an Appointment</a></span>'.PHP_EOL;
	echo '</span>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
