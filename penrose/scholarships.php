<?php
/*
Template Name: Scholarships
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
	
	<section class="misc">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue-header">Scholarships</h1>					
			</div>	
		</div>	
		
		<?php
			$args = array( 'post_type' => 'scholarships');
			$the_query = new WP_Query( $args );
		?>
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>			
		
		<div class="scholarship">
			<div class="row">
				<div class="large-12 columns">
					<h2><?php the_title(''); ?></h2>
					<?php the_content(''); ?>
				</div>
			</div><!--END ROW-->
		</div>	
		
		<?php endwhile; endif; ?>		
		
	</section>		

<?php get_footer(); ?>			