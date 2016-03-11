<?php
/*
Template Name: Laser Curriculum
*/
?>

<?php get_header(); ?>
	
	<header class="laser-sub-header">			
		<?php include('menus/academy-menu.php') ?>
			<div class="row center">
				<h1 class="red-header">Laser</h1>				
			</div>		
	</header>	
	
	<?php include('menus/laser-sub-menu.php') ?>
	
	<section class="white-bg">
		<div class="row">
			<div class="large-4 columns">
				<h1 class="green-header">Curriculum</h1>
			</div>	
		</div>	
		<div class="row">	
			<div class="large-11 columns">
				<?php the_field('laser_cur_intro'); ?>
			</div>	
		</div>	
	</section>
	
	<section class="zones">		
		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header">Zone A: Days 1 – 5 (42.5 hours)</h2>							
								<div class="large-6 columns">
									<h3>Highlights</h3>
										<?php the_field('laser_cur_zone_a_hl'); ?>									
								</div>	
								<div class="large-6 columns">
									<h3>Business &amp; Life Skills</h3>
										<?php the_field('laser_cur_zone_a_skills'); ?>	
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->	
		
		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header">Zone B: Days 6 – 11 (45.5 hours)</h2>							
								<div class="large-6 columns">
									<h3>Highlights</h3>
										<?php the_field('laser_cur_zone_b_hl'); ?>											
								</div>	
								<div class="large-6 columns">
									<h3>Business &amp; Life Skills</h3>
										<?php the_field('laser_cur_zone_b_skills'); ?>									
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->
	</section>	

<?php include 'program-cta.php';?>			

<?php get_footer(); ?>