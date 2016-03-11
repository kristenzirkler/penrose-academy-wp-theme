<?php
/*
Template Name: Career Planning
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
	
	<section class="misc">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue-header">About the Campus Tour</h1>
					<?php the_field('cpi_copy'); ?>								
			</div>	
		</div>	
	</section>	
	

<?php get_footer(); ?>			