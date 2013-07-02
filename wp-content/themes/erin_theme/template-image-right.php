<?php get_header(); 
/*
	Template Name: Page - Image Right
*/
?>

<div class="row">
	<div class="columns large-6">
		<?php 
			if(have_posts()) : while(have_posts()) : the_post();
				the_content();
			endwhile; endif;
		?>
	</div>
	<div class="columns large-6">
		<?php if(has_post_thumbnail($post->ID)) {
			echo get_the_post_thumbnail($post->ID, 'large', array('class' => 'page-image'));
		}	
		?>
	</div>
</div>

<?php get_footer(); ?>