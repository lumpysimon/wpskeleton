<?php
/* template: 404.php
 * this template is loaded when a user encounters a 404 error
 */

/* get the header template */
get_header();

	?>
	
	<div class="container content-area" id="primary">
		
		<section class="error-404 not-found">
			
			<header class="page-header">
				
				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'wpmarker_textdomain' ); ?></h1>
				
			</header><!-- page-header -->
			
			<div class="entry-content">
					
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wpmarker_textdomain' ); ?></p>

				<?php
					
					/* output a searchform for the user */
					get_search_form();
				
				?>
				
			</div><!-- // entry-content -->
			
		</section><!-- // error-404 no-found -->
		
	</div><!-- // content-area -->
	
	<?php

/* get the footer template */
get_footer();