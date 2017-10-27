jQuery( document ).ready(function() {
	// alert('Loaded');
	jQuery(".responsive-nav").hide();

	jQuery(".menu-icon").click(function() {
		jQuery(".responsive-nav").toggle();
	})
});