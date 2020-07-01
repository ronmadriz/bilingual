<?php
$progam_ID = get_the_ID();

$program_args = array(
	'post_type'      => 'page',
	'posts_per_page' => -1,
	'post_parent'    => $progam_ID,
	'order'          => 'ASC',
	'orderby'        => 'menu_order',
);
$parent = new WP_Query($program_args);

include (get_template_directory().'/views/components/banner/subpages.php');
echo '<section id="overview" class="overview">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
if ($parent->have_posts()) {
	echo '<div class="overview__content col-12 col-md-8">'.PHP_EOL;
	echo '<ul>'.PHP_EOL;
	while ($parent->have_posts()) {
		$parent->the_post();
		echo '<li>'.get_the_title().'</li>'.PHP_EOL;
	}

	echo '</ul>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
}
wp_reset_postdata();
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
