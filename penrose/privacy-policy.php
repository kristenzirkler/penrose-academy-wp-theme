<?php
/*
Template Name: Privacy Policy
*/
?>

<?php get_header(); ?>
	
	<header class="misc-header">			
		<?php include("menus/academy-menu.php"); ?>		
	</header> 	
	
	<section class="misc">
		<div class="row">
			<div class="columns">
				<h1 class="blue-header">Penrose Academy's Privacy Policy</h1>
			</div>	
		</div>	
		
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('privacy_policy_copy'); ?>										
			</div>	
		</div>	
	</section>
<?php get_footer(); ?>			