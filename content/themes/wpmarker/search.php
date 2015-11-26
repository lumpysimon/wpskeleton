<?php
/* template: search.php
 * this template is loaded for search results using the default wp search form
 */

/* get the header template */
get_header();

	?>
	
	<div class="container content-area" id="primary">
		
		<section class="search-results">
			
			<?php
				
				/* check we have any results to show */
				if( have_posts() ) {
					
					?>
					
					<header class="page-header">
				
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wpmarker_textdomain' ), get_search_query() ); ?></h1>
						
					</header><!-- page-header -->
					
					<?php
						
					/* start the loop through the search results */
					while( have_posts() ) : the_post();
					
						/* get the template part for search results */
						get_template_part( 'parts/content', 'search' );
					
					/* end loop */
					endwhile;
					
					/* show pagination for next/previous search results */
					echo paginate_links();
					
				/* no search results found */
				} else {
					
					/* load in the template part for no content found */
					get_template_part( 'content', 'none' );
					
				} // end if have search results
				
			?>
			
		</section><!-- // search-results -->
		
	</div><!-- // content-area -->
	
	<?php

/* get the footer template */
get_footer();