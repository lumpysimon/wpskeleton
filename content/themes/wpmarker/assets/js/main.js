( function( $ ) {
	
	/**
	 * removes the no-js body class which is hard coded into body_class in header.php
	 * adds a body class of js - which is of course added when javascript is on
	 */
	var addJsBodyClass = function () {
		
		$('body').removeClass('no-js');
		$('body').addClass('js');
		
	};
	
	$(document).ready(addJsBodyClass);
	
	/**
	 * acting on the .entry-content divs this activates the fitvids
	 * library for repsonsive video and iframes
	 */
	var fitvids = function() {
	
		$(".entry-content").fitVids();
	
	};
	
	$(document).ready(fitvids);
	
	/**
	 * handles showing the mobile navigation for smaller screens
	 * activate class toggling when the mobile menu icon is clicked
	 */
	var mobilenav = function() {
		
		/* when the element with 'show-mobile-menu' id is clicked */
		$( ".mobile-menu-icon" ).click(function() {
			
			/* toggle the class 'mobile-menu-open' on the element with class 'mobile-menu' */
			$('.primary-menu').toggleClass('mobile-menu-open');
			
			/* add a 'mobile-menu-push-toleft' body class */
			$('body').toggleClass('mobpush-toleft');
			
			/* add an 'active' class to the button */
			$('.mobile-menu-icon').toggleClass('active');
			
		});
		
	};
	
	$(document).ready(mobilenav);
	
} )( jQuery );