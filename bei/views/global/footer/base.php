<?php
$footer__logo   = get_theme_mod('site_logo_footer');
$footer__about  = get_theme_mod('footer_about');
$footer__slogan = get_bloginfo('description');
echo '<section id="base" class="base">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="base__info col-12 col-md-3">'.PHP_EOL;
if (!empty($footer__logo)):
echo '<a href="'.get_bloginfo('url').'" class="navbar-brand"><img src="'.esc_url($footer__logo).'" alt="'.get_bloginfo('name').'" class="img-fluid"></a>'.PHP_EOL;
 else :
echo '<a href="'.get_bloginfo('url').'" class="navbar-brand">'.get_bloginfo('name').(!empty($footer__slogan)?'<br><small>'.$footer__slogan.'</small>':'').'</a>'.PHP_EOL;
endif;
echo '<p>6060 Richmond Avenue,<br> Suite 180<br>Houston, TX 77057</p>'.PHP_EOL;
echo '<p>+1 (713) 789-4555</p>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div class="base__links col-12 col-md-3">'.PHP_EOL;
echo '<h3 class="base__links--title">';
_e('About', 'bei-core');
echo '</h3>'.PHP_EOL;
$about_menu_args = array(
	'theme_location'  => '',
	'menu'            => 'about',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'list-unstyled',
	'menu_id'         => 'about',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 1,
);
wp_nav_menu($about_menu_args);
echo '</div>'.PHP_EOL;
echo '<div class="base__links col-12 col-md-3">'.PHP_EOL;
echo '<h3 class="base__links--title">';
_e('Policies', 'bei-core');
echo '</h3>'.PHP_EOL;
$policies_menu_args = array(
	'theme_location'  => '',
	'menu'            => 'policies',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'list-unstyled',
	'menu_id'         => 'policies',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 1,
);
wp_nav_menu($policies_menu_args);

echo '</div>'.PHP_EOL;
echo '<div class="base__links col-12 col-md-3">'.PHP_EOL;
echo '<h3 class="base__links--title">';
_e('Resources', 'bei-core');
echo '</h3>'.PHP_EOL;
$refugees_menu_args = array(
	'theme_location'  => '',
	'menu'            => 'student',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'list-unstyled',
	'menu_id'         => 'student',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 1,
);
wp_nav_menu($refugees_menu_args);
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
?>
