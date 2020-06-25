<?php

function smsclone_configure_action_link($links) {
    $smsclone_links = "<a href=".admin_url('admin.php?page=smsclone_admin_setup').">".__('Settings','smsclone')."</a>";
    return array_merge($links,[$smsclone_links]);
}

function smsclone_enqueue_scripts() {
    if(!isset($_GET['page']) || ($_GET['page'] != 'smsclone' && $_GET['page'] != 'smsclone_admin_setup')) {
        return;
    }
    wp_register_style('smsclone_bootstrap',plugins_url('/assets/css/bootstrap.min.css',SMSCLONE_PLUGIN_FILE));
    wp_enqueue_style('smsclone_bootstrap');
    wp_register_script('smsclone_jquery',plugins_url('/assets/js/jquery.js',SMSCLONE_PLUGIN_FILE));
    wp_enqueue_script('smsclone_jquery');
    wp_register_script('smsclone_bootstrapbundlejs',plugins_url('/assets/js/bootstrap.bundle.min.js',SMSCLONE_PLUGIN_FILE));
    wp_enqueue_script('smsclone_bootstrapbundlejs');
    wp_register_script('smsclone_mainjs',plugins_url('/assets/js/main.js',SMSCLONE_PLUGIN_FILE));
    wp_enqueue_script('smsclone_mainjs');
}

function display_smsclone_page(){
    include(SMSCLONE_PLUGIN_DIR.'/partials/smsclone.php');
}

function display_smsclone_admin_setup(){
    include(SMSCLONE_PLUGIN_DIR.'/partials/admin-setup.php');
}

function smsclone_add_menu() {
    add_menu_page(
        'smsclone',
        'Smsclone',
        'edit_theme_options',
        'smsclone',
        'display_smsclone_page',
        'dashicons-admin-comments'
    );
    add_submenu_page(
        'smsclone',
        'Setup Admin SMS Notification',
        'Admin Setup',
        'edit_theme_options',
        'smsclone_admin_setup',
        'display_smsclone_admin_setup'
    );
    return;
}