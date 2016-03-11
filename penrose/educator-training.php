<?php
/*
Template Name: Educator Training
*/
?>

<?php get_header(); ?>
	
	<header class="training-header">			
		<?php include("menus/academy-menu.php"); ?>
		
		<div class="row center">
			<h1 class="red-header">Educator Training</h1>
			<div class="large-10 large-centered columns">				
				<div class="transparent-white">
					<?php the_field('educator_training_hero'); ?>
				</div>
			</div>
		</div>			
	</header> 	
	
	<section class="training-intro blue-bg">
		<div class="row">
			<div class="columns">
				<h1 class="white-header-blue">Program Highlights</h1>
			</div>	
		</div>	
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('educator_training_intro'); ?>
			</div>	
		</div>	
	</section>	
	
	<section class="training-tuition">
		
		<div class="row">
			<div class="large-6 medium-12 columns">
				<div class="panel">
					<h2>Cosmetology Educator</h2>
					<p>650 Hour Training Program</p>
						<div>
							<h3>Wed, Fri, Sat</h3>
							<p>8:30am - 6pm</p>
							<h3>Thursday</h3>
							<p>8am - 6pm</p>
						</div>	
						<h2 class="blue">Cost Breakdown</h2>				
							<div class="show-for-medium-up">
								<table>
									<tr>
										<th>Tuition</th>
										<th></th>
										<th>Student Kit</th>
										<th></th>
										<th>Registration</th>
										<th></th>
										<th>Total</th>
									</tr>	
									<tr>
										<td>$5,400</td>
										<td>+</td>
										<td>$1000</td>
										<td>+</td>
										<td>$100</td>
										<td>=</td>
										<td>$6,500</td>
									</tr>	
								</table>	
							</div>	
							<div class="row hide-for-medium-up">
								<div class="columns">
									<table class="et-mobile-table">
										<tr>
											<td>Tuition</td>
											<td>$5,400</td>
										</tr>
										<tr>
											<td>Student Kit</td>
											<td>$1000</td>
										</tr>		
										<tr>
											<td>Registration</td>
											<td>$100</td>
										</tr>	
										<tr class="table-border">
											<td colspan="2"></td>
										</tr>	
										<tr>
											<td>Total Investment</td>
											<td>$6,500</td>
										</tr>												
									</table>	
								</div>
							</div>	
					<a class="green-button" href="contact">Contact for Start Dates</a>		
				</div>	
			</div>		
		</div><!--END ROW-->
	</section>				

<?php get_footer(); ?>