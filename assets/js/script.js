/*
 * Author: Chloe Kaian Lam - @ChloeKaianLam
 * Email: hello@chloekaianlam.com
 */

(function(Site){

	// Remove these warnings when you've resolved them
	(!document.getElementsByTagName('title')[0].innerHTML.length) ? console.warn("No page title set") : console.debug('Title set. Remove this warning.');
	(!document.querySelectorAll('meta[name="description"]')[0].content) ? console.warn("No meta description set") : console.debug('Description set. Remove this warning.');
	(!document.querySelectorAll('meta[name="keywords"]')[0].content) ? console.warn("No meta keywords set") : console.debug('Keywords set. Remove this warning.');
	Array.prototype.slice.call(document.querySelectorAll('meta[property*="og:"]')).forEach(function (el) {
		if ( !el.content.length ) console.warn("No content set for Facebook " + el.getAttribute('property'));
	});
	( _gaq[0][1].indexOf('-XXX') !== -1 ) ? console.warn('No Google Analytics set') : console.debug('Google Analytics set. Remove this warning.');



	// Vertical scroll function for the main navigation, using the easing plugin for animation

	function smoothScroll() {

		var $nav = $('.nav');

		$nav.bind('click',function(event){
	        var $anchor = $(this);
	 
	        $('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top
	        }, 1500,'easeInOutExpo');
	        

	        $('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top
	        }, 1000);
	        
	        event.preventDefault();
	    });

	}

	smoothScroll();



	// On page-ready
	$(document).ready(function(){

		// Add a data-attribute of the user-agent to <html> - very useful and worthwhile
		// Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
		var b = document.documentElement;
			b.setAttribute("data-useragent", Site.userAgent);
			b.setAttribute("data-platform", Site.platform);


		// Validation for contact form and posting via ajax

		var $contactForm = $('#contact-form'),
			regexp = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

			$('#contact-form').on('submit', function() {

				var name = $('input[name=name]').val(),
					email = $('input[name=email]').val(),
					message = $('textarea[name=message]').val(),
					data = $(this).serialize(),
					hasErrors = false;

				if ( name != "" ) {
					$('[name=name]').removeClass('error');
				} else {
					$('[name=name]').addClass('error');
					hasErrors = true;
				}

				if ( email != "" && regexp.test(email) ) {
					$('[name=email]').removeClass('error');
				} else {
					$('[name=email]').addClass('error');
					hasErrors = true;
				}

				if ( message != "" ) {
					$('[name=message]').removeClass('error');
				} else {
					$('[name=message]').addClass('error');
					hasErrors = true;
				}

				if ( hasErrors === false ) {
				/*
					$('.submit').fadeOut("slow");
					$('.loader').fadeIn("slow");
				*/
					$.post('send.php', data, function(result) {

						$('.loader').fadeOut("slow");

						if ( result == 'ok' ) { 
							$('.thanks').addClass('show');
						}

						if ( result == 'failed' ) { 
							$('.sorry').addClass('show');
						}

					});

				}

				console.log(data);

				return false;

			});


	});

}(Site));
