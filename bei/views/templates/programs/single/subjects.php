<?php
if (have_rows('subjects')) {
	$fi_section_title = get_field('fi_section_title');
	echo '<section id="subjects" class="subjects">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row"><div class="col-12 subjects__section"><h2>'.$fi_section_title.'</h2></div></div>'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	include (get_template_directory().'/views/components/icons/four_icons.php');
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}
