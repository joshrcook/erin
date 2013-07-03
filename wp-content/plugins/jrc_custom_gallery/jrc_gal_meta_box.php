<?php

function jrc_gal_add_meta_boxes()
{
    add_meta_box('jrc-gal', 'Gallery', 'jrc_gal_show_meta', 'page', 'normal', 'default');
}

add_action('add_meta_boxes', 'jrc_gal_add_meta_boxes');


function jrc_gal_show_meta() 
{
    ?>
<div class="bootstrap">
    <div class="media">
    	<form method="post">
    		<?php wp_nonce_field('jrc_gal_save_post', 'jrc_gal_nonce'); ?>
    		<?php $custom = get_post_custom();
    		$media_id_array = json_decode($custom['media-id'][0]);
    		?>
    		<div class="media-items">
    		<?php
    		$attr = array(
    			'class' => 'image-preview img-polaroid'
			);
            if($media_id_array) {
    		foreach($media_id_array as $media_id) {
                if(wp_get_attachment_image($media_id)) {
    			?>
    			<div class="media-item" data-row="1" data-col="1" data-sizex="1" data-sizey="1">
    				<input class="media-id" type="hidden" name="media-id[]" value="<?php echo $media_id; ?>" />
    				<?php echo wp_get_attachment_image($media_id, 'thumbnail', false, $attr); ?>
    				<span class="delete-media">X</span>
    			</div>
			<?php } 
                }
            } ?>
	        </div>
	    </form>
        <button class="btn btn-primary get-media">Add Image</button>
    </div>
</div>
    <?php
}