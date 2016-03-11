<?php
/*
Template Name: About Penrose
*/
?>

<?php get_header(); ?>
	
	<header class="about-header">			
		<?php include("menus/academy-menu.php"); ?>		
		<div class="row center">
			<h1 class="red-header">About Penrose</h1>
			<div class="large-10 large-centered columns">				
				<div class="transparent-white">
					<?php the_field( 'about_penrose_hero_text' ); ?>
				</div>
			</div>
		</div>			
	</header> 	
	
	<?php include("menus/about-sub-menu.php"); ?>	
	
	<section class="about-compare blue-bg">
		<div class="row">
			<div class="columns">
				<h1 class="white-header-blue no-margin-bottom">How We Compare</h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-12 columns">
				<?php the_field( 'about_penrose_compare_text' ); ?>
			</div>	
		</div>	
	</section>	
	
	<section class="about-prepare">
		<div class="row">
			<div class="large-12 columns">
			<h1 class="red-header no-margin-bottom">Preparing you for the Industry</h1>
				<div class="transparent-white right">
					<?php the_field( 'about_prep_text' ); ?>			
					<div class="row">
						<div class="large-5 medium-5 columns">
							<?php the_field( 'about_prep_left_list' ); ?>	
						</div>	
						<div class="large-5 medium-5 columns left">
							<?php the_field( 'about_prep_right_list' ); ?>	
						</div>							
					</div>			
				</div>		
			</div>	
		</div><!--END ROW-->
	</section>

	<section class="about-testimonial center">
		<div class="row">			
			<h1 class="red-header no-margin-bottom">What our Students Say</h1>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<blockquote class="transparent-white">&quot;<?php the_field( 'about_penrose_testimonial_quote' ); ?>&quot;</blockquote>
					<span class="testimonial-name right">- <?php the_field( 'about_penrose_testimonial_name' ); ?></span>
			</div>	
		</div>	
	</section>					

<?php get_footer(); ?>