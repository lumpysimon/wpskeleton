<?php
/**
 * check whether we are local/staging or live
 * checks for a local-config.php file in the root folder
 */
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	
	/* we have a local config file so lets use it! */
	include( dirname( __FILE__ ) . '/local-config.php' );

/* we don't have a local config file - so lets add our db details etc. here */
} else {
	
	/* set constants for local and staging to false - we are live! */
	define( 'WP_LOCAL_DEV', false );
	define( 'WP_STAGING_DEV', false );
	
	/* db details for live production server */
	define( 'DB_NAME', '' );
	define( 'DB_USER', '' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
	
	/**
	 * prevents any file modifications from happening
	 * this includes wordpress auto updates
	 * also includes removing the file editor for themes and plugins
	 */
	define( 'DISALLOW_FILE_MODS', true );
	
	/**
	 * Custom Content Directory
	 */
	define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
	define( 'WP_CONTENT_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . '/content' );
	
}

/**
 * You almost certainly do not want to change these
 */
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**
 * Salts, for security - https://api.wordpress.org/secret-key/1.1/salt
 */
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

/**
 * Table prefix
 */
$table_prefix  = 'site_';

/**
 * limit the number of post revision to store
 */
define( 'WP_POST_REVISIONS', 25 );

/**
 * empty the trash for posts every 14 days
 */
define( 'EMPTY_TRASH_DAYS', 14 );

/**
 * Bootstrap WordPress
 */
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/cms/' );

require_once( ABSPATH . 'wp-settings.php' );