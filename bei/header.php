<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 */
global $post;
$slug              = get_post($post)->post_name;
$header_cta_top    = get_theme_mod('header_cta_top');
$header_cta_bottom = get_theme_mod('header_cta_bottom');
$site_logo_header  = get_theme_mod('site_logo_header');
$site_favicon      = get_theme_mod('site_favicon');
$rmj_settings      = get_option('ronmadriz_settings');
$slogan            = get_bloginfo('description');
echo '<!DOCTYPE html>'.PHP_EOL;
echo '<html lang="en">'.PHP_EOL;
echo '<head>'.PHP_EOL;
echo '<meta charset="';
bloginfo('charset');
echo '" />'.PHP_EOL;
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />'.PHP_EOL;
echo '<meta name="theme-color" content="#2F4550">'.PHP_EOL;
echo '<link rel="shortcut icon" href="'.PHP_EOL;
echo esc_url($site_favicon);
echo '" type="image/x-icon">'.PHP_EOL;
echo '<title>';
wp_title('', true, 'right');
echo '</title>'.PHP_EOL;
wp_head();
echo $rmj_settings['fc_header_extra'];
echo '</head>'.PHP_EOL;
echo '<body id="page-'.$slug.'"';
body_class();
echo '>'.PHP_EOL;
echo '<header>'.PHP_EOL;
echo '<nav class="navbar navbar-expand-lg">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
if (!empty($site_logo_header)):
echo '<a href="'.get_bloginfo('url').'" class="navbar-brand"><img src="'.esc_url($site_logo_header).'" alt="'.get_bloginfo('name').'" class="img-fluid"></a>'.PHP_EOL;
 else :
echo '<a href="'.get_bloginfo('url').'" class="navbar-brand">'.get_bloginfo('name').(!empty($slogan)?'<br><small>'.$slogan.'</small>':'').'</a>'.PHP_EOL;
endif;
echo '<button class="navbar-toggler collapsed ml-auto" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Menu">'.PHP_EOL;
echo '<span class="icon-bar"></span>'.PHP_EOL;
echo '<span class="icon-bar"></span>'.PHP_EOL;
echo '<span class="icon-bar"></span>'.PHP_EOL;
echo '</button>'.PHP_EOL;
echo '<div class="navbar-collapse" id="navigation">'.PHP_EOL;
$args = array(
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
	'depth'           => 2
);
wp_nav_menu($args);
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</nav>'.PHP_EOL;
echo '</header>'.PHP_EOL;
echo '<main>'.PHP_EOL;