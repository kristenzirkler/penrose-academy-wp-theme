<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
	
	<header class="contact-header">			
		<?php include("menus/academy-menu.php"); ?>	
	</header>	

	<section class="contact blue-bg">
		<div class="row">
			<div class="large-7 medium-7 columns">
				<h1 class="white no-padding-left no-margin-bottom">Contact Us</h1>
				<p>Have questions about Penrose Academy and our educational programs? Give us a call and we'll get you
					the information you're after. We're available to answer your questions Monday through Saturday, 9:00am to 5:00pm.
					Or, feel free to <a href="#cq-form">send us your questions</a> and we'll be in touch to get you the information you're after.
				</p>
				
			</div>	
			<div class="large-5 medium-5 columns contact-address">
				<h3>Penrose Academy</h3>
				<address>
					13402 North Scottsdale Rd.<br>
					Suite B-160<br>
					Scottsdale, AZ 85254
				</address>		
				<p>PHONE: 480-222-9540</p>
				<!--
				<table>
					<tr>
						<th></th>
						<th>Cosmetology</th>
						<th>Esthetics</th>
						<th>Laser</th>
					</tr>	
					<tr>
						<td class="day">W</td>
						<td class="time">9-6PM</td>
						<td class="time">-</td>
						<td class="time">9-6PM</td>
						
					</tr>	
					<tr>
						<td class="day">T</td>
						<td class="time">9-6PM</td>
						<td class="time">9-6PM</td>
						<td class="time">9-6PM</td>
					</tr>	
					<tr>
						<td class="day">F</td>
						<td class="time">9-6PM</td>
						<td class="time">9-6PM</td>
						<td class="time">9-6PM</td>
					</tr>	
					<tr>
						<td class="day">S</td>
						<td class="time">9-6PM</td>
						<td class="time">9-6PM</td>
						<td class="time">9-6PM</td>
					</tr>																
				</table>
				<p class="phone-number">Call: 480-222-9540</p>	
				-->
			</div>	
		</div><!--END ROW-->	
	</section>	

	<div class="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3322.883118456726!2d-111.92753300000001!3d33.608337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b745d69dec829%3A0x2c98351a28f5d27!2sPenrose+Academy!5e0!3m2!1sen!2sus!4v1423186216030" frameborder="0" style="border:0"></iframe>
	</div>	
	
	<section class="green-bg-no-margin-top" id="cq-form">
		<div class="row">
			<div class="large-10 large-centered columns">
				<h2 class="white no-padding-left">Questions?</h2>
				<p>Have a question about our programs, schedules, curriculum or anything else? Send us your 
					questions and we'll be in touch to get you the information you're after.</p>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 24 ); } ?>	
			</div>
		</div>
	</section>	

<?php get_footer(); ?>		