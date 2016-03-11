<?php
/*
Template Name: Esthetics Student Kit
*/
?>

<?php get_header(); ?>
	
	<header class="esthetics-sub-header">		
		<?php include('menus/academy-menu.php') ?>
		
		<div class="row center">
			<h1 class="red-header">Esthetics</h1>
		</div>	
	</header>	
	
	<?php include('menus/esthetics-sub-menu.php') ?>
	
	<img style="width: 100%;" src="<?php echo get_stylesheet_directory_uri() ?>/img/esthetics-student-kit.jpg" alt="Esthetics Student Kit">
	
	<section class="white-bg">
		<div class="row">
			<div class="columns">
				<h1 class="green-header">Student Kit</h1>
			</div>	
		</div>	
		<div class="row">	
			<div class="large-12 columns">
				<?php the_field('est_kit_intro'); ?>
			</div>	
		</div>	
	</section>	
	
	<section class="student-kit">
		<div class="kit-item">
			<div class="row">
				<div class="large-1 medium-2 large-offset-1 small-3 small-centered medium-uncentered large-uncentered columns">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/green-outline/one.png" alt="One">
				</div>	
				<div class="large-9 medium-9 columns left">
					<?php the_field('est_kit_one'); ?>
				</div>	
			</div>	
		</div>	
		<div class="kit-item">
			<div class="row">
				<div class="large-1 medium-2 large-offset-1 small-3 small-centered medium-uncentered large-uncentered columns">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/green-outline/two.png" alt="Two">
				</div>	
				<div class="large-9 medium-9 columns left">
					<?php the_field('est_kit_two'); ?>
				</div>	
			</div>	
		</div>	
		<div class="kit-item">
			<div class="row">
				<div class="large-1 medium-2 large-offset-1 small-3 small-centered medium-uncentered large-uncentered columns">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/green-outline/three.png" alt="Three">
				</div>	
				<div class="large-9 medium-9 columns left">
					<?php the_field('est_kit_three'); ?>
				</div>	
			</div>	
		</div>	
		<div class="kit-item">
			<div class="row">
				<div class="large-1 medium-2 large-offset-1 small-3 small-centered medium-uncentered large-uncentered columns">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/green-outline/four.png" alt="Four">
				</div>	
				<div class="large-9 medium-9 columns left">
					<?php the_field('est_kit_four'); ?>
				</div>	
			</div>	
		</div>											
	</section>	

<?php include 'program-cta.php';?>			

<?php get_footer(); ?>
