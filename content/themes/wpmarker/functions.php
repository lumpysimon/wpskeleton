<?php
/**
 * this is the themes functions file which stored theme related functionality
 * other functions files are loaded here located in the inc folder
 */
 
/* load theme dependent files */
load_template( get_template_directory() . '/inc/sidebars.php' );
load_template( get_template_directory() . '/inc/menus.php' );
load_template( get_template_directory() . '/inc/scripts.php' );
load_template( get_template_directory() . '/inc/custom-functions.php' );

/**
 * set the content width
 */
if ( ! isset( $content_width ) ) {
	//$content_width = 634;
}

/**
 * Theme setup functions - setups theme defaults and registers support
 * for various features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 */
function wpmarker_theme_setup() {
	
	/*
	* adds featured image support
	* other add_theme_support features go here
	*/
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
		
	/* add image sizes */
	add_image_size( 'post-thumb', 600, 600, true ); // add large thumbnail to support working on mobile width devices at full width
	
	/* adds the editor stylesheet */
	//add_editor_style( 'editor-style.css' );
	
	/* add your nav menus function to the 'init' action hook */
	add_action( 'init', 'wpmarker_register_nav_menus' );
	
	/* add your sidebars function to the 'widgets_init' action hook */
	add_action( 'widgets_init', 'wpmarker_register_sidebars' );
	
	/*
	 * styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style(
		array(
			'assets/css/editor-style.css',
			wpmarker_fonts_url()
		)
	);
	
	/**
	 * Set theme defaults, such as attachment and discussion settings
	 * sets thumbnail crop to true and blog public to true
	 */
	
	/* get the template name of this theme - used to store setup option name */
	$wpmarker_template = get_option( 'template' );
	
	/* check whether this has been run before */
	if ( get_option( $wpmarker_template . '_setup_status' ) != '1' ) {
	
		/* setup default wordPress settings array - these are options stored in the options table */
		$wpmarker_default_settings = array(
			'image_default_link_type'	=> '', // images link to nothing by default
			'thumbnail_crop' 			=> 1, // set wordpress to crop thumbnails always
			'users_can_register'		=> 0, // user can not register for this site
			'blog_public'				=> 1, // make sure that the site is not blocked from search engines
			'large_size_w'				=> '1600',
			'large_size_h'				=> '1600'
		);
		
		/* loop through each of the above, updating the option each time */
		foreach ( $wpmarker_default_settings as $key => $value ) {
			
			/* update each option in turn */
			update_option( $key, $value );
			
		}
		
		/* update the setup status option to prevent this running every time */
		update_option( $wpmarker_template . '_setup_status', '1' );
		
		/* output a message in the admin to let the user know some settings have changed */
		add_action(
			'admin_notices',
			function() {
		    	?>
		    	<div class="updated">
					<p>This theme has changed your WordPress default <a href="<?php echo admin_url( 'options-general.php' ); ?>" title="See Settings">settings</a></p>
				</div>
		    	<?php
			}
		);
	
	} // end if theme defaults already applied
	
}

add_action( 'after_setup_theme', 'wpmarker_theme_setup' );