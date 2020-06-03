<?php
echo '<section id="tabbed" class="tabbed">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="tabbed__wrapper col-12">'.PHP_EOL;
echo '<ul class="tabbed_items nav nav-pills nav-justified">'.PHP_EOL;
echo '<li class="nav-item tabbed__item"><a data-toggle="tab" href="#home__tab-0" class="active nav-link tabbed__button">'.PHP_EOL;
echo '<img src="'.get_stylesheet_directory_uri().'/sprites/traditional.svg" class="tabbed__image">'.PHP_EOL;
echo '<span class="tabbed__text">'.PHP_EOL;
echo '<h3 class="tabbed__title">Traditional</h3>'.PHP_EOL;
echo '<p class="tabbed__subtitle">Meet with Instructors amongst your peers</p>'.PHP_EOL;
echo '</span></a></li>'.PHP_EOL;
echo '<li class="nav-item tabbed__item"><a data-toggle="tab" href="#home__tab-1" class="nav-link tabbed__button">'.PHP_EOL;
echo '<img src="'.get_stylesheet_directory_uri().'/sprites/online.svg" class="tabbed__image">'.PHP_EOL;
echo '<span class="tabbed__text">'.PHP_EOL;
echo '<h3 class="tabbed__title">Online</h3>'.PHP_EOL;
echo '<p class="tabbed__subtitle">Learn at your own pace</p>'.PHP_EOL;
echo '</span></a></li>'.PHP_EOL;
echo '<li class="nav-item tabbed__item"><a data-toggle="tab" href="#home__tab-2" class="nav-link tabbed__button">'.PHP_EOL;
echo '<img src="'.get_stylesheet_directory_uri().'/sprites/tutor.svg" class="tabbed__image">'.PHP_EOL;
echo '<span class="tabbed__text">'.PHP_EOL;
echo '<h3 class="tabbed__title">One on One</h3>'.PHP_EOL;
echo '<p class="tabbed__subtitle">Direct and Focused Instructors</p>'.PHP_EOL;
echo '</span></a></li>'.PHP_EOL;
echo '</ul>'.PHP_EOL;
echo '<div class="tab-content tabbed__content">'.PHP_EOL;
echo '<div id="home__tab-0" role="tabpanel" class="tab-pane tabbed__pane fade show active">'.PHP_EOL;
echo '<h3>HOME</h3>'.PHP_EOL;
echo '<p>Some content.</p>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div id="home__tab-1" role="tabpanel" class="tab-pane tabbed__pane fade">'.PHP_EOL;
echo '<h3>Menu 1</h3>'.PHP_EOL;
echo '<p>Some content in menu 1.</p>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div id="home__tab-2" role="tabpanel" class="tab-pane tabbed__pane fade">'.PHP_EOL;
echo '<h3>Menu 2</h3>'.PHP_EOL;
echo '<p>Some content in menu 2.</p>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
?>