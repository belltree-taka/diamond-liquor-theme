<?php

/*
Template Name: Contact
*/

get_header();
?>
	<section class="hero-banner">
		<?php the_post_thumbnail('full'); ?>
		<h2 class="hero-banner__contact-page-title">Contact Us</h2>
	</section>
	<main id="primary" class="site-main contact">
		<?php the_content();?>
	</main>

<?php
get_footer();