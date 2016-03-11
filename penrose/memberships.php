<?php
/*
Template Name: Memberships
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
				<h1 class="green-header">Memberships</h1>
					<p><?php the_field('memberships_intro_text'); ?></p>
			</div>
		</div>				
	</section>	

		<section class="memberships">	
			
			<?php 
				$args = array(
			        'post_type' => 'memberships',
					'posts_per_page' => -1
					);
				$the_query = new WP_Query( $args );	 
			?>
			
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
				<div class="single-member">
					
					<div itemprop="memberOf" itemscope itemtype="http://schema.org/Organization">
					
						<div class="row">				
							<div class="columns">
								<h2 itemprop="name"><?php the_title(); ?></h2>
							</div>
						</div>
						<div class="row">
							<div class="large-6 medium-6 columns">
								
								<?php 
					
									$image = get_field('member_logo');
									
									if( !empty($image) ): ?>
									
										<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
								
								<?php endif; ?>					
								
							</div>	
							<div class="large-6 medium-6 columns">
								<?php the_content(); ?>
										<div class="row">
											<div class="columns">
												<div class="visit-member">
													<p>for more details</p>
													<a class="green-button" href="<?php the_field('member_link'); ?>" target="_blank">Visit Site</a>
												</div>
											</div>	
										</div>	
							</div>	
						</div>	
					
					</div>
									
				</div><!--END SINGLE PARTNER-->		
		
		<?php endwhile; endif; ?>	
		
		</section>	
	
<?php get_footer(); ?>	