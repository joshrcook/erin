<?php

function jrc_gallery_shortcode($atts = array()) {
	extract(shortcode_atts(array(
		'id' => ''
	), $atts));

	global $add_button_scripts;

	$add_button_scripts = true;

	wp_enqueue_script('button-scrolling');

	if(get_post_type($id) == 'jrc_gal') { // insert it if it's actually a gallery
	$gallery = '<div class="row button-container">
			<div class="jrc-gallery">
				<ul>';

				    $picture_ids = json_decode(get_post_meta($id, 'media-id', true));
				    if($picture_ids) {
					    foreach($picture_ids as $pic_id) {
					    	$gallery .= '<li>' . wp_get_attachment_image($pic_id, 'slider-image', false) . '</li>';
					    }
					} // endif

				$gallery .= '</ul>
			</div>
			<div class="buttons">
				<div class="button button-left">
					<i class="icon-angle-left"></i>
				</div>
				<div class="button button-right">
					<i class="icon-angle-right"></i>
				</div>
			</div>
		</div>';

	return $gallery;

	}
}

add_shortcode('jrc_gallery', 'jrc_gallery_shortcode');