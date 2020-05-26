<?php 
// Social Media Button Function
function social_media_icons() {
	function ronmadriz_social_media_array() {
		/* store social site names in array */
		$social_sites = array('facebook', 'linkedin', 'instagram', 'twitter', 'youtube', 'google-plus', 'email', 'rss');
		return $social_sites;
	}
	$social_sites = ronmadriz_social_media_array();
	foreach ($social_sites as $social_site) {
		if (strlen(get_theme_mod($social_site)) > 0) {
			$active_sites[] = $social_site;
		}
	}
	if (!empty($active_sites)) {
		echo '<ul class="social-media-icons list-inline">';
		echo '<li class="list-inline-item">';
		_e('Connect:');
		echo '</li>';
		foreach ($active_sites as $active_site) {
			$class = 'fab fa-'.$active_site;
			if ($active_site == 'email') {
			 echo '<li class="list-inline-item">'.PHP_EOL;
			 echo '<a class="email" target="_blank" href="mailto:'.antispambot(is_email(get_theme_mod($active_site))).'">'.PHP_EOL;
			 echo '<i class="fa fa-envelope" title="';
			 _e('email icon', 'text-domain');
			 echo '"></i>'.PHP_EOL;
			 echo '</a>'.PHP_EOL;
			 echo '</li>'.PHP_EOL;
			} else {
			 echo '<li class="list-inline-item">'.PHP_EOL;
			 echo '<a class="<?php echo $active_site;?>" target="_blank" href="<?php echo get_theme_mod($active_site);?>">'.PHP_EOL;
			 echo '<i class="<?php echo esc_attr($class);?>" title="<?php printf(__('%s icon', 'text-domain'), $active_site);?>"></i>'.PHP_EOL;
			 echo '</a>'.PHP_EOL;
			 echo '</li>'.PHP_EOL;
			}
		}
		echo "</ul>";
	}
}