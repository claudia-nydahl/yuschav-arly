<?php /* Template Name: Custom_PortfolioPage */ ?>

<?php get_header(); ?> 

	<main>
		<section class="col-dk-12 portfolio-section">
			<div id='widget-portfolio' class='portfolio-area'> <?php dynamic_sidebar('portfolio1') ?>
			</div>
		</section>
	</main>

<?php get_footer(); ?>