<?php
/*
Template Name: Extra Curricular
*/
?>

<?php get_header(); ?>
	
	<header class="student-life-interior-header">			
		<?php include("menus/academy-menu.php"); ?>
		
		<div class="row center">
			<h1 class="blue-header">Student Life</h1>
			<div class="large-10 large-centered columns">				
			</div>
		</div>			
	</header> 
	
	<?php include("menus/student-life-sub-menu.php"); ?>	
	
	<section class="white-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue no-padding-left">Extra Curricular</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<?php the_field('ec_intro');?>	
			</div>	
		</div>		
	</section>		
	
	<section class="student-council">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="blue-header no-margin-bottom">Student Council</h1>
			</div>	
		</div>		
		<div class="row">
			<div class="large-12 columns">
				<div class="transparent-white">
					<?php the_field('ec_sc');?>	
				</div>	
			</div>	
		</div>		
	</section>		
	
	
	<section class="blue-bg">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="white no-padding-left">Dream Team</h1>				
					<?php the_field('ec_dt');?>			
			</div>	
		</div>	
	</section>	
	
	<section class="charity">
		<div class="row">
			<div class="large-12 columns">	
				<h1 class="blue-header no-margin-bottom">Phoenix Children’s Hospital: Charity of Choice</h1>				
				<div class="transparent-white">
					<?php the_field('ec_charity');?>	
				</div> 						
			</div>	
		</div>	
	</section>		

<?php get_footer(); ?>