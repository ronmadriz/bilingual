<?php
$site_logo_header = get_theme_mod('site_logo_header');
$slogan           = get_bloginfo('description');
$theme_location   = get_bloginfo('stylesheet_directory');
echo '<nav class="navbar navbar-expand-lg main__nav">'.PHP_EOL;
if (!empty($site_logo_header)) {
	echo '<a href="'.get_bloginfo('url').'" class="navbar-brand main__nav--brand"><img src="'.esc_url($site_logo_header).'" alt="'.get_bloginfo('name').'" class="main__nav--logo img-fluid"></a>'.PHP_EOL;

} else {
	echo '<a href="'.get_bloginfo('url').'" class="navbar-brand">'.get_bloginfo('name').(!empty($slogan)?'<br><small>'.$slogan.'</small>':'').'</a>'.PHP_EOL;
}
echo '<button class="navbar-toggler collapsed ml-auto" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Menu">'.PHP_EOL;
echo '<span class="icon-bar"></span>'.PHP_EOL;
echo '<span class="icon-bar"></span>'.PHP_EOL;
echo '<span class="icon-bar"></span>'.PHP_EOL;
echo '</button>'.PHP_EOL;
echo '<div class="navbar-collapse collapse order-12" id="navigation">'.PHP_EOL;
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
echo '</div>'.PHP_EOL;
echo '<a href="#" class="main__nav--search order-md-12"><img src="'.$theme_location.'/sprites/search.svg"></a>'.PHP_EOL;
echo '</nav>'.PHP_EOL;