<?php 
get_header();
/*
	Template Name: Image Gallery
*/

wp_enqueue_script('button-scrolling');
?>

<div class="row button-container">
	<div class="gallery-x">
		<ul>
		    <?php if(have_posts()): while(have_posts()): the_post();
		            the_content();
		            endwhile; 
		            endif; 
		    ?>
		    <?php
		    $picture_ids = json_decode(get_post_meta($post->ID, 'media-id', true));
		    if($picture_ids) {
			    foreach($picture_ids as $id) {
			    	echo '<li>' . wp_get_attachment_image($id, 'slider-image', false) . '</li>';
			    }
			} // endif
		    ?>
		</ul>
	</div>
	<div class="buttons">
		<div class="button button-left">
			<i class="icon-angle-left"></i>
		</div>
		<div class="button button-right">
			<i class="icon-angle-right"></i>
		</div>
	</div>
</div>

<?php
get_footer();
