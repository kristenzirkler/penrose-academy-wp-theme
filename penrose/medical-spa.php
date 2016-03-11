<?php
/*
Template Name: Medical Spa
*/
?>

<?php get_header(); ?>
	
	<header class="medispa-header">			
		<?php include("menus/salon-menu.php"); ?>		
			<div class="row center">
				<h1 class="green-header">Medical Spa</h1>
				<div class="large-10 small-centered columns">				
					<div class="transparent-white">
						<?php the_field('medical_spa_services_intro'); ?>
					</div>
				</div>
			</div>
	</header>		
			
	<section class="medispa-menu green-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="white no-padding-left margin-bottom">Medical Spa Services Menu</h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-6 columns">
				<h3>Laser Treatments</h3>
					<ul>						
						<?php if( have_rows('med_spa_laser_treat') ): while ( have_rows('med_spa_laser_treat') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('med_spa_las_treat_name'); ?></label><span><?php the_sub_field('med_spa_las_treat_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>																													
					</ul>
			</div><!--END COLUMNS-->	
			<div class="large-6 columns">
				<h3>Laser Hair Reduction Treatments</h3>
					<ul>						
						<?php if( have_rows('med_spa_hair_reduction') ): while ( have_rows('med_spa_hair_reduction') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('med_spa_hair_reduc_name'); ?></label><span><?php the_sub_field('med_spa_hair_reduc_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>																														
					</ul>					
			</div><!--END COLUMNS-->				
		</div><!--END ROW-->	
		
		<div class="row">
			<div class="large-6 columns">
				<h3>Intense Pulsed Light Treatments</h3>
					<ul>						
						<?php if( have_rows('medical_spa_pulsed_light') ): while ( have_rows('medical_spa_pulsed_light') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('med_spa_pulsed_name'); ?></label><span><?php the_sub_field('med_spa_pulsed_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>																							
					</ul>	
			</div><!--END COLUMNS-->					
		</div><!--END ROW-->		
	</section>
			
	<section class="spa-questions">
		<div class="row">
			<h1 class="green-header no-margin-bottom">Frequently Asked Questions</h1>
			<div class="large-12 columns transparent-white">
				<?php the_field('med_spa_cq'); ?>																						
			</div>	
		</div>
	</section>	
			
<?php get_footer(); ?>