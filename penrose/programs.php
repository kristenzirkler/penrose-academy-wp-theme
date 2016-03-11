<?php
/*
Template Name: Programs
*/
?>

<?php get_header(); ?>

	<header class="programs-header">			
		<?php include("menus/academy-menu.php"); ?>		
			<div class="row center">
				<h1 class="red-header no-margin-bottom">Penrose Academy Programs</h1>
				<div class="large-10 large-centered columns">				
					<div class="transparent-white">
						<?php the_field( 'programs_hero_text' ); ?>
					</div>
				</div>
			</div>
	</header> 
	
	<?php
		$args = array( 'post_type' => 'start_dates');
		$the_query = new WP_Query( $args );
	?>
	
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
		<section class="programs">		
			<div class="row">
				<div class="large-4 columns center">			
					<img class="program-icon" width="67" height="67" src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/cosmetology-icon.png" alt="Cosmetology Icon">
					<div>
						<h2>Cosmetology</h2>
						<p>Hair, style, makeup, nails<br> and everything in between</p>
						<p><span>48 Weeks - 1600 Hours</span><br> Starting <?php the_field( 'next_cosmetology_start_date' ); ?>, <?php the_field( 'following_cosmetology_start_date' ); ?></p>
					</div>
					<a class="red-button" href="cosmetology-program">Learn More</a>
				</div>	
				<div class="large-4 columns center">
					<img class="program-icon" width="67" height="67" src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/esthetics-icon.png" alt="Esthetics Icon">					
					<div>
						<h2>Esthetics</h2>
						<p>Esthetics training that emphasizes<br> results-oriented treatments</p>
						<p><span>24 Weeks - 1600 Hours</span><br> Starting <?php the_field( 'next_esthetics_start_date' ); ?>, <?php the_field( 'following_esthetics_start_date' ); ?></p>
					</div>
					<a class="red-button" href="esthetics-program">Learn More</a>
				</div>	
				<div class="large-4 columns center">
					<img class="program-icon" width="67" height="67" src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/laser-icon.png" alt="Laser Icon">
					<div>						
						<h2>Laser</h2>
						<p>The best instruction<br> on the latest equipment</p>
						<p><span>10.5 Days - 88 Hours</span><br> Starting <?php the_field( 'next_laser_start_date' ); ?>, <?php the_field( 'following_laser_start_date' ); ?></p>
					</div>
					<a class="red-button" href="laser-program">Learn More</a>
				</div>		
			</div>	
		</section>	 

	<?php endwhile; endif; ?>	
	
	<div class="clear"></div>
	
<?php get_footer(); ?>	