<?php
/*
Template Name: Esthetics Program
*/
?>

<?php get_header(); ?>

	<header class="esthetics-header">			
		<?php include("menus/academy-menu.php"); ?>
			<div class="row center">
				<h1 class="red-header">Esthetics</h1>
				<div class="large-10 large-centered columns">				
					<div class="transparent-white">
						<?php the_field('est_hero_text'); ?>
					</div>					
				</div>
			</div>			
	</header>	
	
	<?php include("menus/esthetics-sub-menu.php"); ?>
	
	<section class="program-why white-bg">
		<div class="row">
			<div class="large-6 columns">
				<h1 class="green-header">Why Penrose</h1>
				<?php the_field('est_intro_text'); ?>
			</div>	
			
	<?php
		$args = array( 'post_type' => 'start_dates');
		$the_query = new WP_Query( $args );
	?>
	
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
				
			<div class="large-6 columns">
				<div class="panel">
					<h2>Upcoming Start Dates</h2>
					<h3>Thursday, Friday, and Saturday<br> 9:00am - 6:00pm</h3>
						<p><?php the_field( 'next_esthetics_start_date' ); ?>, 2016</p>						
						<p><?php the_field( 'following_esthetics_start_date' ); ?>, 2016</p>						
						<p><?php the_field( 'future_esthetics_start_date' ); ?>, 2016</p>																	
				</div>	
			</div>
		</div>	
	</section>	
	
	<?php endwhile; endif; ?>
	
	<?php wp_reset_postdata(); ?>	
	
	<section class="esthetics-program-highlights">
		<div class="row">
			<div class="large-12 columns">
			<h1 class="red-header no-margin-bottom">Program Highlights</h1>
				<div class="transparent-white">
					<?php the_field('est_highlights'); ?>
				</div>	
			</div>	
		</div>
	</section>	

<?php include 'program-cta.php';?>		

<?php get_footer(); ?>