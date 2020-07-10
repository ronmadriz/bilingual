<?php

echo '<div class="ad side">'.PHP_EOL;
echo '<figure class="ad__wrapper">'.PHP_EOL;
echo '<figcaption>'.PHP_EOL;
echo '<span class="ad__title"><h3 class="ad__title--txt">'.get_the_title().'</h3></span>'.PHP_EOL;
echo '<span class="ad__desc">'.PHP_EOL;
the_excerpt();
echo '</span>'.PHP_EOL;
echo '<span class="ad__button">'.PHP_EOL;
echo '<a href="#" class="ad__link">Learn More</a>'.PHP_EOL;
echo '</span>'.PHP_EOL;
echo '</figcaption>'.PHP_EOL;
echo '</figure>'.PHP_EOL;
echo '</div>'.PHP_EOL;