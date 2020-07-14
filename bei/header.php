<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 */
global $post;
$slug          = get_post($post)->post_name;
$site_favicon  = get_theme_mod('site_favicon');
$site_settings = get_option('rmc_settings');
echo '<!DOCTYPE html>'.PHP_EOL;
echo '<html lang="en">'.PHP_EOL;
echo '<head>'.PHP_EOL;
echo '<meta charset="'.get_bloginfo('charset').'" />'.PHP_EOL;
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />'.PHP_EOL;
echo '<meta name="theme-color" content="#0099ff">'.PHP_EOL;
echo '<link rel="shortcut icon" href="'.esc_url($site_favicon).'" type="image/x-icon">'.PHP_EOL;
echo '<title>';
wp_title('', true, 'right');
echo '</title>'.PHP_EOL;
wp_head();
echo $site_settings['rmc_header_extra'];
echo '</head>'.PHP_EOL;
echo '<body id="page-'.$slug.'" ';
echo $site_settings['rmc_body_extra'];
body_class();
echo '>'.PHP_EOL;
include ('views/global/header/index.php');
echo '<main>'.PHP_EOL;
