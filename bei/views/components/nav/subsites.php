<?
echo '<section id="subsites" class="subsites">'.PHP_EOL;
echo '<div class="wrapper">'.PHP_EOL;
echo '<div class="subsites__content">', PHP_EOL;
$top_menu_args = array(
	'theme_location'  => 'subsites',
	'menu'            => 'subsites-nav',
	'container'       => '',
	'container_class' => 'list-inline-item',
	'container_id'    => '',
	'menu_class'      => 'subsites__nav list-inline navbar-nav justify-content-end',
	'menu_id'         => 'subsites__nav',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 1,
);
wp_nav_menu($top_menu_args);
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;