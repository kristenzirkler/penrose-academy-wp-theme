<?php
/*
Template Name: Financial Aid
*/
?>

<?php get_header(); ?>
	
	<header class="admissions-header">			
		<?php include("menus/academy-menu.php"); ?>		
		<div class="row center">
			<h1 class="blue-header">Admissions</h1>
		</div>	
	</header> 	

	<?php include("menus/admissions-sub-menu.php"); ?>	
	
	<section class="white-bg fa-intro">
		<div class="row">
			<div class="columns">
				<h1 class="blue-header margin-bottom">Financial Aid</h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('fa_intro'); ?>
			</div>	
		</div>	
		<div class="row">
			<div class="large-7 columns">				
				<div class="fa-disclaimer">
					<?php the_field('fa_disclaimer'); ?>
				</div>
			</div>	
			<div class="large-4 columns">
				<h2 class="blue no-padding-left margin-bottom">Financial Aid Questions?</h2>
				<p>Our Director of Financial aid is dedicated to helping you find the best financial 
					aid options available. Have a question?</p>
				<a class="green-button" href="/financial-aid-questions">Ask Us!</a>	
			</div>	
		</div>	
	</section>		
	
<section class="fa-apply">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue-header">How to Apply</h1>
					<div class="transparent-white">
						<div class="row">
							<div class="large-1 medium-2 small-3 small-centered large-uncentered medium-uncentered columns">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/blue/one.png" alt="1">
							</div>	
							<div class="large-11 medium-10 columns">
								<?php the_field('fa_step_one'); ?>
							</div>	
							<div class="large-1 medium-2 small-3 small-centered large-uncentered medium-uncentered columns clear">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/blue/two.png" alt="2">
							</div>	
							<div class="large-11 medium-10 columns">
								<?php the_field('fa_step_two'); ?>
							</div>	
							<div class="large-1 medium-2 small-3 small-centered large-uncentered medium-uncentered columns clear">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/blue/three.png" alt="3">
							</div>	
							<div class="large-11 medium-10 columns">
								<?php the_field('fa_step_three'); ?>
							</div>
							<div class="large-1 medium-2 small-3 small-centered large-uncentered medium-uncentered columns clear">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/blue/four.png" alt="4">
							</div>	
							<div class="large-11 medium-10 columns">
								<?php the_field('fa_step_four'); ?>
							</div>																							
						</div>	
					</div>
			</div>	
		</div>
	</section>	
	
	<section class="fa-questions blue-bg">
		<div class="row">
			<div class="columns">
				<h1 class="white-header-blue no-margin-bottom">Common Questions</h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('fa_cq'); ?>					
			</div>	
		</div>			
	</section>		

<?php get_footer(); ?>			