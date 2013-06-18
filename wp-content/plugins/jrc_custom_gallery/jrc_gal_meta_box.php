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
        <div class="media-items">
        </div>
        <button class="btn btn-primary get-media">Add Image</button>
    </div>
</div>
    <?php
}


function jrc_gal_save_meta()
{
    
}

add_action('save_post', 'jrc_gal_save_meta');

