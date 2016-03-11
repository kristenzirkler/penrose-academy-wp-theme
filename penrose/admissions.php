<?php
/*
Template Name: Admissions
*/
?>

<?php get_header(); ?>
	
	<header class="admissions-header">			
		<?php include("menus/academy-menu.php"); ?>
			<div class="row center">
				<h1 class="blue-header">Admissions</h1>
			</div>	
	</header> 	
	
	<?php include("menus/admissions-sub-menu.php"); ?>		
	
	<section class="admissions-career">
		<div class="row">
			<div class="large-6 medium-6 columns">
				<h1 class="blue-header margin-bottom long-header">Campus Tour</h1>
					<?php the_field('ad_cpi'); ?>
					<a class="blue-button" href="/career-planning">Read More</a>	
			</div>	
			<div class="large-6 medium-6 columns center">
				<div>
					<h2 class="green-header long-header no-margin-bottom">Scholarships</h2>
						<ul class="transparent-white">
						<?php
							$args = array( 'post_type' => 'scholarships');
							$the_query = new WP_Query( $args );
						?>
						
						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>								
							
							<li><?php the_title(''); ?></li>
							
						<?php endwhile; endif; ?>	
						
						<?php wp_reset_postdata(); ?>	
							
						</ul>	
						<a class="green-button" href="/scholarships">See All</a>
				</div>	
			</div>	
		</div>	
	</section>	
	
	<section class="admissions-financial blue-bg">
		<div class="row">
			<div class="large-6 medium-6 columns">
				<h2 class="white no-padding-left">Financial Aid</h2>
					<?php the_field('ad_fa'); ?>
				<a class="blue-button" href="/financial-aid">Read More</a>	
			</div>			
			<div class="large-6 medium-6 columns center">
				<div class="light-blue">
					<h2 class="white">Financial Aid Questions?</h2>
						<?php the_field('ad_faq'); ?>
				</div>	
				<a class="blue-button" href="/financial-aid-questions">Ask Us!</a>	
			</div>				
		</div>
	</section>	
	
	<div class="clear"></div>		
	
<?php get_footer(); ?>	