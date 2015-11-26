<?php
/*
Plugin Name: Site Utility Plugin
Description: Provides the site with all the non theme related functionality.
Author: Mark Wilkinson
Author URI: http://markwilkinson.me
Version: 0.1

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

/* exist if directly accessed */
if( ! defined( 'ABSPATH' ) ) exit;

/* define variable for path to this plugin file. */
define( '_LOCATION', dirname( __FILE__ ) );
define( '_LOCATION_URL', plugins_url( '', __FILE__ ) );

/**
 * include the necessary functions file for the plugin
 */
//require_once dirname( __FILE__ ) . '/functions/template-functions.php';