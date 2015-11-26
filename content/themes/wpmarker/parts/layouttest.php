<div class="container">
	
	<?php global $is_IE; ?>
	
	<div style="border: 1px solid #333333; padding: 16px">
		
		<?php
			
			/* if we are using internet explorer */
			if( $is_IE == true ) {
				echo '<p>You are using Internet Explorer - sorry about that!</p>';
			}	
			
		?>	
		
		<div class="ms-hide m-hide t-hide d-all">
			<h1>Large Desktops</h1>
		</div>
		
		<div class="ms-hide m-hide t-all d-hide">
			<h1>Smaller Desktops</h1>
		</div>
		
		<div class="ms-hide m-all t-hide d-hide">
			<h1>Tablets</h1>
		</div>
		
		<div class="ms-all m-hide t-hide d-hide">
			<h1>Phones</h1>
		</div>
		
		<div style="clear: both;"></div>
			
	</div>
	
</div>