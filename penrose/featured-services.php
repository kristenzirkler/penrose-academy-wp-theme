<?php
/*
Template Name: Featured Services
*/
?>

<?php get_header(); ?>
	
	<header class="salon-specials-header">			
		<?php include("menus/salon-menu.php"); ?>	
	</header>	
	
	<div class="features-signup row center">
		<h1 class="blue-header">Monthly Features</h1>
		<div class="large-10 small-centered columns">				
			<div class="transparent-white">
			<p>Each month we feature new products and services in our Student Salon, Spa and Medical Spa. 
				Be sure to check back often or subscribe to our mailing list to stay up to date.</p>					
				<form action="//penroseacademy.us7.list-manage.com/subscribe/post?u=a2ebf29261e724f9bee9a3bf5&amp;id=074e8298de" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div class="row">
						<div class="large-7 large-offset-1 columns">
							<input type="email" value="" name="EMAIL" placeholder="email address" class="required email" id="mce-EMAIL">	
						</div>	
						<div class="large-2 columns left">
						    <input class="red-button" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						</div>   
				    </div>
				</form>
			</div>				
		</div>
	</div>		
	
	<section class="monthly-featured">
		<div class="row" data-equalizer>

			<?php 
				$args = array(
			        'post_type' => 'featured_services',
			        'posts_per_page' => 1,
						'meta_query' => array(
						        array(							            
						            'value' => 'Featured Service One',
						 			'compare' => 'LIKE',
						 			'orderby'=> 'modified'
						 		)
						 )
					);
				$the_query = new WP_Query( $args );	 
			?>		
	
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
	
				<div class="large-8 columns no-padding-right" data-equalizer-watch>
					<?php the_post_thumbnail(); ?> 
				</div>	
				<div class="large-4 columns no-padding-left">
					<div class="featured-details" data-equalizer-watch>
						<strong><?php the_title(); ?></strong>
						<?php the_content(); ?>
						<a class="red-button" href="/schedule">Book This Special</a>
					</div>	
				</div>
	
			<?php endwhile; endif; ?>

		</div><!--END ROW-->
		
		<div class="row" data-equalizer>	

		<?php 
			$args = array(
		        'post_type' => 'featured_services',
		        'posts_per_page' => 1,
					'meta_query' => array(
					        array(							            
					            'value' => 'Featured Service Two',
					 			'compare' => 'LIKE',
					 			'orderby'=> 'modified'
					 		)
					 )
				);
			$the_query = new WP_Query( $args );	 
		?>		

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<div class="large-6 columns">
				<?php the_post_thumbnail(); ?> 
				<div class="featured-details">
					<div data-equalizer-watch>
						<strong><?php the_title(); ?></strong>
						<?php the_content(); ?>
					</div>
					<a class="blue-button" href="/schedule">Book This Special</a>
				</div>	
			</div>

		<?php endwhile; endif; ?>
		

		<?php 
			$args = array(
		        'post_type' => 'featured_services',
		        'posts_per_page' => 1,
					'meta_query' => array(
					        array(							            
					            'value' => 'Featured Service Three',
					 			'compare' => 'LIKE',
					 			'orderby'=> 'modified'
					 		)
					 )
				);
			$the_query = new WP_Query( $args );	 
		?>			

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<div class="large-6 columns">
				<?php the_post_thumbnail(); ?> 
				<div class="featured-details">
					<div data-equalizer-watch>
						<strong><?php the_title(); ?></strong>
						<?php the_content(); ?>
					</div>
					<a class="blue-button" href="/schedule">Book This Special</a>
				</div>	
			</div>	

		<?php endwhile; endif; ?>

		</div><!--END ROW-->
		
		
		<div class="row" data-equalizer>
	
			<?php 
				$args = array(
			        'post_type' => 'featured_services',
			        'posts_per_page' => 1,
						'meta_query' => array(
						        array(							            
						            'value' => 'Featured Service Four',
						 			'compare' => 'LIKE',
						 			'orderby'=> 'modified'
						 		)
						 )
					);
				$the_query = new WP_Query( $args );	 
			?>			

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
		
					<div class="large-4 medium-4 columns">				
						<?php the_post_thumbnail(); ?> 
						<div class="featured-details">
							<div data-equalizer-watch>
								<strong><?php the_title(); ?></strong>
								<?php the_content(); ?>
							</div>						
						</div>	
					</div>	
		
			<?php endwhile; endif; ?>
	
			<?php 
				$args = array(
			        'post_type' => 'featured_services',
			        'posts_per_page' => 1,
						'meta_query' => array(
						        array(							            
						            'value' => 'Featured Service Five',
						 			'compare' => 'LIKE',
						 			'orderby'=> 'modified'
						 		)
						 )
					);
				$the_query = new WP_Query( $args );	 
			?>			

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>			
					
					<div class="large-4 medium-4 columns">
						<?php the_post_thumbnail(); ?> 				
							<div class="featured-details">
								<div data-equalizer-watch>
									<strong><?php the_title(); ?></strong>
									<?php the_content(); ?>
								</div>					
							</div>	
					</div>	
		
			<?php endwhile; endif; ?>
			
			<?php 
				$args = array(
			        'post_type' => 'featured_services',
			        'posts_per_page' => 1,
						'meta_query' => array(
						        array(							            
						            'value' => 'Featured Service Six',
						 			'compare' => 'LIKE',
						 			'orderby'=> 'modified'
						 		)
						 )
					);
				$the_query = new WP_Query( $args );	 
			?>		
	
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>				
				<div class="large-4 medium-4 columns">
					<?php the_post_thumbnail(); ?> 				
						<div class="featured-details">
							<div data-equalizer-watch>
								<strong><?php the_title(); ?></strong>
								<?php the_content(); ?>
							</div>		
						</div>	
				</div>	
	
			<?php endwhile; endif; ?>

		</div>			
	</section>	
	
<?php get_footer(); ?>	