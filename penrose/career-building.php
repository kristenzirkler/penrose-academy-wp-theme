<?php
/*
Template Name: Career Building
*/
?>

<?php get_header(); ?>
	
	<header class="student-life-interior-header">			
		<?php include("menus/academy-menu.php"); ?>
		
		<div class="row center">
			<h1 class="blue-header">Student Life</h1>
			<div class="large-10 large-centered columns">				
			</div>
		</div>			
	</header> 
	
	<?php include("menus/student-life-sub-menu.php"); ?>	
	
	<section class="white-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue no-padding-left">Career Building</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('cb_intro'); ?>
			</div>	
		</div>		
	</section>		
	
	<section class="cb-industry">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue-header no-margin-bottom">Industry Day</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<div class="transparent-white">
					<?php the_field('cb_industry'); ?>
				</div>	
			</div>	
		</div>		
	</section>		
	
	
	<section class="blue-bg">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="white no-padding-left">Salon &amp; Spa Tours</h1>				
					<?php the_field('cb_ss_tours'); ?>						
			</div>	
		</div>	
	</section>		

<?php get_footer(); ?>