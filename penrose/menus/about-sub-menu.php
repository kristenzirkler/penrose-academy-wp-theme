	<nav class="sub-menu">
		<ul>
			<li><a <?php if (is_page( array('about-penrose-academy'))) {echo 'class="current"';} ?> href="/about-penrose-academy">Overview</a></li>
			<li><a <?php if (is_page( array('staff'))) {echo 'class="current"';} ?> href="/staff">Staff</a></li>
			<li><a <?php if (is_page( array('partners'))) {echo 'class="current"';} ?> href="/partners">Partners</a></li>
			<li><a <?php if (is_page( array('memberships'))) {echo 'class="current"';} ?> href="/memberships">Memberships</a></li>
			<li><a <?php if (is_page( array('awards'))) {echo 'class="current"';} ?> href="/awards">Awards</a></li>
		</ul>
	</nav>	
	<div id="sub-trigger">
	    <span>Menu <i class="fa fa-caret-down"></i></span>
	</div>
	<nav id="sub-mobile"></nav>	