<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>
	
		<?php 
			$args = array(
		        'post_type' => 'events',
		        'posts_per_page' => 1,
					'meta_query' => array(
					        array(							            
					            'key' => 'featured_event',
					 			'value' => 'yes',
					 			'compare'=> 'LIKE'
					 		)
					 )
				);
			$the_query = new WP_Query( $args );	 
		?>		
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'event-bg' ); ?>	


		<header class="events-header" style="background: url(<?php echo $featuredImage[0]; ?>) no-repeat; background: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">			

			<?php include("menus/academy-menu.php"); ?>

	
				<div class="row">
					<div class="large-12 large-centered columns">				
					<h1 class="green-header no-margin-bottom">Featured Event</h1>
						<div class="transparent-white right">
							<p><strong><?php the_title(); ?>  - <?php the_field( 'event_date' ); ?></strong></p> 
							<p><?php echo get_the_excerpt(); ?></p>
							<p class="center"><a class="red-button" href="<?php the_permalink(); ?>">View Details</a></p>
						</div>
					</div>
				</div>	
		
		</header>
	
	<?php endwhile; endif; ?>	
		
		
		<section class="upcoming-events blue-bg">
			<div class="row">
				<div class="large-5 medium-5 columns">	
					
					<?php 
						$args = array(
					        'post_type' => 'events',
					        'posts_per_page' => 1,
								'meta_query' => array(
								        array(							            
								            'key' => 'special_event',
								 			'value' => 'yes',
								 			'compare'=> 'LIKE'
								 		)
								 )
							);
						$the_query = new WP_Query( $args );	 
					?>		
			
					<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 
						<div>
							<h2 class="blue no-padding-left"><?php the_title(); ?></h2>
							<p><strong><?php the_field( 'event_date' ); ?></strong> <?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">View Details</a></p>
						</div>	
						
					<?php endwhile; endif; ?>	
						
				</div>
				<div class="large-7 medium-7 columns">
					<h2 class="white no-padding-left">Upcoming Events</h2>						
							<?php 
								$args = array(
							        'post_type' => array('events'),
							        'posts_per_page' => 3,
									'order' => 'ASC',
									'orderby' => 'meta_value_num',
									'meta_key' => 'event_date_picker'							        
									);
								$the_query = new WP_Query( $args );	 
							?>	
			
							<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>				

							<div class="row">
								<div class="small-3 columns">
									<img width="70" height="66" src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/date-icon.png" alt="Date Icon">
									<span class="event-cal-month"><?php $date = DateTime::createFromFormat('Ymd', get_field('event_date_picker')); echo $date->format('M'); ?></span>
									<span class="event-cal-day"><?php $date = DateTime::createFromFormat('Ymd', get_field('event_date_picker')); echo $date->format('j'); ?></span>
								</div>
								<div class="small-9 columns">
									<p><strong><?php the_title(); ?></strong> <?php echo get_the_excerpt(); ?><br> <a href="<?php the_permalink(); ?>">View Details</a></p>
								</div>		
							</div>	
							
							<?php endwhile; endif; ?>			
				</div>		
			</div>	
		</section>
			
<?php get_footer(); ?>