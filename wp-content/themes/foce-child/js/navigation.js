/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function($) {
	jQuery(document).ready(function(){
		$('#nav-icon').click(function(){
			$(this).toggleClass('open');
		});
	});

	jQuery(document).ready(function() {
		const links = document.querySelectorAll('#nav li a');
		const delayIncrement = 500; // Délai entre chaque lien
		let delay = 0;
	
		const observer = new IntersectionObserver(entries => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					links.forEach((link, index) => {
						setTimeout(() => {
							link.classList.add('animated');
						}, delay);
						delay += delayIncrement;
					});
	
					return;
				}
	
				links.forEach(link => {
					link.classList.remove('animated');
				});
	
				delay = 0; // Reset the delay when elements are out of the trigger range
			});
		});
	
		observer.observe(document.querySelector('#nav')); 
	});
	
})(jQuery);