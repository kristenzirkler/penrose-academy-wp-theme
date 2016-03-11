<?php
/*
Template Name: Esthetics Tuition
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
	
	<section class="white-bg">
		<div class="row">
			<div class="columns">
				<h1 class="green-header">Tuition</h1>
			</div>	
		</div>	
		<div class="row">	
			<div class="large-12 columns">				
				<?php the_field('est_tuition_intro'); ?>
			</div>	
		</div>	
	</section>	
	
	<section class="esthetics-tuition-breakdown">
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
					<th>Registration</th>
					<th></th>
					<th>Total Investment</th>
				</tr>	
				<tr>
					<td><?php the_field('est_tuition'); ?></td>
					<td>+</td>
					<td><?php the_field('est_tuition_kit_price'); ?></td>
					<td>+</td>
					<td><?php the_field('est_reg_fee'); ?></td>
					<td>=</td>
					<td><?php the_field('est_tuition_total'); ?></td>
				</tr>	
			</table>	
		</div>	
		<div class="row hide-for-medium-up">
			<div class="columns">
				<table class="mobile-formula">
					<tr>
						<td>Tuition</td>
						<td><?php the_field('est_tuition'); ?></td>
					</tr>
					<tr>
						<td>Student Kit</td>
						<td><?php the_field('est_tuition_kit_price'); ?></td>
					</tr>		
					<tr>
						<td>Registration</td>
						<td><?php the_field('est_reg_fee'); ?></td>
					</tr>	
					<tr class="table-border">
						<td colspan="2"></td>
					</tr>	
					<tr>
						<td>Total Investment</td>
						<td><?php the_field('est_tuition_total'); ?></td>
					</tr>												
				</table>	
			</div>
		</div>			
	</section>	
	
	<section class="financial-aid blue-bg">
		<div class="row center">
			<div class="columns">
				<h1 class="white-header-blue">Financial Aid</h1>
			</div>	
			<div class="large-10 large-centered columns">
				<p>There are many options available to you, from federal financial aid to financing. We’ll work with you, one-on-one 
					to find the perfect solution that meets your specific financial needs. Review our complete financial aid and 
					financing information to get started.</p>	
			</div>	
			<a href="/financial-aid">Learn More</a>
		</div>
	</section>	

<?php include 'program-cta.php';?>				
	
<?php get_footer(); ?>