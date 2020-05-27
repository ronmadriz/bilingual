<?php
date_default_timezone_set('America/Chicago');
$site_settings    = get_option('rmc_settings');
$site_logo_footer = get_theme_mod('site_logo_footer');
$footer_about     = get_theme_mod('footer_about');
echo '</main>'.PHP_EOL;
echo '<footer>'.PHP_EOL;
include ('views/global/footer/boilerplate.php');
echo '</footer>'.PHP_EOL;
wp_footer();
echo $site_settings['rmc_footer_extra'];
echo '</body>'.PHP_EOL;
echo '</html>'.PHP_EOL;