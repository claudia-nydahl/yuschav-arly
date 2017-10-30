<?php /* Template Name: Custom_HomePage */ ?>

<?php get_header(); ?> 
	<main>
		<section id='widget-home' class="home-image widgets-area col-dk-12">
			<div id='widget-home' class='widgets-area'> <?php dynamic_sidebar('home1') ?>
			</div>
		</section>

		<section class="col-dk-1 md-hidden sm-hidden tall-600"></section>

		<?php
   			if(have_posts()):
        		while( have_posts()): the_post();?>
                	<section class="col-dk-6 col-md-7 col-sm-12 page-content">
    					<p><?php the_content(); ?></p>
					</section>  
                		<!-- if get post format is empty get template returns "content" and will just show content.php_ini_loaded_file
                but if get post is "aside" or "video" get template will return 'content-aside.php' -->
        	<?php  
        		endwhile;
    		endif;
   			?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>