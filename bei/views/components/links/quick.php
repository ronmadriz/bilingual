<?
echo '<h3 class="quick__title">';
echo '<span class="quick__icon">'.file_get_contents(get_template_directory().'/sprites/link.svg').'</span> ';
_e('Quick Links', 'bei_core');
echo '</h3>'.PHP_EOL;
if (have_rows('quick_links')) {
	echo '<ul class="quick__list">'.PHP_EOL;
	while (have_rows('quick_links')) {
		the_row();
		$ql_link = get_sub_field('ql_link');
		echo '<li class="quick__item"><a href="'.$ql_link['url'].'" class="quick__link">'.$ql_link['title'].'</a></li>'.PHP_EOL;
	}
	echo '</ul>'.PHP_EOL;
}