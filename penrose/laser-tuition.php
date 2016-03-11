<?php
/*
Template Name: Laser Tuition
*/
?>

<?php get_header(); ?>
	
	<header class="laser-sub-header">		
		<?php include('menus/academy-menu.php') ?>
		
		<div class="row center">
			<h1 class="red-header">Laser</h1>
		</div>	
	</header>	

	<?php include('menus/laser-sub-menu.php') ?>
	
	<section class="white-bg">
		<div class="row">
			<div class="columns">
				<h1 class="green-header">Tuition</h1>
			</div>	
		</div>	
		<div class="row">	
			<div class="large-12 columns">				
				<?php the_field('laser_tuition_intro'); ?>
			</div>	
		</div>	
	</section>	
	
	<section class="laser-tuition-breakdown">
		<div class="row">
			<div class="columns center">
				<h1 class="blue-header center">Cost Breakdown</h1>		
			</div>
		</div>		
		<div class="row formula show-for-medium-up">
			<table>
				<tr>
					<th>Tuition</th>
					<th></th>
					<th>Student Kit</th>
					<th></th>
					<th>Registration<br> (Non-refundable)</th>
					<th></th>
					<th>Total Investment</th>
				</tr>	
				<tr>
					<td><?php the_field('laser_tuition'); ?></td>
					<td>+</td>
					<td><?php the_field('laser_tuition_student_kit'); ?></td>
					<td>+</td>
					<td><?php the_field('laser_tuition_fee'); ?></td>
					<td>=</td>
					<td><?php the_field('laser_tuition_total'); ?></td>
				</tr>	
			</table>	
		</div>	
		<div class="row hide-for-medium-up">
			<div class="columns">
				<table class="mobile-formula">
					<tr>
						<td>Tuition</td>
						<td><?php the_field('laser_tuition'); ?></td>
					</tr>
					<tr>
						<td>Student Kit</td>
						<td><?php the_field('laser_tuition_student_kit'); ?></td>
					</tr>		
					<tr>
						<td>Registration<br> (Non-refundable)</td>
						<td><?php the_field('laser_tuition_fee'); ?></td>
					</tr>	
					<tr class="table-border">
						<td colspan="2"></td>
					</tr>	
					<tr>
						<td>Total Investment</td>
						<td><?php the_field('laser_tuition_total'); ?></td>
					</tr>												
				</table>	
			</div>
		</div>			
	</section>	

<?php include 'program-cta.php';?>				
	
<?php get_footer(); ?>