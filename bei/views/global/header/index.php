<?php
global $post;
$slug              = get_post($post)->post_name;
$header_cta_top    = get_theme_mod('header_cta_top');
$header_cta_bottom = get_theme_mod('header_cta_bottom');
$slogan            = get_bloginfo('description');
$site_logo_header  = get_theme_mod('site_logo_header');

include ('views/components/nav/topbar.php');
echo '<nav class="navbar navbar-expand-lg">'.PHP_EOL;
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
include ('../../views/components/nav/main.php');
echo '</div>'.PHP_EOL;
echo '</nav>'.PHP_EOL;