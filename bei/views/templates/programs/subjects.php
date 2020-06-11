<?php
if (have_rows('subjects')) {
	echo '<section id="subjects" class="subjects">'.PHP_EOL;
	echo '<div class="container-fluid">'.PHP_EOL;
	echo '<div class="row"><div class="col-12"><h2>';
	_e('Core Subjects', 'bei_core');
	echo '</h2></div></div>'.PHP_EOL;
	echo '<div class="row">'.PHP_EOL;
	include (get_template_directory().'/views/components/icons/subjects.php');
	echo '</div>'.PHP_EOL;
	echo '</div>'.PHP_EOL;
	echo '</section>'.PHP_EOL;
}