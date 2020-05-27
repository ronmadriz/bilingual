<?
echo '<section id="topbar" class="container-fluid topbar">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="topbar__nav col-12 col-md-6 order-12">', PHP_EOL;
$top_menu_args = array(
	'theme_location'  => 'topbar',
	'menu'            => 'topbar-nav',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'navbar-nav ml-md-auto',
	'menu_id'         => 'topbar-nav',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	//	'walker'          => new WP_Bootstrap_Navwalker(),
	'depth' => 2,
);
wp_nav_menu($top_menu_args);
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;