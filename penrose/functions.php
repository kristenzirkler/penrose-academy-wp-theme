<?php	

// Load CSS
function penrose_styles() {
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css?v=2&', '', false );
}
add_action( 'wp_enqueue_scripts', 'penrose_styles' );	

// Load JS
function penrose_js() {
	wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js');
	wp_enqueue_script( 'maps', get_template_directory_uri() . '/js/modernizr.js', array('jquery'), '', true );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true );	
	wp_enqueue_script( 'penrose', get_template_directory_uri() . '/js/penrose.scripts.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'penrose_js' );

// Favicon
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/img/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

// Menus
function register_penrose_menus() {
  register_nav_menus(
    array(
      'academy-menu' => __( 'Academy Menu' ),
      'salon-menu' => __( 'Salon Menu' ),
	  'social-menu' => __( 'Social Menu' )
    )
  );
}
add_action( 'init', 'register_penrose_menus' );


// Post Thumbnails
add_theme_support( 'post-thumbnails' );	
add_image_size( 'event-bg', 9999, 9999, true ); 

?>