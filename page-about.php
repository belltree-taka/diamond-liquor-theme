<?php

/*
Template Name: About
*/

get_header();
?>
	<section class="hero-banner hero-banner--about">
		<?php the_post_thumbnail('full'); ?>
		<h2 class="hero-banner__about-page-title">About Us</h2>
	</section>
	<main id="primary" class="site-main about">
		<?php the_content();?>
	</main>

<?php
get_footer();
