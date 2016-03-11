<?php
/*
Template Name: Editorial Events
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
				<h1 class="blue no-padding-left">Editorial Events</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('ee_intro'); ?>
			</div>	
		</div>		
	</section>		
	
	<section class="ev-editorial-events">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue-header no-margin-bottom">Wander + Wonder</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<div class="transparent-white">
					<?php the_field('ee_ww'); ?>
				</div> 	
			</div>	
		</div>		
	</section>		
	
	<section class="ev-bb-event blue-bg">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="white no-padding-left">Bumble and Bumble Editorial Event</h1>				
					<?php the_field('ee_bb'); ?>					
			</div>	
		</div>	
	</section>	
	
	<section class="ev-inspired">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="blue-header no-margin-bottom">Film, Theater and Television Inspired Events</h1>				
				<div class="transparent-white">
					<?php the_field('ee_ftt'); ?>
				</div> 				
			</div>	
		</div>	
	</section>		

<?php get_footer(); ?>