<?php
/*
Template Name: Spa Services
*/
?>

<?php get_header(); ?>
	
	<header class="spa-services-header">			
		<?php include("menus/salon-menu.php"); ?>		
			<div class="row center">
				<h1 class="green-header">Spa Services</h1>
				<div class="large-10 small-centered columns">				
					<div class="transparent-white">
						<?php the_field('spa_services_intro'); ?>
					</div>
				</div>
			</div>
	</header>		
			
	<section class="spa-menu green-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="white no-padding-left margin-bottom">Spa Services Menu</h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-6 columns">
				<h3>Facial Treatments</h3>
					
					<ul>
						<?php if( have_rows('spa_services_facial') ): while ( have_rows('spa_services_facial') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('spa_services_facial_name'); ?></label><span><?php the_sub_field('spa_services_facial_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>	
						
						<li>
							<div class="service-line"></div> 
							<label>Dermaplaning</label><span>$35</span><br>		
						</li>						
						<li>
							<div class="service-line"></div> 					
							<label class="spa-sub-item">Add-on Microcurrent</label><span>$10</span>							
						</li>
						<li>
							<div class="service-line"></div> 										
							<label class="spa-sub-item">Add-on Dermaplaning</label><span>$10</span>
						</li>							
					</ul>
					
					<p>All facial treatments are customized during consultation.</p>
					
			</div><!--END COLUMNS-->	
			<div class="large-6 columns">
				<h3>Color</h3>
				
					<ul>
						<?php if( have_rows('spa_services_color') ): while ( have_rows('spa_services_color') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('spa_services_color_name'); ?></label><span><?php the_sub_field('spa_services_color_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>
						
							<li>
								<div class="service-line"></div>
								<label>Eyelash & Eyebrow Tinting Package<br> (Same day, same guest only)</label><span>$15</span>
							</li>								
					</ul>
							
			</div><!--END COLUMNS-->			
		</div><!--END ROW-->	
		
		<div class="row">
			<div class="large-6 columns">
				<h3>Waxing</h3>
					<ul>						
						<?php if( have_rows('spa_services_waxing') ): while ( have_rows('spa_services_waxing') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('spa_services_waxing_name'); ?></label><span><?php the_sub_field('spa_services_waxing_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>																												
					</ul>
					
			</div><!--END COLUMNS-->	
			<div class="large-6 columns">
				<h3>Makeup</h3>
					<ul>						
					<?php if( have_rows('spa_services_makeup') ): while ( have_rows('spa_services_makeup') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('spa_services_makeup_name'); ?></label><span><?php the_sub_field('spa_services_makeup_price'); ?></span>
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
				<?php the_field('spa_services_cq'); ?>																						
			</div>	
		</div>
	</section>		
			
<?php get_footer(); ?>