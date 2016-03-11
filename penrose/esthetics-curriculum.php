<?php
/*
Template Name: Esthetics Curriculum
*/
?>

<?php get_header(); ?>
	
	<header class="esthetics-sub-header">			
		<?php include('menus/academy-menu.php') ?>
			<div class="row center">
				<h1 class="red-header">Esthetics</h1>				
			</div>		
	</header>	
	
	<?php include('menus/esthetics-sub-menu.php') ?>
	
	<section class="white-bg">
		<div class="row">
			<div class="large-4 columns">
				<h1 class="green-header">Curriculum</h1>
			</div>	
		</div>	
		<div class="row">	
			<div class="large-11 columns">
				<?php the_field('est_cur_intro'); ?>
			</div>	
		</div>	
	</section>
	
	<section class="zones">		
		<div class="single-zone">
			<div class="row">
				<div class="large-8 medium-8 columns">
					<div class="row">
						<div class="large-12 columns">
							<h2 class="blue-header">Zone 1: Science and Business</h2>					
								<div class="large-6 columns">
									<h3>Technical</h3>
										<?php the_field('est_cur_zone_1_technical'); ?>										
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
										<?php the_field('est_cur_zone_1_theory'); ?>	
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('est_cur_zone_1_graph');
						
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
							<h2 class="blue-header">Zone 2: Student Spa &amp; New Techniques</h2>					
								<div class="large-6 columns">
									<h3>Technical</h3>
										<?php the_field('est_cur_zone_2_technical'); ?>									
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
										<?php the_field('est_cur_zone_2_theory'); ?>
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('est_cur_zone_2_graph');
						
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
							<h2 class="blue-header">Zone 3: Advanced Practices</h2>						
								<div class="large-6 columns">
									<h3>Technical</h3>
										<?php the_field('est_cur_zone_3_technical'); ?>											
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
										<?php the_field('est_cur_zone_3_theory'); ?>
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('est_cur_zone_3_graph');
						
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
							<h2 class="blue-header">Zone 4: Skin Careers &amp; Beyond</h2>							
								<div class="large-6 columns">
									<h3>Technical</h3>
										<?php the_field('est_cur_zone_4_technical'); ?>										
								</div>	
								<div class="large-6 columns">
									<h3>Theory</h3>
										<?php the_field('est_cur_zone_4_theory'); ?>									
								</div>	
						</div>	
					</div><!--END ROW-->	
				</div>	
				<div class="large-4 medium-4 columns">

					<?php 
		
						$image = get_field('est_cur_zone_4_graph');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>	

				</div>	
			</div><!--END ROW-->	
		</div><!--END SINGLE ZONE-->							
	</section>	

<?php include 'program-cta.php';?>				

<?php get_footer(); ?>