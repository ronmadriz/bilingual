<?php
$progam_ID = get_the_ID();

$program_overview_args = array(
	'post_parent'    => 0,
	'post_type'      => 'programs',
	'posts_per_page' => -1,
	'order'          => 'ASC',
	'orderby'        => 'menu_order',
);
$parent_overview = new WP_Query($program_overview_args);

$program_args = array(
	'post_type'      => 'programs',
	'posts_per_page' => -1,
	'post_parent'    => $progam_ID,
	'order'          => 'ASC',
	'orderby'        => 'menu_order',
);
$parent = new WP_Query($program_args);

include (get_template_directory().'/views/components/banner/large-single-line.php');

echo '<section id="overview" class="overview">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
if (is_single('10')) {
	if ($parent_overview->have_posts()) {
		echo '<div class="overview__content col-12 col-md-8">'.PHP_EOL;
		the_content();
		echo '<ul class="overview__list">'.PHP_EOL;
		while ($parent_overview->have_posts()) {
			$parent_overview->the_post();
			echo '<li class="overview__item"><a href="'.get_the_permalink().'" class="overview__link">'.get_the_title().'</a></li>'.PHP_EOL;
		}

		echo '</ul>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
} else {
	if ($parent->have_posts()) {
		echo '<div class="overview__content col-12 col-md-8">'.PHP_EOL;
		the_content();
		echo '<span class="section__title"><h2 class="section__title--text">';
		_e('Courses', 'bei_core');
		echo '</h2></span>';
		echo '<ul class="overview__list">'.PHP_EOL;
		while ($parent->have_posts()) {
			$parent->the_post();
			echo '<li class="overview__item"><a href="'.get_the_permalink().'" class="overview__link">'.get_the_title().'</a></li>'.PHP_EOL;
		}

		echo '</ul>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
	}
	wp_reset_postdata();
}
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
