/*
 * Author:
 * Your name here
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


	// Set up your functions here



	// On page-ready
	$(document).ready(function(){

		// Add a data-attribute of the user-agent to <html> - very useful and worthwhile
		// Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
		var b = document.documentElement;
			b.setAttribute("data-useragent", Site.userAgent);
			b.setAttribute("data-platform", Site.platform);


		// Page is ready, start you stuff!


	});

}(Site));
