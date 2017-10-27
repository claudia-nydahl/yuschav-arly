<head>
    <?php get_template_part('components/layout/head'); ?>
</head>
<body>
	<header>
		<nav class="col-dk-12 main-menu sm-hidden">
			<div class="menu-items sm-hidden">
				<?php 
	                $defaults = array(
	                	'theme_location' => 'primary',
	                   	'conatiner' => 'false',
	                    'menu_class' => 'nav, main-menu',
	                    'echo' => true,
	                    'fallback_cb' => 'wp_page-menu');
	                   	wp_nav_menu($defaults);
	            ?>
            </div>
		</nav>
		<nav class="col-dk-12 drop-menu hidden-dk">
			<a href="#"><i class="fa fa-bars menu-icon" aria-hidden="true"></i></a>
			<div class="responsive-nav">
				<?php 
	                $defaults = array(
	                	'theme_location' => 'primary',
	                   	'conatiner' => 'false',
	                    'menu_class' => 'nav, main-menu',
	                    'echo' => true,
	                    'fallback_cb' => 'wp_page-menu');
	                   	wp_nav_menu($defaults);
	            ?>
            </div>
		</nav>
		<div class="col-dk-12 tall-100">
			<h1 class="bold">Yuschav Arly</h1>
			<h1 class="thin"><?php the_title();?></h1>
		</div>
		<!-- <?php wp_nav_menu( array(
  			'theme_location' => 'header_menu',
  			'menu_class'     => 'nav main-menu'
		) ); ?> -->
	</header>