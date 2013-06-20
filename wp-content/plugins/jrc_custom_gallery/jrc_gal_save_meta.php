<?php

$ids = array();

function save_jrc_gal($post_id)
{
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	if($_SERVER['REQUEST_METHOD'] != 'POST') {
		return $post_id;
	}

	if( !wp_verify_nonce( $_POST['jrc_gal_nonce'], 'jrc_gal_save_post')) {
		return $post_id;
	}

	if( 'page' == $_POST['post_type']) {
		if(!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} else if(!current_user_can('edit_post')) {
		return $post_id;
	}

	global $ids;

	foreach($_POST['media-id'] as $id) {
		$ids[] = (int)$id;
	}

	update_post_meta($post_id, 'media-id', json_encode($ids));


}

add_action('save_post', 'save_jrc_gal');

function add_to_ids($data)
{
	global $ids;
	$ids[] = (int)$data;
}