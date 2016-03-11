<?php
/*
Template Name: Campus Life
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
				<h1 class="blue-header">Campus Life</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('cl_intro'); ?>
			</div>	
		</div>		
	</section>		
	
	<section class="blue-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="white no-padding-left">Assemblies</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('cl_assemblies'); ?>	
			</div>	
		</div>		
	</section>			
	
	<section class="cl-talent-shows">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="blue-header no-margin-bottom">Energizers and Talent Shows</h1>				
				<div class="transparent-white">
					<?php the_field('cl_ets'); ?>
				</div> 						
			</div>	
		</div>	
	</section>		
	
	<section class="white-bg">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="blue-header">Graduations</h1>				
					<?php the_field('cl_graduations'); ?>						
			</div>	
		</div>	
	</section>	

<?php get_footer(); ?>