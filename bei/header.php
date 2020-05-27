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
$site_settings     = get_option('rmc_settings');
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
echo '<link rel="shortcut icon" href="'.esc_url($site_favicon).'" type="image/x-icon">'.PHP_EOL;
echo '<title>';
wp_title('', true, 'right');
echo '</title>'.PHP_EOL;
wp_head();
echo $site_settings['header_extra'];
echo '</head>'.PHP_EOL;
echo '<body id="page-'.$slug.'"';
body_class();
echo '>'.PHP_EOL;
echo '<nav class="navbar navbar-expand-lg">'.PHP_EOL;
include ('views/components/nav/topbar.php');
echo '<div class="container-fluid">'.PHP_EOL;
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
include ('views/components/nav/main.php');
echo '</div>'.PHP_EOL;
echo '</nav>'.PHP_EOL;
echo '<main>'.PHP_EOL;