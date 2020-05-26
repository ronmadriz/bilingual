<?php
$page_title   = "BEI Template";
$page_id      = 'home';
$page_classes = 'home front-page';

//

include ('header.php');
echo '<main>'.PHP_EOL;
include ('views/pages/home.php');
echo '</main>'.PHP_EOL;
include ('footer.php');