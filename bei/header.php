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
echo '<link rel="shortcut icon" href="'.esc_url($site_favicon).'" type="image/x-icon">'.PHP_EOL;
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
include ('views/components/nav/main.php');
echo '</header>'.PHP_EOL;
echo '<main>'.PHP_EOL;