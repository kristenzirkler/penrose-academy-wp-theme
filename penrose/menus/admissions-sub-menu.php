	<nav class="sub-menu">
		<ul>
			<li><a <?php if (is_page('admissions')) {echo 'class="current"';} ?> href="/admissions">Overview</a></li>
			<li><a <?php if (is_page('career-planning')) {echo 'class="current"';} ?> href="/career-planning">Campus Tour</a></li>
			<li><a <?php if (is_page (array ('financial-aid', 'financial-aid-questions'))) {echo 'class="current"';} ?> href="/financial-aid">Financial Aid</a></li>
			<li><a <?php if (is_page('scholarships')) {echo 'class="current"';} ?>href="/scholarships">Scholarships</a></li>
		</ul>
	</nav>	