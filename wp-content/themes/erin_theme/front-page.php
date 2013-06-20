<?php 
get_header();
?>

<div class="row gallery-x">
	<ul>
	    <?php if(have_posts()): while(have_posts()): the_post();
	            the_content();
	            endwhile; 
	            endif; 
	    ?>
	    <?php
	    $picture_ids = json_decode(get_post_meta($post->ID, 'media-id', true));
	    foreach($picture_ids as $id) {
	    	echo '<li>' . wp_get_attachment_image($id, 'large', false) . '</li>';
	    }
	    ?>
	</ul>
</div>

<?php
get_footer();
