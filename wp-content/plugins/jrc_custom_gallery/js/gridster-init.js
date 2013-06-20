jQuery(document).ready(function($) {
	$('.media-items').gridster({
		widget_base_dimensions: [160, 160],
		widget_selector: ".media-item",
		max_cols: null,
		autogenerate_stylesheet: true
	});
});