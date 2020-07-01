<?php
$progam_ID    = get_the_ID();
$childrenArgs = array(
	'post_type'      => 'programs',
	'post_status'    => 'publish',
	'order'          => 'DESC',
	'orderby'        => 'menu',
	'posts_per_page' => -1,
	'post__not_in'   => array($progam_ID),
);

$childprograms = new WP_Query($childrenArgs);

include (get_template_directory().'/views/components/banner/subpages.php');
if ($childprograms->have_posts()) {
	echo '<section id="overview" class="tiled">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row tiled__wrapper">'.PHP_EOL;
	while ($childprograms->have_posts()) {
		$childprograms->the_post();
		$childprogram__image   = get_the_post_thumbnail_url($size = 'medium');
		$childprogram__img     = (!empty($childprogram__image)?$childprogram__image:'/wp-content/uploads/2020/06/student-life-11-768x594.png');
		$childprogram__link    = get_the_permalink();
		$childprogram__title   = get_the_title();
		$childprogram__excerpt = get_the_excerpt();
		echo '<figure class="tiled__item card col-12 col-md-3">'.PHP_EOL;
		echo '<a href="'.$childprogram__link.'" class="tiled__image--link"><img src="'.esc_url($childprogram__img).'" alt="'.$childprogram__title.'" class="tiled__image card-img-top img-fluid"></a>'.PHP_EOL;
		echo '<figcaption class="tiled__content">'.PHP_EOL;
		echo (!empty($childprogram__title)?'<span class="tiled__title"><h3 class="tiled__title--text card-title">'.$childprogram__title.'</h3></span>'.PHP_EOL:'');
		echo (!empty($childprogram__excerpt)?'<span class="tiled__desc card-text">'.$childprogram__excerpt.'</span>'.PHP_EOL:'');
		echo (!empty($childprogram__link)?'<a href="'.$childprogram__link.'" class="tiled__link">'.$childprogram__title.' <span class="tiled__link--icon">'.file_get_contents(get_stylesheet_directory_uri().'/sprites/arrow.svg').'</span></a>'.PHP_EOL:'');
		echo '</figcaption>'.PHP_EOL;
		echo '</figure>'.PHP_EOL;
	}
	wp_reset_postdata();
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
/*
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
 */