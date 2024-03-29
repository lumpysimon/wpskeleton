<?php
/*******************************************************
* This is a sample local-config.php file
* In it, you *must* include the four main database defines
* You may include other settings here that you only want
* enabled on your local development checkouts
*******************************************************/
define( 'DB_NAME', 'wpskelton' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

/*******************************************************
* set a constant to indicate local / staging server
*******************************************************/
define( 'WP_LOCAL_DEV', true );
define( 'WP_STAGING_DEV', false );

/*******************************************************
* You can add local specific things here
* for example using the uploads-by-proxy plugin to load
* media from uploads from the live site.
*******************************************************/
//define( 'UBP_SITEURL', 'http://livedomain.com' );