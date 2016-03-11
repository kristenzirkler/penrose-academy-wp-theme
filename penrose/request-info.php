<?php
/*
Template Name: Request Info
*/
?>

<?php get_header(); ?>

	<header class="request-info-header">			
		<?php include("menus/academy-menu.php"); ?>	
			<div class="row center">
				<h1 class="blue-header">Request Info</h1>
				<div class="large-10 large-centered columns">				
					<div class="transparent-white">
						<?php the_field('request_schedule_copy'); ?>
					</div>
				</div>
			</div>		
	</header>	
	
	<section class="schedule-tour-form blue-bg">
		<div class="row">
			<div class="large-10 large-centered columns">
				<h1 class="white no-padding-left no-margin-bottom long-header">Schedule a Campus Tour</h1>			
				<?php the_field('request_schedule_copy'); ?>		
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 20 ); } ?>	
			</div>	
												
	</section>	
	
	<?php 
		$args = array(
	        'post_type' => 'events',
	        'posts_per_page' => 1,
				'meta_query' => array(
				        array(							            
				            'key' => 'open_house',
				 			'value' => 'yes',
				 			'compare'=> 'LIKE'
				 		)
				 )
			);
		$the_query = new WP_Query( $args );	 
	?>		
	
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
	<section class="open-house">
		<div class="row">
			<div class="columns center">
				<h1 class="blue-header no-margin-bottom">Attend an Open House</h1>
			</div>	
			<div class="large-10 large-centered columns transparent-white center">
				<p>We'd love to meet you in person. Visit our campus for our next open house to learn more about 
					our educational programs and meet with currently enrolled students, staff and administration.</p>
					<p class="session-date"><?php $date = DateTime::createFromFormat('Ymd', get_field('event_date_picker')); echo $date->format('F j'); ?></p>
					<a class="green-button" href="<?php the_permalink(); ?>">RSVP for the Next Open House</a>
			</div>	
		</div>	
	</section>	
	
	<?php endwhile; endif; ?>
	
	<section class="questions-form green-bg">
		<div class="row">
			<div class="large-10 large-centered columns">
				<h1 class="white no-padding-left no-margin-bottom">Questions?</h1>			
				<p>Have a question about our programs, schedules, curriculum or anything else? Send us your 
					questions and we'll be in touch to get you the information you're after.</p>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 24 ); } ?>
			</div>	
		</div>							
	</section>	
	
	<?php get_footer(); ?>	