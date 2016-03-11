<?php
/*
Template Name: Study Abroad
*/
?>

<?php get_header(); ?>
	
	<header class="study-abroad-header">			
		<?php include("menus/academy-menu.php"); ?>		
		<div class="row center">
			<h1 class="green-header">Study Abroad</h1>
			<div class="large-10 large-centered columns">				
				<div class="transparent-white">
					<?php the_field('sa_hero'); ?>
				</div>
			</div>
		</div>			
	</header> 
	
	<?php include("menus/student-life-sub-menu.php"); ?>	

	<section class="study-intro blue-bg">
		<div class="row">
			<div class="large-7 columns">
				<?php the_field('sa_intro'); ?>
			</div>	
			<div class="large-5 columns">
				<div class="panel">	
					<h2>Details</h2>
					<?php the_field('sa_details_box'); ?>											
				</div>	
			</div>
		</div>	
	</section>	
	
	<section class="white-bg study-itinerary">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="blue-header">Barcelona Trip Itinerary</h1>										
			</div>	
			<div class="large-6 columns">
				<?php the_field('sa_itinerary_left'); ?>
			</div>
			<div class="large-6 columns">
				<?php the_field('sa_itinerary_right'); ?>
			</div>					
		</div>	
	</section>	
	
	<section class="abroad-testimonial center">
		<div class="row">			
			<h1 class="red-header no-margin-bottom">What Past Students Say</h1>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<blockquote class="transparent-white">&quot;<?php the_field('sa_testimonial'); ?>&quot;</blockquote>
					<span class="testimonial-name right">- <?php the_field('sa_testimonial_name'); ?></span>
			</div>	
		</div>	
	</section>	
	
	<section class="white-bg">
		<div class="row">			
			<div class="columns">
				<h1 class="green-header">Past Trips</h1>
			</div>	
		</div>
		<div class="row">
			<div class="large-3 medium-6 small-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/posters/london-dublin.png" alt="London Dublin">
			</div>	
			<div class="large-3 medium-6 small-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/posters/paris.png" alt="Paris">
			</div>	
			<div class="large-3 medium-6 small-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/posters/amsterdam-london.png" alt="London Dublin">
			</div>	
			<div class="large-3 medium-6 small-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/posters/tokyo.png" alt="Tokyo">				
			</div>										
		</div>	
	</section>						
	

<?php get_footer(); ?>