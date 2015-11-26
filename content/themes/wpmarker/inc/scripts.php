<?php
/**
 * function wpmarker_enqueue_scripts_styles()
 * enqueues the theme scripts and styles in the head or footer
 */
function wpmarker_enqueue_scripts_styles() {
	
	global $wp_styles, $is_IE;
	
	/* load the theme js file */
	wp_enqueue_script(
		'wpmarker_js',
		get_template_directory_uri(). '/assets/js/main-min.js',
		array( 'jquery' ), // require these to loaded before this
		false, // no version of this file
		true // enqueue in footer not <head>
		
	);
	
	/* load the themes styles */
	wp_enqueue_style(
		'wpmarker_styles',
		get_template_directory_uri(). '/assets/css/style.css',
		array( 'dashicons' ), // load dashicons before this
		array(), // no version
		'all' // for all media types
	);
	
	/* lets check whether the browser is IE */
	if( $is_IE == true ) {
		
		/**
	     * load our IE 8 specific stylesheet:
	     * <!--[if lte IE 8]> ... <![endif]-->
	     */
		wp_enqueue_style( 'wpmarker_ie8_style', get_template_directory_uri(). '/assets/css/gridset-ie-lte8.css', array( 'wpmarker_styles' ) );
		$wp_styles->add_data( 'wpmarker_ie8_style', 'conditional', 'lte IE 8' );
		
		/**
	     * load our IE 9 specific stylesheet:
	     * <!--[if IE 9]> ... <![endif]-->
	     */
		wp_enqueue_style( 'wpmarker_ie9_style', get_template_directory_uri(). '/assets/css/gridset-ie-9.css', array( 'wpmarker_styles' ) );
		$wp_styles->add_data( 'wpmarker_ie9_style', 'conditional', 'IE 9' );
		
		/**
	     * load our greater than IE 9 specific stylesheet:
	     * equivalent of doing this
	     * <!--[if gt IE 9]> ... <![endif]-->
	     */
	    if( wpmarker_is_greater_than_ie_9() == true ) {
			
			wp_enqueue_style( 'wpmarker_gt_ie9_gridset', get_template_directory_uri(). '/assets/css/gridset.css', array( 'wpmarker_styles' ), array(), 'all' );
	    
	    } else {
		    
		    /* loads gridset for non IE browsers */
			wp_enqueue_style( 'wpmarker_non_ie_gridset', get_template_directory_uri(). '/assets/css/gridset.css', array( 'wpmarker_styles' ), array(), 'all' );
		    
	    }
	
	/* browser is not IE */
	} else {
		
		/* loads gridset for non IE browsers */
		wp_enqueue_style( 'wpmarker_non_ie_gridset', get_template_directory_uri(). '/assets/css/gridset.css', array( 'wpmarker_styles' ), array(), 'all' );
		
	}
	
	/* add custom fonts */
	wp_enqueue_style(
		'wpmarker_fonts',
		wpmarker_fonts_url(),
		array(),
		null
	);
	
}

add_action( 'wp_enqueue_scripts', 'wpmarker_enqueue_scripts_styles' );