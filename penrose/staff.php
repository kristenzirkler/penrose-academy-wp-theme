<?php
/*
Template Name: Staff
*/
?>

<?php get_header(); ?>

	<header class="about-sub-header">			
		<?php include("menus/academy-menu.php"); ?>
		<div class="row center">
			<h1 class="red-header">About Penrose</h1>
		</div>				
	</header>	
	
	<?php include("menus/about-sub-menu.php"); ?>

	<section class="white-bg">
		<div class="row">
			<div class="columns">
				<h1 class="green-header">Meet Our Staff</h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-12 columns">
				<p><?php the_field( 'staff_intro_text' ); ?></p>
			</div>	
		</div>	
	</section>	
		
		<section class="green-bg founders">
			<div class="row">
				<div class="large-5 medium-12 columns">
					<h1 class="white-header-green">Our Founders</h1>
				</div>	
	
				<?php 
					$args = array(
						'post_type' => 'founders'						        
						);
					$staff_posts = new WP_Query( $args );	 
				?>	
		
				<?php if ( have_posts() ) : while ( $staff_posts->have_posts() ) : $staff_posts->the_post(); ?>
	
					<div itemprop="founder" itemscope itemtype="http://schema.org/Person">
						
						<div class="large-3 medium-3 small-6 columns center">
							<div class="staff-member" data-equalizer-watch>	
								
								<?php 
					
									$image = get_field('founder_thumb');
									
									if( !empty($image) ): ?>
									
										<a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								
								<?php endif; ?>
									
								<h2 itemprop="name"><?php the_title(''); ?></h2>
								<p itemprop="jobTitle"><?php the_field('founder_title'); ?></p>	
								
							</div>				
						</div>	
					
					</div>			
				
				<?php endwhile; endif; ?>	
	
			</div>
		</section>			
		
		<section class="white-bg team">
			<div class="row">
				<div class="large-4 medium-12 columns">
					<h1 class="green-header">Our Team</h1>
				</div>	
			</div>		
			
			<?php 
				$args = array(
					'post_type' => 'staff',
					'meta_key'   => 'last_name',
					'orderby'    => 'meta_value',
					'order'      => 'ASC',
					'posts_per_page' => '-1'							        
					);
				$staff_posts = new WP_Query( $args );	 
			?>	
			
			<div class="row center" data-equalizer>
		
				<?php if ( have_posts() ) : while ( $staff_posts->have_posts() ) : $staff_posts->the_post(); ?>
				
					<div itemprop="employee" itemscope itemtype="http://schema.org/Person">
					
						<div class="large-3 medium-3 small-6 columns panel">
							<div class="staff-member" data-equalizer-watch>
							
								<?php 
					
									$image = get_field('staff_thumb');
									
									if( !empty($image) ): ?>
									
										<a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								
								<?php endif; ?>					
									
								<h2 itemprop="name"><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h2>
								<p itemprop="jobTitle"><?php the_field('staff_title'); ?></p>	
									
							</div>				
						</div>
					
					</div>				
				
				<?php endwhile; endif; ?>	
			
			</div><!--END ROW-->	
		</section>
	
<?php get_footer(); ?>