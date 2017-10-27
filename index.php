<?php get_header(); ?> 

	<main>	
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-dk-12 tall-600 tall-md-500 tall-sm-1000">
				<section class="col-dk-5 col-sm-12">
					<div>
						<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'post-image' ) ); ?>
						<button class="home-banner-button"><a href="#">View Portfolio</a></button>
					</div>
				</section>

				<section class="col-dk-7 col-sm-12 blog-content">
					<?php the_content(); ?>
				</section>
			</div>
		<?php  
		endwhile;
		endif;
   		?>
 	</main>

<?php get_footer(); ?>