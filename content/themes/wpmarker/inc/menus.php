<?php
/**
 * Registers nav menus locations
 */
function wpmarker_register_nav_menus() {
	register_nav_menus(
		array(
			'primary_nav' 	=> __( 'Primary Navigation', 'wpmarker_textdomain' )
		)
	);
}