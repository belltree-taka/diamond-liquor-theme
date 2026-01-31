<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Diamond_Liquor_Theme
 */

get_header();
?>

	<main id="primary" class="site-main home">
		<div class="container">
			<?php the_content();?>
		</div>
	</main>

<?php
get_footer();
