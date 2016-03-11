<?php
/*
Template Name: Finacial Aid Questions
*/
?>

<?php get_header(); ?>
	
	<header class="admissions-header">			
		<?php include("menus/academy-menu.php"); ?>		
		<div class="row center">
			<h1 class="blue-header">Admissions</h1>
		</div>	
	</header> 	

	<?php include("menus/admissions-sub-menu.php"); ?>		
	
	<section class="financial-questions-form blue-bg">
		<div class="row">
			<div class="large-10 large-centered columns">
				<h1 class="white no-padding-left">Financial Aid Questions</h1>			
				<p>As the Director of Financial Aid at Penrose Academy, Cat is dedicated to helping you find the best financial aid options available. Have a question? Complete the form below
					or call us at <strong>480.222.9540</strong>.
				</p>
			</div>	
		</div>	
		<div class="row">
			<div class="large-10 large-centered columns">
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 39 ); } ?>
			</div>							
		</div><!--END ROW-->			
	</section>	

<?php get_footer(); ?>			