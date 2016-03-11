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
						<h1 class="green-header">Founder</h1>
					</div>	
				</div>	
				
				<div itemprop="founder" itemscope itemtype="http://schema.org/Person">
				
					<div class="row">
						<div class="large-6 columns">
						
								<?php 
					
									$image = get_field('founder_photo');
									
									if( !empty($image) ): ?>
									
										<a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								
								<?php endif; ?>	
											
								<div>
									<h2 itemprop="name" class="no-padding-left"><?php the_title(); ?></h2>
									<p itemprop="jobTitle"><?php the_field('founder_title'); ?></p>
								</div>	
						</div>	
						<div class="large-6 columns listening">
							<?php the_content(''); ?>	
									<div class="row">
										<div class="large-12 columns">
											<p><span>Currently listening to...</span></p>
										</div>	
									</div>
										<div class="row">	
											<div class="large-4 medium-4 columns">
													<?php 
										
														$image = get_field('flt_thumbnail_one');
														
														if( !empty($image) ): ?>
														
														<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
													
													<?php endif; ?>		
													<p><span><?php the_field('flt_artist_one'); ?></span><br>
													<?php the_field('flt_track_one'); ?></p>
											</div>	
											<div class="large-4 medium-4 columns">
													<?php 
										
														$image = get_field('flt_thumbnail_two');
														
														if( !empty($image) ): ?>
														
														<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
													
													<?php endif; ?>		
													<p><span><?php the_field('flt_artist_two'); ?></span><br>
													<?php the_field('flt_track_two'); ?></p>
											</div>	
											<div class="large-4 medium-4 columns">
													<?php 
										
														$image = get_field('flt_thumbnail_three');
														
														if( !empty($image) ): ?>
														
														<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
													
													<?php endif; ?>		
													<p><span><?php the_field('flt_artist_three'); ?></span><br>
													<?php the_field('flt_track_three'); ?></p>
											</div>																																											
										</div>	
								</div>					
						</div>	
					</div>	
				
				</div>
				
			</section>
	
		<?php endwhile; endif; ?>

<?php get_footer(); ?>