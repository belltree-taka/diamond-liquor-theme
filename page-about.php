<?php
get_header();

while ( have_posts() ) : the_post();
?>
	<section class="hero-banner hero-banner--about">
		<?php the_post_thumbnail('full'); ?>
		<h2 class="hero-banner__about-page-title">About Us</h2>
	</section>
	<main id="primary" class="site-main about">
		<?php the_content();?>
	</main>

<?php
endwhile;

get_footer();