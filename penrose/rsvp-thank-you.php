<?php
/*
Template Name: RSVP Thank You
*/
?>

<?php get_header(); ?>
	
	<header class="about-sub-header">			
		<?php include("menus/academy-menu.php"); ?>		
	</header> 

	<section class="misc">
		<div class="row">
			<div class="columns">
				<h1 class="green-header"><?php the_title(); ?></h1>
			</div>
		</div>	
		<div class="row">
			<div class="large-12 columns">
				<?php the_content(); ?>
			</div>	
		</div>				
	</section>	

<!-- Google Code for RSVP Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1024908576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "jtWwCITXqV4QoLrb6AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1024908576/?label=jtWwCITXqV4QoLrb6AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
	
<?php get_footer(); ?>	