jQuery(document).ready(function($) {
	$('.mobile-nav-link').on('click tap touch', function() {
		$('.mobile-nav').slideToggle('slow');
	});
});