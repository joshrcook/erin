<?php

function add_scripts_styles_admin()
{
    wp_register_style('jrc_gal_bootstrap', plugins_url() . '/jrc_custom_gallery/vendor/bootstrap/css/bootstrap.base.scoped.min.css');
    wp_enqueue_style('jrc_gal_bootstrap');
    wp_register_style('jrc_gal_jquery-ui-theme', plugins_url() . '/jrc_custom_gallery/vendor/jquery-ui-1.10.3.custom/css/media-items/jquery-ui-1.10.3.custom.min.css');
    wp_enqueue_style('jrc_gal_jquery_ui-theme');
    wp_register_script('jrc_gal_jquery_ui', plugins_url() . '/jrc_custom_gallery/vendor/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js', array('jquery'));
    wp_enqueue_script('jrc_gal_jquery_ui');
    wp_register_script('jrc_gal_sortable', plugins_url() . '/jrc_custom_gallery/js/sortable.js', array('jquery', 'jrc_gal_jquery_ui'));
    wp_enqueue_script('jrc_gal_sortable');

    // add admin css and get media scripts
    wp_register_style('jrc_gal_admin-css', plugins_url() . '/jrc_custom_gallery/css/admin.css');
    wp_enqueue_style('jrc_gal_admin-css');
    wp_register_script('jrc_gal_get-media', plugins_url() . '/jrc_custom_gallery/js/get-media.js', array('jquery'));
    wp_enqueue_script('jrc_gal_get-media');

    // enqueue the media upload script
    wp_enqueue_script('media-upload');

    // enqueue jquery
    wp_enqueue_script('jquery');

    // enqueue the thickbox script
    wp_enqueue_script('thickbox');

    // enqueue the thickbox styles
    wp_enqueue_style('thickbox');
}

add_action('admin_enqueue_scripts', 'add_scripts_styles_admin');

add_filter( 'manage_edit-jrc_gal_columns', 'set_custom_edit_jrc_gal_columns' );
add_action( 'manage_jrc_gal_posts_custom_column' , 'custom_jrc_gal_columns', 10, 2 );

function set_custom_edit_jrc_gal_columns($columns) {

    unset($columns['date']);

    $columns['jrc_gal_shortcode'] = __( 'Shortcode', 'jrc_gal' );
    $columns['date'] = 'Date';

    return $columns;
}

function custom_jrc_gal_columns( $column, $post_id ) {
    switch ( $column ) {

        case 'jrc_gal_shortcode' :
            echo '[jrc_gallery id="' . $post_id . '"]';
            break;
        default :
            echo $column;
    }
}

function jrc_gal_main_icon() {
    ?>
    <style>
    .icon32-posts-jrc_gal {
        background-image: url(<?php echo plugins_url() . '/jrc_custom_gallery/img/icon-large.png'; ?>) !important;
        background-position: 0 !important;
    }
    </style>
    <?php
}

add_action('admin_head', 'jrc_gal_main_icon');