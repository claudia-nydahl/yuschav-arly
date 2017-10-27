<?php /* Template Name: Custom_BlogPage */ ?>
<?php get_header(); ?> 
	<section class="col-dk-4 tall-750">
		<div>
			<?php the_thumbnail(); ?>
		</div>
	</section>

	<section class="col-dk-6 tall-600 news">
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</section>
<?php get_footer(); ?>