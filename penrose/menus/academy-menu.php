			<div class="academy-header-nav">
				<nav class="social-nav">			
					<ul class="right">
						<li><a href="/contact">contact</a></li>
						<li><a href="/blog">blog</a></li>
						<li><a href="/events">events</a></li>
						<li><a href="https://penrose.klassapp.com/login" target="_blank">myPA</a></li>						
						<li><a href="https://twitter.com/penroseacademy" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/penroseacademy" title="Facebook" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="https://www.youtube.com/c/penroseacademy" title="YouTube" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
						<li><a href="http://instagram.com/penroseacademy" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>					
					</ul>	
				</nav>	
				
				<span itemprop="name" class="hidden-schema">Penrose Academy</span>
				
				<div class="line-one"></div>	
				<div class="line-two"></div>			
				<a itemprop="url" href="/" title="Penrose Academy"><img itemprop="logo" width="237" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="Penrose Academy"></a>
								
				<nav class="main-nav">
					<ul class="right">
						<li>								
							<a <?php if (is_page( array('about-penrose-academy', 'staff', 'partners', 'memberships', 'awards'))) {echo 'class="current"';} ?> href="/about-penrose-academy" data-dropdown="about-drop">About</a>									
								<div id="about-drop" class="f-dropdown" data-dropdown-content>
									<div>
										<a href="/about-penrose-academy">Overview</a>								
										<a href="/staff">Staff</a>
										<a href="/partners">Partners</a>
										<a href="/memberships">Memberships</a>
										<a href="/awards">Awards</a>												
									</div>																
								</div>																		
						</li>				
						<li>
							<div class="columns">
							<a <?php if (is_page( array('programs', 'cosmetology-program', 'cosmetology-program-curriculum', 'cosmetology-program-student-kit', 'cosmetology-program-tuition', 'esthetics-program', 'esthetics-program-Curriculum', 'esthetics-program-student-kit', 'esthetics-program-tuition', 'laser-program', 'laser-program-Curriculum', 'laser-pogram-student-kit', 'laser-program-tuition', 'educator-training'))) {echo 'class="current"';} ?>								
							href="/programs" data-dropdown="programs-drop">Programs</a>									
								<div id="programs-drop" class="f-dropdown" data-dropdown-content>
									<div class="left">										
										<span>Cosmetology</span><br>
										<p>Hair, style, makeup, nails<br> and everything in between</p>		
										<a href="/cosmetology-program">Overview</a>
										<a href="/cosmetology-program-curriculum">Curriculum</a>
										<a href="/cosmetology-program-student-kit">Student Kit</a>
										<a href="/cosmetology-program-tuition">Tuition</a>														
									</div>	
									<div class="left">										
										<span>Esthetics</span><br>
										<p>Esthetics training<br> that's more than skin deep</p>		
										<a href="/esthetics-program">Overview</a>
										<a href="/esthetics-program-curriculum">Curriculum</a>
										<a href="/esthetics-program-student-kit">Student Kit</a>
										<a href="/esthetics-program-tuition">Tuition</a>														
									</div>	
									<div class="left">										
										<span>Laser</span><br>
										<p>Thorough instruction on<br> the latest equipment</p>		
										<a href="/laser-program">Overview</a>
										<a href="/laser-program-curriculum">Curriculum</a>										
										<a href="/laser-program-tuition">Tuition</a>														
									</div>	
									<div class="left">										
										<span>Additional Programs</span><br>
										<p>Help teach next generation<br> of cosmetologists and estheticians</p>		
										<a href="/educator-training">Educator Training</a>															
									</div>																		
								</div>
							</div>											
						</li>
						<li><a <?php if (is_page( array('student-life', 'campus-life', 'editorial-events', 'study-abroad', 'study-in-the-states', 'career-building', 'extra-curricular'))) {echo 'class="current"';} ?> 
							href="/student-life" data-dropdown="student-life-drop">Student Life</a>
							<div id="student-life-drop" class="f-dropdown" data-dropdown-content>
								<div>	
									<a href="/student-life">Overview</a>							
									<a href="/campus-life">Campus Life</a>
									<a href="/editorial-events">Editorial Events</a>
									<a href="/study-abroad">Study Abroad</a>
									<a href="/study-in-the-states">Study in the States</a>
									<a href="/career-building">Career Building</a>
									<a href="/extra-curricular">Extra Curricular</a>											
								</div>																
							</div>	
						<li>
						<a <?php if (is_page( array('admissions', 'financial-aid', 'career-planning', 'scholarships'))) {echo 'class="current"';} ?> href="/admissions" data-dropdown="admissions-drop">Admissions</a>
							<div id="admissions-drop" class="f-dropdown" data-dropdown-content>
								<div>
									<a href="/admissions">Overview</a>								
									<a href="/financial-aid">Financial Aid</a>
									<a href="/career-planning">Campus Tour</a>
									<a href="/scholarships">Scholarships</a>											
								</div>																
							</div>		
						</li>
						<li><a <?php if (is_page( array('request-information'))) {echo 'class="current"';} ?> href="/request-information">Apply Now</a></li>
						<li><a href="/student-salon-and-spa">Salon &amp; Spa</a></li>			
					</ul>	
				</nav>	
			</div><!--END HEADER NAV-->									
				
		
			<div class="academy-mobile-gradient">
				<!--OFF CANVAS MENU-->
				<div id="site-canvas">
				    <a href="#" class="toggle-nav"><i class="fa fa-bars"></i></a>
				     <div id="site-menu">					       					       
				       
				       <ul>
					       <li class="mobile-top-nav"><a href="tel:480-222-9540">Call Us</a></li>				       
					       	<hr>
							<li class="mobile-top-nav"><a href="/">Home</a></li>
							<li class="mobile-top-nav"><a href="/about-penrose-academy">About</a></li>								
							<li class="mobile-top-nav"><a href="/cosmetology-program">Cosmetology</a></li>
							<li class="mobile-top-nav"><a href="/esthetics-program">Esthetics</a></li>
							<li class="mobile-top-nav"><a href="/laser-program">Laser</a></li>
							<li class="mobile-top-nav"><a href="/educator-training">Educator<br> Training</a></li>
							<li class="mobile-top-nav"><a href="/student-life">Student Life</a></li>
							<li class="mobile-top-nav"><a href="/admissions">Admissions</a></li>
							<li class="mobile-top-nav"><a href="/request-information">Request Info</a></li>
							<hr>
							<li class="mobile-top-nav"><a href="/student-salon-and-spa">Salon &amp; Spa</a>	
							<hr>
							<li class="mobile-top-nav"><a href="https://penrose.klassapp.com/login">myPA</a>		
							<li><a href="/contact">contact</a></li>
							<li><a href="/blog">blog</a></li>
							<li><a href="/events">events</a></li>			        
				       </ul>
				     </div>				     
				</div>
				
				<div class="row">
					<div class="large-4 columns large-centered center mobile-logo">
						<a href="/" title="Penrose Academy"><img width="237" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="Penrose Academy"></a>
					</div>
				</div>
			</div>	
			