<?php
/*
Template Name: About Salon and Spa
*/
?>

<?php get_header(); ?>
	
	<header class="salon-about-header">			
		<?php include("menus/salon-menu.php"); ?>		
	</header>		
	
	<section class="salon-about green-bg">	
		<div class="row">
			<div class="large-12 columns">
				<h1 class="white no-padding-left">About our Student Salon, Spa &amp; Medical Spa</h1>
					<?php the_field('as_intro'); ?>
			</div>	
		</div>	
	</section>
	
	<section class="salon-testimonial">
		<div class="row">
			<div class="large-12 columns">
				<div class="transparent-white">
				<blockquote>&quot;<?php the_field('as_testimonial'); ?>&quot;</blockquote>
					<span class="red-header right">- <?php the_field('as_test_name'); ?></span>
				</div>	
			</div>	
		</div>	
		
		<div class="salon-works">
			<div class="row">
				<div class="large-12 columns">
					<h1 class="blue-header center margin-bottom">How Our Student Salon, Spa &amp; Medical Spa Work</h1>
						<?php the_field('as_works'); ?>
				</div>	
			</div>
		</div>			
	</section>			
	
<?php get_footer(); ?>	