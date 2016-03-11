	<nav class="sub-menu">
		<ul>
			<li><a <?php if (is_page( array('campus-life'))) {echo 'class="current"';} ?> href="/campus-life">Campus Life</a></li>
			<li><a <?php if (is_page( array('editorial-events'))) {echo 'class="current"';} ?>href="/editorial-events">Editorial Events</a></li>
			<li><a <?php if (is_page( array('study-abroad'))) {echo 'class="current"';} ?> href="/study-abroad">Study Abroad</a></li>
			<li><a <?php if (is_page( array('study-in-the-states'))) {echo 'class="current"';} ?>href="/study-in-the-states">Study in the States</a></li>
			<li><a <?php if (is_page( array('career-building'))) {echo 'class="current"';} ?>href="/career-building">Career Building</a></li>
			<li><a <?php if (is_page( array('extra-curricular'))) {echo 'class="current"';} ?>href="/extra-curricular">Extra Curricular</a></li>
		</ul>
	</nav>	
	<div id="sub-trigger">
	    <span>Menu <i class="fa fa-caret-down"></i></span>
	</div>
	<nav id="sub-mobile"></nav>