<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
	<header class="blog-header">
		<?php include("menus/academy-menu.php") ?>
	</header>	
	
	<section class="blog-home">
		
		<?php
			$args = array( 
			post_type => 'post',
			'posts_per_page'=> 3 
			
			);
			$the_query = new WP_Query( $args );
		?>
	
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
		<div class="row">
			<div class="large-12 columns">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 
				<h2 class="<?php echo the_field( 'post_color' ); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="transparent-white"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read More</a></p>
			</div>	
		</div>			
		
		<?php endwhile; endif; ?>	
		
		<div class="row">
			<div class="large-12 columns">			
				<?php echo do_shortcode('[ajax_load_more post_type="post" pause="true" transition="fade" posts_per_page="2" scroll="false" offset="3" button_label="Load More Posts"]'); ?>	
			</div>
		</div>		
						
	</section>
	
<?php get_footer(); ?>