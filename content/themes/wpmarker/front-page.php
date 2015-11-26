<?php
/* template: front-page.php
 * used to load the sites home page or font page
 * best used in conjunction with setting static page for your home page in settings > reading
 */

/* get the header template */
get_header();

	/* get the layout test template part */
	get_template_part( 'parts/layouttest' );
	
/* get the footer template */
get_footer();