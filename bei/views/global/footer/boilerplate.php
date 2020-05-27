<?php
echo '<section id="boilerplate" class="boilerplate">'.PHP_EOL;
echo '<div class="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div id="social" class="text-center col-12 col-md-6 order-md-12">'.PHP_EOL;
social_media_icons();
echo '</div>'.PHP_EOL;
echo '<div id="copyright" class="text-center col-12 col-md-6 order-md-1">'.PHP_EOL;
echo '<p>&copy; Copyright '.date('Y').' '.get_bloginfo('name').'</p>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;