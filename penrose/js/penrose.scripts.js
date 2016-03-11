$(document).foundation({
  dropdown: {
    active_class: 'current',
    is_hover: true
  }
});

//Mobile menu icon
$(function() {
    $('.toggle-nav').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
    });
});	    

//Shows and hides mobile menu icon
function toggleNav() {
    if ($('.wrapper').hasClass('show-nav')) {
        // Do things on Nav Close
        $('.wrapper').removeClass('show-nav');
    } else {
        // Do things on Nav Open
        $('.wrapper').addClass('show-nav');
    }
}

//Owl carousel
$(document).ready(function() { 
	var owl = $("#owl-demo"); 
		owl.owlCarousel({     
	      itemsCustom : [	  	
	        [0, 2],
	        [700, 3],
	        [1000, 4],
	        [1200, 5],
	        [1400, 6]
	      ],
	      navigation : true,
	      navigationText: [
	      "<img src='../wp-content/themes/penrose/img/carousel-previous.png'>",
	      "<img src='../wp-content/themes/penrose/img/carousel-next.png'>"
      ], 
  }); 
});

//Image swap on blog post
$(".blog-post li img").click(function(){
	$('.main-blog-image').attr('src',$(this).attr('src').replace('thumb/', ''));
});


//Sticky footer
$(document).ready(function(){
$(window).resize(function(){
	    var footerHeight = $('footer').outerHeight();
	    var stickFooterPush = $('.push').height(footerHeight);
		$('.wrapper').css({'marginBottom':'-' + footerHeight + 'px'});
    });

	$(window).resize();
});


//Mobile sub-nav
$(document).ready(function(){
    $("#sub-mobile").html($(".sub-menu").html());
    $("#sub-trigger span").click(function(){
        if ($("nav#sub-mobile ul").hasClass("expanded")) {
            $("nav#sub-mobile ul.expanded").removeClass("expanded").slideUp(250);
            $(this).removeClass("open");
        } else {
            $("nav#sub-mobile ul").addClass("expanded").slideDown(250);
            $(this).addClass("open");
        }
    });
});	

//Equalize
$(document).foundation({
	equalizer : {
	// Specify if Equalizer should make elements equal height once they become stacked.
	equalize_on_stack: true
		}
});	

//Google map on events
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
