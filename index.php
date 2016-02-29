<?php
/*
 * @package aboh
 * @version 1.0
 */
/*
Plugin Name: A Bit of Hugh 
Plugin URI: http://www.hughlashbrooke.com/
Description:  Add a bit of Hugh Lashbrooke to your WordPress site and ensure that, no matter what you do, he'll be there to keep an eye on your progress.
Author: Gareth Allison
Version: 1.0
Author URI: https://twitter.com/garethisatwit
*/

	// Adds the Hugh Google Font stylesheet for Open Sans
	function hugh_add_google_font() {
		wp_enqueue_style( 'hugh-google-font', 'http://fonts.googleapis.com/css?family=Open+Sans:700', false ); 
	}
	add_action( 'wp_enqueue_scripts', 'hugh_add_google_font' );


	// Adds the Hugh stylesheet
	function hugh_enqueue_style() {
		wp_enqueue_style( 'hugh', '/wp-content/plugins/aboh/css/hugh.css', false ); 
	}
	add_action( 'wp_enqueue_scripts', 'hugh_enqueue_style' );


	// Adds the Hugh element to the front page of your site only
	function hugh_front_page() {
	if ( is_front_page() ) {	
		echo'<div id="hugh"></div>';
	    }
	}
	add_action( 'wp_footer', 'hugh_front_page' );

?>
