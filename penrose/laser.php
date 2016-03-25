<?php
/*
Template Name: Laser Program
*/
?>

<?php get_header(); ?>

	<header class="laser-header">			
		<?php include("menus/academy-menu.php"); ?>
			<div class="row center">
				<h1 class="red-header">Laser</h1>
				<div class="large-10 large-centered columns">				
					<div class="transparent-white">
						<?php the_field('laser_hero_text'); ?>	
					</div>				
				</div>
			</div>			
	</header>	
	
	<?php include("menus/laser-sub-menu.php"); ?>
		
	<section class="program-why white-bg">
		<div class="row">
			<div class="large-6 columns">
				<h1 class="green-header">Why Penrose</h1>
					<?php the_field('laser_intro_text'); ?>
			</div>	
			
		<?php
			$args = array( 'post_type' => 'start_dates');
			$the_query = new WP_Query( $args );
		?>
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>				
			
			<div class="large-6 columns">
				<div class="panel">
					<h2>Upcoming Start Dates</h2>
					<p><strong><?php the_field( 'next_laser_start_date' ); ?>, 2016</strong></p>
						<p>Wednesday, Thursday, Friday, and Saturday<br> 9:00am - 6:00pm</p>
						</br>						
					<p><strong><?php the_field( 'following_laser_start_date' ); ?>, 2016 , <?php the_field( 'future_laser_start_date' ); ?>, 2016</strong></p>
						<p>Monday, Tuesday, Wednesday, Friday, and Saturday<br> 8:30am - 6:00pm</p>												
				</div>	
			</div>
			
		<?php endwhile; endif; ?>	
		
		<?php wp_reset_postdata(); ?>	
			
		</div>	
	</section>	
	
	
	<section class="laser-program-highlights">
		<div class="row">
			<div class="large-12 columns">
			<h1 class="red-header">Program Highlights</h1>
				<div class="transparent-white">
					<?php the_field('laser_program_highlights'); ?>
				</div>
			</div>	
		</div>
	</section>	

<?php include 'program-cta.php';?>			

<?php get_footer(); ?>