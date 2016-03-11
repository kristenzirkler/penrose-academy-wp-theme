<?php
/*
Template Name: Cosmetology LP AdWords
*/
?>

<?php get_header(); ?>

	<header class="cos-lp-header">			
		<div class="cos-lp-gradient">
			<div class="row">
				<a href="/" title="Penrose Academy">
					<img width="237" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="Penrose Academy"></a>
			</div>
		</div>
	</header>	
	
	<section>
		<div class="row lp-details">
			<div class="large-7 medium-7 columns">
				<div class="lp-start-date">
					<p>We are accepting applications for our March 16 Cosmetology class.</p>
				</div>	
				<h1 class="red-header">Cosmetology Program</h1>
				<p>In our Cosmetology program, you’ll begin by learning a foundation of cutting, 
					coloring and styling techniques that will quickly progress to encompass 
					advanced skills and relevant topics that will put you in a position to 
					succeed in today’s beauty industry.</p>
				<p>Our Cosmetology curriculum is flexible and always evolving to provide 
					you the most relevant, comprehensive education available; an education 
					that’s designed to prepare you for your career.</p>
				<h2 class="red-header">Program Highlights</h2>	
					<ul>
						<li>1600 hours (48 weeks)</li>
						<li>Four-day schedule (34 hours/week): Wednesday, Thursday, Friday 
						and Saturday from 9:00 a.m. to 6:00 p.m.</li>						
						<li>Bumble and bumble, Joico and MUD Make-up product partnerships</li>
						<li>Pivot Point Member School-based curriculum</li>
						<li>Both classroom and hands-on training in our 76-chair Student Salon</li>
						<li>Weekly all-school educational assemblies</li>
						<li>Professional Development & Life Skills classes</li>
						<li>Semi-annual editorial styling and runway presentation events</li>
					</ul>
			</div>	
			<div class="large-5 medium-5 columns">
				<div class="blue-bg">
				<h2 class="white no-padding-left">Schedule a Tour</h2>
					<p>Send us your contact information and we’ll work with you to 
						schedule a Campus Tour at your earliest convenience.</p>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 48 ); } ?>	
				</div>	
			</div>
		</div>						
	</section>	
	
	<section class="lp-partners">
		<div class="row">
			<div class="large-3 medium-3 small-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/lp/pivot-point.png" alt="Pivot Point School">
			</div>	
			<div class="large-3 medium-3 small-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/lp/bumble-and-bumble.png" alt="Bumble and bumble">
			</div>	
			<div class="large-3 medium-3 small-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/lp/make-up-designory.png" alt="Make-up Designory">
			</div>	
			<div class="large-3 medium-3 small-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/lp/joico-logo.png" alt="Joico">
			</div>										
		</div>		
	</section>		
	
	<section class="green-bg">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="white-header-green">Why Penrose</h1>
				<p>At Penrose Academy, our single focus is your success as a highly marketable and sought-after 
					beauty industry professional. We do not own salons, spas, or product lines. We are an independent, 
					privately-owned academy with one goal: connecting you to a successful career in the beauty industry.</p>
						<ul>
							<li>Industry leading outcomes: 97% completion, 100% licensure & 92% placement</li>
							<li>Relevant educational partnerships that drive our innovative curriculum</li> 
							<li>Business development and life skills training that provide a competitive edge</li>
							<li>Monthly editorial competitions & semi-annual runway styling events</li>
							<li>A thriving school culture that promotes inclusivity and participation in a variety of extra-curricular activities</li>	
						</ul>	
			</div>	
		</div>	
	</section>	




<?php get_footer(); ?>