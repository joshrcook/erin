<?php
/*
 *  Template Name: Resume
 */

get_header();
?>
<div class="row resume">
    <div class="columns column-list">
        <?php
        if(have_posts()) : while(have_posts()) : the_post();
            the_content();
        endwhile; 
        endif;
        ?>
    </div>
</div>
<?php
get_footer();