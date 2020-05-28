<?php
echo '<section id="boilerplate" class="boilerplate">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div id="social" class="boilerplate__item social col-12 col-md-6 order-md-12 text-md-right">'.PHP_EOL;
social_media_icons_ft();
echo '</div>'.PHP_EOL;
echo '<div id="copyright" class="boilerplate__item copyright col-12 col-md-6 order-md-1">'.PHP_EOL;
echo '<p>&copy; Copyright '.date('Y').' '.get_bloginfo('name').'</p>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;