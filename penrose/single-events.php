<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'event-bg' );?>

	<header class="single-events-header" style="background: url(<?php echo $featuredImage[0]; ?>) no-repeat; background: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">			
		<?php include("menus/academy-menu.php"); ?>
	</header>
	
	<section class="white-bg event-info">
		<div class="row">
			<div class="columns">
				<h1 class="green-header"><?php the_title(); ?></h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-7 medium-7 columns">
				<?php the_content(); ?>		
			</div>	
			<div class="large-5 medium-5 columns">
				<h2 class="no-padding-left"><?php the_field( 'event_date' ); ?> - <?php the_field( 'event_time' ); ?></h2>				
				<?php 

				$location = get_field('event_map');

				if( !empty($location) ):
				?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>				
				
				<address>
					<?php the_field( 'event_address' ); ?>
				</address>
			</div>	
		</div>			
	</section>
	
	<?php if( get_field('rsvp') != "" ){ ?>
		<section class="rsvp-form blue-bg">
			<div class="row">
				<div class="large-10 columns large-centered">
					<h1 class="white no-padding-left">Register for this Event</h1>			
				</div>
			</div>
			<div class="row">	
				<div class="large-10 columns large-centered">				
					<?php the_field('rsvp_notes'); ?>		
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 28 ); } ?>
				</div>
			</div><!--END ROW-->	
		</section>	
	<?php } ?>
	
	<?php if( get_field('open_house') != "" ){ ?>
		<section class="rsvp-form blue-bg">
			<div class="row">
				<div class="large-10 columns large-centered">
					<h1 class="white no-padding-left">Register for this Open House</h1>			
				</div>
			</div>
			<div class="row">	
				<div class="large-10 columns large-centered">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 41 ); } ?>
				</div>
			</div><!--END ROW-->	
		</section>	
	<?php } ?>		
	
	<?php if( get_field('industry_day') != "" ){ ?>
		<section class="rsvp-form blue-bg">
			<div class="row">
				<div class="large-10 columns large-centered">
					<h1 class="white no-padding-left">Register for Industry Day</h1>			
				</div>
			</div>
			<div class="row">	
				<div class="large-10 columns large-centered">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 53 ); } ?>
				</div>
			</div><!--END ROW-->	
		</section>	
	<?php } ?>			

	<?php endwhile; endif; ?>
				
<?php get_footer(); ?>