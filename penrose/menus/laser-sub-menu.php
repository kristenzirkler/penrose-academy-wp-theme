	<nav class="sub-menu">
		<ul>
			<li><a <?php if (is_page( array('laser-program'))) {echo 'class="current"';} ?> href="/laser-program">Overview</a></li>
			<li><a <?php if (is_page( array('laser-program-curriculum'))) {echo 'class="current"';} ?>href="/laser-program-curriculum">Curriculum</a></li>
			<li><a <?php if (is_page( array('laser-program-tuition'))) {echo 'class="current"';} ?>href="/laser-program-tuition">Tuition</a></li>
		</ul>
	</nav>	
	<div id="sub-trigger">
	    <span>Menu <i class="fa fa-caret-down"></i></span>
	</div>
	<nav id="sub-mobile"></nav>