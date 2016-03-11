<?php get_header(); ?>

	<header class="about-sub-header">			
		<?php include("menus/academy-menu.php"); ?>
		<div class="row center">
			<h1 class="red-header">About Penrose</h1>
		</div>				
	</header>	
	
	<?php include("menus/about-sub-menu.php"); ?>	
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<section class="bio">
			<div class="row">
				<div class="large-2 columns">
					<h1 class="green-header">Staff</h1>
				</div>	
			</div>	
			
			<div itemprop="employee" itemscope itemtype="http://schema.org/Person">
			
				<div class="row">
					<div class="large-6 columns">
						
							<?php 
				
								$image = get_field('staff_photo');
								
								if( !empty($image) ): ?>
								
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							
							<?php endif; ?>													
						
							<div>
								<h2 itemprop="name" class="no-padding-left"><?php the_title(); ?></h2>
								<p class="certs"><?php the_field('staff_credentials'); ?></p>
								<p itemprop="jobTitle"><?php the_field('staff_title'); ?></p>
							</div>	
					</div>	
					<div class="large-6 columns">
						<?php if( have_rows('staff_facts') ): ?>
						<?php while( have_rows('staff_facts') ): the_row(); ?>
						<p class="question"><?php the_sub_field('fact_question'); ?></p>	
						<p><?php the_sub_field('fact_answer'); ?></p>
						<?php endwhile; endif; ?>	
					</div>	
					
					<div class="large-6 columns listening">
						<div class="row">
							<div class="large-12 columns">
								<p><span>Currently listening to...</span></p>
							</div>	
						</div>
						<div class="row">	
							<div class="large-4 medium-4 columns">
									<?php 
						
										$image = get_field('slt_thumbnail_one');
										
										if( !empty($image) ): ?>
										
										<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
									
									<?php endif; ?>		
									<p><span><?php the_field('slt_artist_one'); ?></span><br>
									<?php the_field('slt_track_one'); ?></p>
							</div>	
							<div class="large-4 medium-4 columns">
									<?php 
						
										$image = get_field('slt_thumbnail_two');
										
										if( !empty($image) ): ?>
										
										<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
									
									<?php endif; ?>		
									<p><span><?php the_field('slt_artist_two'); ?></span><br>
									<?php the_field('slt_track_two'); ?></p>
							</div>	
							<div class="large-4 medium-4 columns">
									<?php 
						
										$image = get_field('slt_thumbnail_three');
										
										if( !empty($image) ): ?>
										
										<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
									
									<?php endif; ?>		
									<p><span><?php the_field('slt_artist_three'); ?></span><br>
									<?php the_field('slt_track_three'); ?></p>
							</div>																																
						</div>							
					</div>						
				</div>	
			</div>
		</section>
	
		<?php endwhile; endif; ?>

<?php get_footer(); ?>