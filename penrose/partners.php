<?php
/*
Template Name: Partners
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
				<h1 class="green-header">Educational Partners</h1>
			</div>
		</div>	
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('partners_intro_text'); ?>
			</div>	
		</div>				
	</section>	
		
	<section class="partners">	
		
		<?php 
			$args = array(
		        'post_type' => 'partners',
				'posts_per_page' => -1
				);
			$the_query = new WP_Query( $args );	 
		?>
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
		<div class="single-partner">
			<div class="row">				
				<div class="columns">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="large-6 medium-6 columns">
					
					<?php 
		
						$image = get_field('partner_logo');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>							
					
				</div>	
				<div class="large-6 medium-6 columns">
					<?php the_content(); ?>
							<div class="row">
								<div class="columns">
									<div class="visit-partner">
										<p>for more details</p>
										<a class="green-button" href="<?php the_field('partner_link'); ?>" target="_blank">Visit Site</a>
									</div>
								</div>	
							</div>	
				</div>	
			</div>					
		</div><!--END SINGLE PARTNER-->			
	
	<?php endwhile; endif; ?>	
	
	</section>		
	
<?php get_footer(); ?>	