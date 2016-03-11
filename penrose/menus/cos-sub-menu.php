	<nav class="sub-menu">
		<ul>
			<li><a <?php if (is_page( array('cosmetology-program'))) {echo 'class="current"';} ?> href="/cosmetology-program">Overview</a></li>
			<li><a <?php if (is_page( array('cosmetology-program-curriculum'))) {echo 'class="current"';} ?>href="/cosmetology-program-curriculum">Curriculum</a></li>
			<li><a <?php if (is_page( array('cosmetology-program-student-kit'))) {echo 'class="current"';} ?> href="/cosmetology-program-student-kit">Student Kit</a></li>
			<li><a <?php if (is_page( array('cosmetology-program-tuition'))) {echo 'class="current"';} ?>href="/cosmetology-program-tuition">Tuition</a></li>
		</ul>
	</nav>	
	<div id="sub-trigger">
	    <span>Menu <i class="fa fa-caret-down"></i></span>
	</div>
	<nav id="sub-mobile"></nav>