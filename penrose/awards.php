<?php
/*
Template Name: Awards
*/
?>

<?php get_header(); ?>
	
	<header class="about-sub-header">			
		<?php include("menus/academy-menu.php"); ?>		
		<div class="row center">
			<h1 class="red-header">Awards</h1>
		</div>	
	</header> 

	<?php include("menus/about-sub-menu.php"); ?>
	
	<section class="white-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="green-header">Awards</h1>
				<p><?php the_field('awards_intro_text'); ?></p>
			</div>
		</div>				
	</section>	

		<section class="featured-awards">
			<div class="row">
				<div class="large-4 medium-4 columns">
					
					<?php 
		
						$image = get_field('featured_award_left_image');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>					
					
					<h2 class="white-header-green"><?php the_field('featured_award_left_title'); ?></h2>
					<p itemprop="award"><?php the_field('featured_award_left_description'); ?></p>
					<p><a class="green-button" href="<?php the_field('featured_award_left_link'); ?>" target="_blank">Learn More</a></p>
				</div>	
				<div class="large-4 medium-4 columns">
					
					<?php 
		
						$image = get_field('featured_award_mid_image');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>				
					
					<h2 class="white-header-green"><?php the_field('featured_award_mid_title'); ?></h2>
					<p itemprop="award"><?php the_field('featured_award_mid_description'); ?></p>
					<p><a class="green-button" href="<?php the_field('featured_award_mid_link'); ?>" target="_blank">Learn More</a></p>
				</div>	
				<div class="large-4 medium-4 columns">
	
					<?php 
		
						$image = get_field('featured_award_right_image');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>	
	
					<h2 class="white-header-green"><?php the_field('featured_award_right_title'); ?></h2>
					<p itemprop="award"><?php the_field('featured_award_right_description'); ?></p>
					<p><a class="green-button" href="<?php the_field('featured_award_right_link'); ?>" target="_blank">Learn More</a></p>
				</div>							
			</div>				
		</section>	
		
		<section class="white-bg awards-list">
			<div class="row">
				<div class="large-12 columns">
					<h1 class="green-header margin-bottom">Additional Awards and Recognitions</h1>
					<?php the_field('awards_list'); ?>								
				</div>
			</div>				
	</section>	
	
<?php get_footer(); ?>	