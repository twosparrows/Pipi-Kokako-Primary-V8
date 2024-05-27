<?php

// All Kōkako by Two Sparrows functions are pluggable, and can be replaced. Add any site specific functions below


// Base Year - the year the website went active, ie. year zero for the website

if ( !defined( 'kokako_base_year' ) ) {
	define( 'kokako_base_year', 2024 );
}


// Set up words within emails (used to break email addresses at appropriate places)
global $emailsWordList;
$emailsWordList = array(); // Just add words to this array, and any email addresses that use the tsp_email() function will break on these words on smaller screens instead of overflowing the screen. Exmaple array: array( "imelda", "design", "web", "two", "sparrows" ) . The @ and . symbols will be automatically set to break after


// Block recaptcha badge - see https://www.mkitall.com/how-to/load-recaptcha-on-required-pages-only/ and https://aurisecreative.com/blog/2021/10/load-contact-form-7-only-for-pages-with-form/
function block_recaptcha() {
	if ( !is_page( array( 'contact-us', 'contact' ) ) ) {
		wp_dequeue_script( 'google-recaptcha' );
		wp_deregister_script( 'google-recaptcha' );
		add_filter( 'wpcf7_load_js', '__return_false' );
		add_filter( 'wpcf7_load_css', '__return_false' );
	}
}
add_action( 'wp_print_scripts', 'block_recaptcha' );


?>