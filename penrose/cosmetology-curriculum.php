<?php
/*
Template Name: Cosmetology Curriculum
*/
?>

<?php get_header(); ?>
	
	<header class="cos-sub-header">			
		<?php include('menus/academy-menu.php') ?>
			<div class="row center">
				<h1 class="red-header">Cosmetology</h1>				
			</div>		
	</header>	
	
	<?php include('menus/cos-sub-menu.php') ?>
	
	<section class="white-bg">
		<div class="row">
			<div class="large-4 columns">
				<h1 class="green-header">Curriculum</h1>
			</div>	
		</div>	
		<div class="row">	
			<div class="large-11 columns">
				<?php the_field( 'cosmetology_curriculum_intro_text' ); ?>
			</div>	
		</div>	
	</section>
	
	<section class="zones">		
		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header">Zone 1: The Foundation</h2>											
								<div class="large-6 columns">
									<h3>Technical</h3>
									<?php the_field( 'cosmetology_zone_1_technical' ); ?>	
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
									<?php the_field( 'cosmetology_zone_1_theory' ); ?>
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">
					
					<?php 
		
						$image = get_field('cosmetology_zone_1_graph');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>						
					
				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->	
		
		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header">Zone 2: Apprenticeship</h2>											
								<div class="large-6 columns">
									<h3>Technical</h3>
									<?php the_field( 'cosmetology_zone_2_technical' ); ?>											
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
									<?php the_field( 'cosmetology_zone_2_theory' ); ?>
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('cosmetology_zone_2_graph');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>						

				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->
		
		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header">Zone 3: Makeup &amp; More</h2>												
								<div class="large-6 columns">
									<h3>Technical</h3>
									<?php the_field( 'cosmetology_zone_3_technical' ); ?>										
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
									<?php the_field( 'cosmetology_zone_3_theory' ); ?>									
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('cosmetology_zone_3_graph');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>		

				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->	

		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header">Zone 4: Editorial Styling</h2>													
								<div class="large-6 columns">
									<h3>Technical</h3>
									<?php the_field( 'cosmetology_zone_4_technical' ); ?>										
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
									<?php the_field( 'cosmetology_zone_4_theory' ); ?>											
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('cosmetology_zone_4_graph');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>	

				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->	
		
		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header left">Zone 5: Nails</h2>																					
								<div class="large-6 columns clear">
									<h3>Technical</h3>
									<?php the_field( 'cosmetology_zone_5_technical' ); ?>									
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
									<?php the_field( 'cosmetology_zone_5_theory' ); ?>										
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('cosmetology_zone_5_graph');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>

				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->	
		
		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header">Zone 6: Focus on the Future</h2>							
								<div class="large-6 columns">
									<h3>Technical</h3>
									<?php the_field( 'cosmetology_zone_6_technical' ); ?>									
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
									<?php the_field( 'cosmetology_zone_6_theory' ); ?>
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('cosmetology_zone_6_graph');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>

				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->												
	</section>	

<?php include 'program-cta.php';?>				

<?php get_footer(); ?>