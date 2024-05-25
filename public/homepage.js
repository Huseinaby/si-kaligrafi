// Add a scroll event listener to the window
window.addEventListener('scroll', function() {
	// Get the nav element
	var nav = document.querySelector('nav');

	// If the page has scrolled, add a class to the nav element to make it opaque
	if (window.pageYOffset > 0) {
		nav.classList.add('scrolled');
	} else {
		nav.classList.remove('scrolled');
	}
});