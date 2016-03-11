<?php
/*
Template Name: Student Life
*/
?>

<?php get_header(); ?>
	
	<header class="student-life-header">			
		<?php include("menus/academy-menu.php"); ?>
		
		<div class="row center">
			<h1 class="blue-header">Student Life</h1>
			<div class="large-10 large-centered columns">				
				<div class="transparent-white">
					<?php the_field('sl_hero'); ?>
				</div>	
			</div>
		</div>			
	</header> 
	
	<?php include("menus/student-life-sub-menu.php"); ?>	
	
	<section class="white-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue-header">Campus Life</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('sl_cl'); ?>
				<a class="green-button" href="/campus-life">Learn More</a>		
			</div>	
		</div>		
	</section>		
	
	<section class="sl-editorials">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue-header no-margin-bottom">Editorial Events<br class="rwd-break"> and Shows</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<div class="transparent-white">
					<?php the_field('sl_ees'); ?>
				</div>	
				<a class="green-button" href="/editorial-events">Learn More</a>		
			</div>	
		</div>		
	</section>		
	
	<section class="study center">
		<div class="large-6 medium-6 columns abroad">		
			<h1 class="blue-header no-margin-bottom">Study Abroad</h1>
				<div class="transparent-white">
					<?php the_field('sl_sa'); ?>
				</div>	
				<a class="blue-button" href="study-abroad">Our Upcoming Barcelona Trip</a>		
		</div>		
		<div class="large-6 medium-6 columns states">
			<h1 class="green-header no-margin-bottom">Study in the States</h1>
				<div class="transparent-white">
					<?php the_field('sl_ss'); ?>
				</div>
				<a class="green-button" href="study-in-the-states">Learn More</a>	
		</div>				
	</section>
	
	<section class="blue-bg clear">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="white no-padding-left">Career Building Opportunities</h1>				
					<?php the_field('sl_cbo'); ?>	
				<a class="green-button" href="/career-building">Learn More</a>						
			</div>	
		</div>	
	</section>		
	
	<section class="sl-extra-curricular">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="blue-header no-margin-bottom">Extra Curricular</h1>				
					<div class="transparent-white">
						<?php the_field('sl_ec'); ?>
					</div>		
				<a class="green-button" href="/extra-curricular">Learn More</a>						
			</div>	
		</div>	
	</section>	

<?php get_footer(); ?>