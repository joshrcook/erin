<?php

function add_scripts_styles_admin()
{
    wp_register_style('bootstrap', plugins_url() . '/jrc_custom_gallery/vendor/bootstrap/css/bootstrap.base.scoped.min.css');
    wp_enqueue_style('bootstrap');
    wp_register_style('admin-css', plugins_url() . '/jrc_custom_gallery/css/admin.css');
    wp_enqueue_style('admin-css');
    wp_register_script('get-media', plugins_url() . '/jrc_custom_gallery/js/get-media.js', array('jquery'));
    wp_enqueue_script('get-media');
}

add_action('admin_enqueue_scripts', 'add_scripts_styles_admin');