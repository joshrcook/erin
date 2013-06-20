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
}

add_action('admin_enqueue_scripts', 'add_scripts_styles_admin');