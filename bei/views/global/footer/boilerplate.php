<?php
echo '<section id="boilerplate" class="boilerplate">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div id="social" class="boilerplate__item social col-6 col-md-6">'.PHP_EOL;
social_media_icons_ft();
echo '</div>'.PHP_EOL;
echo '<div id="copyright" class="boilerplate__item copyright col-6 col-md-6 text-md-right">'.PHP_EOL;
echo '<p>&copy; Copyright '.date('Y').' '.get_bloginfo('name').'</p>'.PHP_EOL;
$foot_menu_args = array(
	'theme_location'  => 'footer-nav',
	'menu'            => 'footer-nav',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'list-unstyled footer-nav',
	'menu_id'         => 'footer-nav',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 3,
);
wp_nav_menu($foot_menu_args);
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;