<?php
/*
Template Name: Salon Services
*/
?>

<?php get_header(); ?>
	
	<header class="salon-services-header">			
		<?php include("menus/salon-menu.php"); ?>		
			<div class="row center">
				<h1 class="blue-header">Salon Services</h1>
				<div class="large-10 small-centered columns">				
					<div class="transparent-white">
						<?php the_field('salon_services_intro'); ?>
					</div>
				</div>
			</div>	
	</header>	
	
	<section class="salon-menu blue-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="white no-padding-left">Salon Services Menu</h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-6 columns">
				<h3>Hair</h3>
				
					<ul>
						<?php if( have_rows('ss_hair') ): while ( have_rows('ss_hair') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('salon_services_hair_name'); ?></label><span><?php the_sub_field('salon_services_hair_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>					
					</ul>				
	
			</div><!--END COLUMNS-->	
			<div class="large-6 columns">
				<h3>Color</h3>
				
					<ul>
						<?php if( have_rows('ss_color') ): while ( have_rows('ss_color') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('salon_services_color_name'); ?></label><span><?php the_sub_field('salon_services_color_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>					
					</ul>	
					
			</div><!--END COLUMNS-->			
		</div><!--END ROW-->	
		
		<div class="row">
			<div class="large-6 columns">
				<h3>Texture &amp; Perming</h3>

					<ul>
						<?php if( have_rows('ss_texture_perming') ): while ( have_rows('ss_texture_perming') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('salon_services_texture_name'); ?></label><span><?php the_sub_field('salon_services_texture_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>					
					</ul>	
	
			</div><!--END COLUMNS-->	
			<div class="large-6 columns">
				<h3>Makeup</h3>

					<ul>
						<?php if( have_rows('ss_makeup') ): while ( have_rows('ss_makeup') ) : the_row(); ?>
						
							<li>
								<div class="service-line"></div>    
								<label><?php the_sub_field('salon_services_makeup_name'); ?></label><span><?php the_sub_field('salon_services_makeup_price'); ?></span>
							</li>					        
						
						<?php endwhile; else : endif; ?>					
					</ul>	
	
			</div><!--END COLUMNS-->			
		</div><!--END ROW-->	
		<div class="row">
			<div class="large-12 columns">
				<p>* Pricing dependent on student experience, hair length, and the amount and any extra color needed.</p>
			</div>	
		</div>		
	</section>	
		
	<section class="salon-questions">
		<div class="row">
			<h1 class="red-header no-margin-bottom">Frequently Asked Questions</h1>
			<div class="large-12 columns transparent-white">
				<?php the_field('salon_services_cq'); ?>																					
			</div>	
		</div>
	</section>	
	
<?php get_footer(); ?>			