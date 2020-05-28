<?php
$theme_location = get_template_directory();
echo '<div class="navbar-collapse" id="navigation">'.PHP_EOL;
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
wp_nav_menu($main_menu_args);
echo '<a href="#"><img src="'.$theme_location.'/sprites/search.svg"></a>'.PHP_EOL;
echo '</div>'.PHP_EOL;