<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	
	<header class="home-header">			
		<?php include("menus/academy-menu.php"); ?>		
		<div class="row center">
			<h1 class="green-header no-margin-bottom">Welcome to<br class="rwd-break"> Penrose Academy</h1>
			<div class="large-10 small-centered columns">					
				<div class="transparent-white">
					<?php the_field( 'home_hero_text' ); ?>
				</div>					
				<a class="green-button" href="/about-penrose">Discover What Makes<br class="rwd-break"> Penrose Academy Different</a>	
			</div>
		</div>		
	</header>

		<?php
			$args = array( 'post_type' => 'start_dates');
			$start_dates = new WP_Query( $args );
		?>
		
		<?php if ( have_posts() ) : while ( $start_dates->have_posts() ) : $start_dates->the_post(); ?>
		
			<section class="programs">		
				<div class="row">
					<div class="large-4 columns center">			
						<img class="program-icon" width="67" height="67" src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/cosmetology-icon.png" alt="Cosmetology Icon">						
							<div itemscope itemtype="http://schema.org/EducationEvent">						
								<div class="hidden-schema" itemprop="location" itemscope itemtype="http://schema.org/Place" itemref="penroseacademy">
									<span itemprop="name">Penrose Academy</span>
								</div>
								<h2 itemprop="name">Cosmetology</h2>
								<meta itemprop="url" content ="https://penrose.edu/cosmetology-program">
								<p itemprop="description">Hair, style, makeup, nails<br> and everything in between</p>
								<p><span>48 Weeks - 1600 Hours</span><br> Starting <span itemprop="startDate" content="2015-09-16T09:00"><?php the_field( 'next_cosmetology_start_date' ); ?></span>, <?php the_field( 'following_cosmetology_start_date' ); ?></p>
							</div>		
						<a class="red-button" href="cosmetology-program">Learn More</a>
					</div>	
					<div class="large-4 columns center">
						<img class="program-icon" width="67" height="67" src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/esthetics-icon.png" alt="Esthetics Icon">					
							<div itemscope itemtype="http://schema.org/EducationEvent">
								<div class="hidden-schema" itemprop="location" itemscope itemtype="http://schema.org/Place" itemref="penroseacademy">
									<span itemprop="name">Penrose Academy</span>
								</div>							
								<h2 itemprop="name">Esthetics</h2>
								<meta itemprop="url" content ="https://penrose.edu/esthetics-program">
								<p itemprop="description">Esthetics training that emphasizes<br> results-oriented treatments</p>
								<p><span>24 Weeks - 600 Hours</span><br> Starting <span itemprop="startDate" content="2015-09-24T09:00"><?php the_field( 'next_esthetics_start_date' ); ?></span>, <?php the_field( 'following_esthetics_start_date' ); ?></p>
							</div>
						<a class="red-button" href="esthetics-program">Learn More</a>
					</div>	
					<div class="large-4 columns center">
						<img class="program-icon" width="67" height="67" src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/laser-icon.png" alt="Laser Icon">
							<div itemscope itemtype="http://schema.org/EducationEvent">
							<div class="hidden-schema" itemprop="location" itemscope itemtype="http://schema.org/Place" itemref="penroseacademy">
								<span itemprop="name">Penrose Academy</span>
							</div>							
							<h2 itemprop="name">Laser</h2>
							<meta itemprop="url" content ="https://penrose.edu/laser-program">
							<p itemprop="description">Thorough instruction on<br> the latest equipment</p>
							<p><span>10.5 Days- 88 Hours</span><br> Starting <span itemprop="startDate" content="2015-08-12T09:00"><?php the_field( 'next_laser_start_date' ); ?></span>, <?php the_field( 'following_laser_start_date' ); ?></p>
						</div>
						<a class="red-button" href="laser-program">Learn More</a>
					</div>		
				</div>	
			</section>		
		
		<?php endwhile; endif; ?>	
		
		<?php wp_reset_postdata(); ?>
	
    <section class="video-wrap">   		
	   	<div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/backgrounds/home-video.jpg" alt="Video Cover" style="cursor:pointer; width:100%;">
				<img class="play" src="<?php echo get_stylesheet_directory_uri() ?>/img/play-button.png" alt="">
				<div class="video-cover">						
					<h1 class="green-header show-for-large-up">About Penrose Academy</h1>
				</div>					
		</div>
		<div style="display:none" class="flex-video widescreen">
			<iframe width="560" height="315" src="<?php the_field( 'home_video' ); ?>" frameborder="0"></iframe>
		</div>	 		 				
   	</section>
   	
	<section class="home-featured">		
		<div class="row">
			<div class="large-6 medium-6 columns">	
					<a href="<?php the_field( 'home_featured_link_left' ); ?>">
						<?php 
			
							$image = get_field('home_featured_image_left');
							
							if( !empty($image) ): ?>
							
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php endif; ?>	
					</a>
			</div>				
			<div class="large-6 medium-6 columns">				
					<a href="<?php the_field( 'home_featured_link_right' ); ?>">
						<?php 
			
							$image = get_field('home_featured_image_right');
							
							if( !empty($image) ): ?>
							
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php endif; ?>	
					</a>							
			</div>	
		</div>
	</section>	   	
   	
   	<div class="clear"></div>	

<?php get_footer(); ?>