<?php
$footer__logo   = get_theme_mod('site_logo_footer');
$footer__about  = get_theme_mod('footer_about');
$footer__slogan = get_bloginfo('description');
echo '<section id="base" class="base">'.PHP_EOL;
echo '<div clas="container-fluid">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="base__info col-12 col-md-3">'.PHP_EOL;
if (!empty($footer__logo)):
echo '<a href="'.get_bloginfo('url').'" class="navbar-brand"><img src="'.esc_url($footer__logo).'" alt="'.get_bloginfo('name').'" class="img-fluid"></a>'.PHP_EOL;
 else :
echo '<a href="'.get_bloginfo('url').'" class="navbar-brand">'.get_bloginfo('name').(!empty($footer__slogan)?'<br><small>'.$footer__slogan.'</small>':'').'</a>'.PHP_EOL;
endif;
echo '<p>Box 35300<br>1810 Campus Way NE<br>Bothell, WA 98011-8246</p>'.PHP_EOL;
echo '<p>+1-2534-4456-345</p>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '<div class="col-12 col-md-9">';?>
<ul class="base__links list-unstyled">
	<li><a href="#">Footer Nav</a>
		<ul>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
		</ul>
	</li>
	<li><a href="#">Footer Nav</a>
		<ul>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
		</ul>
	</li>
	<li><a href="#">Footer Nav</a>
		<ul>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
			<li><a href="#">Footer SubNav</a></li>
		</ul>
	</li>
</ul>
<?
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
?>