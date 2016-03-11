<?php get_header(); ?>
	<header class="single-blog-header">
		<?php include("menus/academy-menu.php") ?>
	</header>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<section class="blog-post">	
		<div class="featured-post-image">		
			<div class="row">
				<?php the_post_thumbnail('post-thumbnail', array( 'class' => "main-blog-image")); ?>
			</div>
		</div>
		<div class="row">			
			<h1 class="<?php echo the_field( 'post_color' ); ?>"><?php the_title(); ?></h1>	
		</div>
		
		<div class="row">
			<div class="large-12 columns">				
				<ul class="small-block-grid-2 large-block-grid-4">					
					<?php if( have_rows('gallery') ): ?>							
						<?php while( have_rows('gallery') ): the_row(); 
							$image = get_sub_field('gallery_photo');
							?>								
							<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></li>							
						<?php endwhile; endif; ?>	
				</ul>				
			</div>	
			<div class="large-12 columns">
				<?php the_content(); ?>
			</div>				
		</div>	
	</section>	
	
	<?php endwhile; endif; ?>	
	
	<section class="blog-carousel">
		<div id="owl-demo" class="owl-carousel owl-theme">  
			  
			<?php 
				$args = array(
			        'post_type' => 'post',
			        'posts_per_page' => -1
					);
				$the_query = new WP_Query( $args );	 
			?>		
	
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			      
			<div>
			  <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail(); ?></a>
			  <span><?php the_date('n.j.y'); ?> </span>
			</div>

			<?php endwhile; endif; ?>	
		</div>
	</section>	  
	
<?php get_footer(); ?>	
	