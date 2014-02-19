/*
 * Author: Chloe Kaian Lam - @ChloeKaianLam
 * Email: hello@chloekaianlam.com
 */

(function(Site){

	/* Remove these warnings when you've resolved them
	(!document.getElementsByTagName('title')[0].innerHTML.length) ? console.warn("No page title set") : console.debug('Title set. Remove this warning.');
	(!document.querySelectorAll('meta[name="description"]')[0].content) ? console.warn("No meta description set") : console.debug('Description set. Remove this warning.');
	(!document.querySelectorAll('meta[name="keywords"]')[0].content) ? console.warn("No meta keywords set") : console.debug('Keywords set. Remove this warning.');
	Array.prototype.slice.call(document.querySelectorAll('meta[property*="og:"]')).forEach(function (el) {
		if ( !el.content.length ) console.warn("No content set for Facebook " + el.getAttribute('property'));
	});
	( _gaq[0][1].indexOf('-XXX') !== -1 ) ? console.warn('No Google Analytics set') : console.debug('Google Analytics set. Remove this warning.'); */


	var $nav = $('.nav, .close'),
		contactForm = $('#contact-form'),
		$thumb = $('.thumbnail'),
		$popup = $('.popup'),
		$closeBtn = $('.close');


	// Vertical scroll function for the main navigation, using the easing plugin for animation

	function smoothScroll() {

		$nav.on('click',function(event){
	        var $anchor = $(this);
	 
	        $('html, body').stop().animate({
	            scrollTop: $($anchor.data('page')).offset().top
	        }, 1500,'easeInOutExpo');
	        

	        $('html, body').stop().animate({
	            scrollTop: $($anchor.data('page')).offset().top
	        }, 1000);
	        
	        event.preventDefault();
	    });

	}
	smoothScroll();
	
	// Validation for contact form

	function formValidation() {

		contactForm.on('submit', function(e) {

			e.preventDefault();

			var name = $('input[name=name]').val(),
				email = $('input[name=email]').val(),
				message = $('textarea[name=message]').val(),
				data = $(this).serialize(),
				regexp = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/,
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
			
				processForm(data);

			}

			console.log(data);
		});

	}
	formValidation();

	// Ajax process form function

	function processForm(data) {

		$('.loader').fadeIn("slow");
	
		$.post('send.php', data, function(result) {

			$('.loader').fadeOut("slow");
			contactForm.addClass('hide');

			if ( result === 'ok' ) { 
				$('.thanks').addClass('show');
			}

			if ( result === 'failed' ) { 
				$('.sorry').addClass('show');
			}

		});
	}


	// Retrieve JSON object for project details

	function getProject() {

		$.getJSON('../assets/json/data.json', function(data) {

			var section = $('.project-details');

			$.get('../assets/template/project-list.html', function(template) {

				var renderedView = Mustache.to_html(unescape(template), data);

				section.html(renderedView);
			});

		}).fail(function(jqXhr, textStatus, error) {
			console.log("ERROR: " + textStatus + ", " + error);
		});

		// Triggering hashtag id for each project

		$thumb.on('click', function() {
			var thumbID = $(this).data('project');

			console.log(thumbID);
			$popup.addClass('active fadeInUpBig');

		// The associated project ID shows the related content

			$('#' + thumbID).addClass('show');
		});

		$closeBtn.on('click', function() {

			$popup.removeClass('active fadeInUpBig');
			$('.item').removeClass('show');

		});
	}
	getProject();


	// On page-ready
	$(document).ready(function(){

		// Add a data-attribute of the user-agent to <html> - very useful and worthwhile
		// Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
		var b = document.documentElement;
			b.setAttribute("data-useragent", Site.userAgent);
			b.setAttribute("data-platform", Site.platform);

		

	});

}(Site));
