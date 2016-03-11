	<nav class="sub-menu">
		<ul>
			<li><a <?php if (is_page( array('esthetics-program'))) {echo 'class="current"';} ?> href="/esthetics-program">Overview</a></li>
			<li><a <?php if (is_page( array('esthetics-program-curriculum'))) {echo 'class="current"';} ?>href="/esthetics-program-curriculum">Curriculum</a></li>
			<li><a <?php if (is_page( array('esthetics-program-student-kit'))) {echo 'class="current"';} ?> href="/esthetics-program-student-kit">Student Kit</a></li>
			<li><a <?php if (is_page( array('esthetics-program-tuition'))) {echo 'class="current"';} ?>href="/esthetics-program-tuition">Tuition</a></li>
		</ul>
	</nav>	
	<div id="sub-trigger">
	    <span>Menu <i class="fa fa-caret-down"></i></span>
	</div>
	<nav id="sub-mobile"></nav>