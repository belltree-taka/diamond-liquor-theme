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
	<section class="hero-banner">
		<?php the_post_thumbnail('full'); ?>
		<div class="hero-banner__text-container container">
			<div class="hero-banner__text-inner-container">
				<h2 class="hero-banner__title">Welcome to Diamond Liquour</h2>
				<p class="hero-banner__subtitle">Large variety of wines, spirits, and craft beers</p>
				<div class="hero-banner__cta-container">
					<a class="hero-banner__cta" href="contact">Contact Us</a>
					<a class="hero-banner__cta" href="#promotions">View Promotions</a>
				</div>
			</div>
		</div>
	</section>
	<main id="primary" class="site-main home">
		<?php the_content();?>
	</main>
<?php
get_footer();
