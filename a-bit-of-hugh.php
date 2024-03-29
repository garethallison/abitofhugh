<?php
/**
 * Plugin Name: A Bit of Hugh
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description:  Add a bit of Hugh Lashbrooke to your WordPress site and ensure that, no matter what you do, he'll be there to keep an eye on your progress.
 * Version: 1.0.0
 * Author: Gareth Allison
 * Author URI: https://twitter.com/garethisatwit
 *
 * @package aboh
 * @version 1.0
 */

	// Adds the Hugh Google Font stylesheet for Open Sans
	function hugh_add_google_font() {
		wp_enqueue_style( 'hugh-google-font', 'http://fonts.googleapis.com/css?family=Open+Sans:700', false );
	}
	add_action( 'wp_enqueue_scripts', 'hugh_add_google_font' );


	// Adds the Hugh stylesheet
	function hugh_enqueue_style() {
		wp_enqueue_style( 'hugh', plugins_url( '/css/hugh.css', __FILE__ ), false );
	}
	add_action( 'wp_enqueue_scripts', 'hugh_enqueue_style' );


	// Adds the Hugh element to the front page of your site only
	function hugh_front_page() {
	if ( is_front_page() ) {
		echo'<div id="hugh"></div>' . "\n";
	    }
	}
	add_action( 'wp_footer', 'hugh_front_page' );
