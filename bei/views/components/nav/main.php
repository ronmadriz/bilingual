<?php
$site_logo_header = get_theme_mod('site_logo_header');
$slogan           = get_bloginfo('description');
$theme_location   = get_bloginfo('stylesheet_directory');

$pageID = get_the_id();
$pageCF = get_post_custom($pageID);

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

$classes = get_body_class();
if (in_array('section-english-for-refugees', $classes)) {
	$main_menu_args = array(
		'theme_location'  => '',
		'menu'            => 'refugees',
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
} elseif (in_array('section-f1-student-resources', $classes)) {
	$main_menu_args = array(
		'theme_location'  => '',
		'menu'            => 'f1',
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
echo '<a href="/search-bei/" class="mainNav__search order-md-12"><img src="'.$theme_location.'/sprites/search.svg"></a>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</nav>'.PHP_EOL;
