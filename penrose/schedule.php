<?php
/*
Template Name: Schedule
*/
?>

<?php get_header(); ?>
	
	<header class="salon-contact-header">			
		<?php include("menus/salon-menu.php"); ?>	
	</header>	

	<section class="salon-contact blue-bg">
		<div class="row">
			<div class="large-6 medium-6 columns">
				<h1 class="white no-padding-left">Contact Us</h1>
					<?php the_field('schedule_intro'); ?>
			</div>	
			
			<div class="large-6 medium-6 columns">
				<table>
					<tr>
						<th></th>
						<th>Salon Hours</th>
						<th>Spa Hours</th>
						<th>Medical Spa Hours</th>
					</tr>	
					<tr>
						<td class="day">W</td>
						<td class="time"><?php the_field('salon_hours_wed'); ?></td>
						<td class="time">-</td>
						<td class="time"><?php the_field('medical_spa_hours_wednesday'); ?></td>
					</tr>	
					<tr>
						<td class="day">T</td>
						<td class="time"><?php the_field('salon_hours_thursday'); ?></td>
						<td class="time"><?php the_field('spa_hours_thursday'); ?></td></td>
						<td class="time">-</td>
					</tr>	
					<tr>
						<td class="day">F</td>
						<td class="time"><?php the_field('salon_hours_friday'); ?></td>
						<td class="time"><?php the_field('spa_hours_friday'); ?></td>
						<td class="time"><?php the_field('medical_spa_hours_friday'); ?></td>
					</tr>	
					<tr>
						<td class="day">S</td>
						<td class="time"><?php the_field('salon_hours_saturday'); ?></td>
						<td class="time"><?php the_field('spa_hours_saturday'); ?></td>
						<td class="time"><?php the_field('medical_spa_hours_saturday'); ?></td>
					</tr>																
				</table>
				<p class="phone-number">Call: 480-222-9540</p>	
			</div>	
		</div><!--END ROW-->	
	</section>	
	
	<section class="salon-contact-details">
		<div class="row">
			<div class="large-7 medium-7 columns">
				<h1 class="red-header">Download Forms</h1>
				<ul>
					<li><a href="/forms/waxing-consent.pdf">Facial &amp; Body Wax Consent Form</a></li>
					<li><a href="/forms/laser-consultation.pdf">Laser Consultation</a></li>
					<li><a href="/forms/patient-medical-history.pdf">Patient Medical History</a></li>
				</ul>																						
			</div>	
			<div class="large-5 medium-5 columns">

				<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3322.883118456726!2d-111.92753300000001!3d33.608337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b745d69dec829%3A0x2c98351a28f5d27!2sPenrose+Academy!5e0!3m2!1sen!2sus!4v1423186216030' width='400' height='350' frameborder='0' style='border:0'></iframe></div>
							
				<address>
					13402 N Scottsdale Rd<br> 
					SUITE #160<br>
					Scottsdale, AZ 85254
				</address>
			</div>	
		</div><!--END ROW-->	
	</section>

<?php get_footer(); ?>		