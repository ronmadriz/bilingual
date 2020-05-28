<?
echo '<section id="topbar" class="container-fluid topbar">'.PHP_EOL;
echo '<div class="row justify-content-end">'.PHP_EOL;
echo '<div class="col-12 col-md-6">', PHP_EOL;
$top_menu_args = array(
	'theme_location'  => 'topbar',
	'menu'            => 'topbar-nav',
	'container'       => '',
	'container_class' => 'list-inline-item',
	'container_id'    => '',
	'menu_class'      => 'topbar__nav list-inline navbar-nav ml-md-auto',
	'menu_id'         => 'topbar__nav',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'walker'          => new WP_Bootstrap_Navwalker(),
	'depth'           => 1,
);
wp_nav_menu($top_menu_args);
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;