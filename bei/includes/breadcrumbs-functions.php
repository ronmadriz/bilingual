<?php
/*=============================================
=            BREADCRUMBS                        =
=============================================*/

//  to include in functions.php
function the_breadcrumb() {
	global $post;// if outside the loop
	$count               = 1;
	$postAncestors       = get_post_ancestors($post);
	$sortedAncestorArray = array();

	if (!is_front_page()) {

		// Start the breadcrumb with a link to your homepage
		echo '<span class="breadcrumbs__item"><a class="breadcrumbs__link" href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo '</a></span>'.PHP_EOL;

		// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
		if (is_category() || is_single()) {
			the_category('parent=');
		} elseif (is_archive() || is_single()) {
			if (is_day()) {
				printf(__('%s', 'text_domain'), get_the_date());
			} elseif (is_month()) {
				printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
			} elseif (is_year()) {
				printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
			} else {
				_e('Blog Archives', 'text_domain');
			}
		}

		if (is_singular('programs')) {
			echo '<span class="breadcrumbs__item"><a href="/programs/overview/" class="breadcrumbs__link">Programs</a></span>'.PHP_EOL;
		}

		// If the current page is a single post, show its title with the separator
		if (is_single() || is_page()) {
			$bc_count            = 1;
			$postAncestors       = get_post_ancestors($post);
			$sortedAncestorArray = array();
			foreach ($postAncestors as $ancestor) {
				$sortedAncestorArray[] = $ancestor;
			}
			krsort($sortedAncestorArray);// Sort an array by key in reverse order

			foreach ($sortedAncestorArray as $ancestor) {
				echo '<span class="breadcrumbs__item"><a class="breadcrumbs__link breadcrumb-link-'.$bc_count.'" href="'.esc_url(get_permalink($ancestor)).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></span>';
				$bc_count++;
			}
			echo '<span class="breadcrumbs__item">'.get_the_title($post).'</span>';
		}

		// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
		if (is_home()) {
			global $post;
			$page_for_posts_id = get_option('page_for_posts');
			if ($page_for_posts_id) {
				$post = get_page($page_for_posts_id);
				setup_postdata($post);
				the_title();
				rewind_posts();
			}
		}
	}
}
/*
 * Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
 */
?>
