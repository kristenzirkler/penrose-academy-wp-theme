<?php
/*
Template Name: Student Salon Spa
*/
?>

<?php get_header(); ?>
	
	<header class="ss-home-header">			
		<?php include("menus/salon-menu.php"); ?>
		
		<div class="row center">
			<h1 class="green-header  no-margin-bottom">Student Salon &amp; Spa</h1>
			<div class="large-10 small-centered columns">				
				<div class="transparent-white">
					<?php the_field('ssa_hero'); ?>
				</div>
				<a class="green-button" href="/schedule">To Schedule an Appointment Call us at (480) 222-9540</a>	
			</div>
		</div>	
		
	</header>		
	
<?php get_footer(); ?>	