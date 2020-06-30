<?php
$site_logo_header = get_theme_mod('site_logo_header');
$slogan           = get_bloginfo('description');
$theme_location   = get_bloginfo('stylesheet_directory');

$pageID = get_the_id();
$pageCF = get_post_custom($pageID);

$top_cat_pg = 'home';// Default.
global $top_cat_pg;

// Get class name from top-level Category or Page.
global $wp_query;
if (is_single()) {
	$wp_query->post = $wp_query->posts[0];
	setup_postdata($wp_query->post);
	/* Climb Posts category hierarchy, successively replacing
	class name top_cat_pg with slug of higher level cat. */
	foreach ((array) get_the_category() as $cat) {
		if (!empty($cat->slug)) {
			$top_cat_pg = sanitize_html_class($cat->slug, $cat->cat_ID);
			while ($cat->parent) {
				$cat = &get_category((int) $cat->parent);
				if (!empty($cat->slug)) {
					$top_cat_pg = sanitize_html_class($cat->slug, $cat->cat_ID);
				}
			}
		}
	}
} elseif (is_archive()) {
	if (is_category()) {
		$cat        = $wp_query->get_queried_object();
		$top_cat_pg = $cat->slug;
		/* Climb Category hierarchy, successively replacing
		class name with slug of higher level cat. */
		while ($cat->parent) {
			$cat = &get_category((int) $cat->parent);
			if (!empty($cat->slug)) {
				$top_cat_pg = sanitize_html_class($cat->slug, $cat->cat_ID);
			}
		}
	}
} elseif (is_page()) {
	global $post;
	if ($post->post_parent) {
		$ancestors  = get_post_ancestors($post->ID);
		$root       = count($ancestors)-1;
		$top_id     = $ancestors[$root];
		$top_pg     = get_page($top_id);
		$top_cat_pg = $top_pg->post_name;
	} else {
		$top_cat_pg = $post->post_name;
	}
}
$parent_page = $top_cat_pg;

echo '<nav class="navbar navbar-expand-lg mainNav">'.PHP_EOL;
echo '<div class="wrapper">'.PHP_EOL;
if (!empty($site_logo_header)) {
	echo '<a href="'.get_bloginfo('url').'" class="navbar-brand mainNav__brand"><img src="'.esc_url($site_logo_header).'" alt="'.get_bloginfo('name').'" class="img-fluid mainNav__logo"></a>'.PHP_EOL;

} else {
	echo '<a href="'.get_bloginfo('url').'" class="navbar-brand mainNav__logo">'.get_bloginfo('name').(!empty($slogan)?'<br><small>'.$slogan.'</small>':'').'</a>'.PHP_EOL;
}
echo '<button class="navbar-toggler collapsed ml-auto mainNav__toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Menu">'.PHP_EOL;
echo '<span class="mainNav__toggler--item"></span>'.PHP_EOL;
echo '<span class="mainNav__toggler--item"></span>'.PHP_EOL;
echo '<span class="mainNav__toggler--item"></span>'.PHP_EOL;
echo '</button>'.PHP_EOL;
echo '<div class="navbar-collapse collapse order-12 mainNav__container" id="navigation">'.PHP_EOL;
if ($parent_page == 313) {
	$main_menu_args = array(
		'theme_location'  => '',
		'menu'            => 'refugee',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'navbar-nav ml-md-auto',
		'menu_id'         => 'navigation',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'walker'          => new WP_Bootstrap_Navwalker(),
		'depth'           => 3,
	);
} else {
	$main_menu_args = array(
		'theme_location'  => '',
		'menu'            => 'main-nav',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'navbar-nav ml-md-auto',
		'menu_id'         => 'navigation',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'walker'          => new WP_Bootstrap_Navwalker(),
		'depth'           => 3,
	);
}
wp_nav_menu($main_menu_args);
echo '</div>'.PHP_EOL;
echo '<a href="#" class="mainNav__search order-md-12"><img src="'.$theme_location.'/sprites/search.svg"></a>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</nav>'.PHP_EOL;
