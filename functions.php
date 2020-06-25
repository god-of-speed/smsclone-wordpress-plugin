<?php

include(plugin_dir_path(__FILE__)."inc/smsclone_activation.php");
include(plugin_dir_path(__FILE__)."inc/smsclone_deactivation.php");
include(plugin_dir_path(__FILE__)."inc/smsclone_general_setup.php");
include(plugin_dir_path(__FILE__)."inc/smsclone_processor.php");

//Events
register_activation_hook(__FILE__,'smsclone_activate');
register_deactivation_hook(__FILE__,'smsclone_deactivate');
add_filter('plugin_action_links_' . SMSCLONE_PLUGIN_BASENAME,'smsclone_configure_action_link');
add_action('admin_enqueue_scripts','smsclone_enqueue_scripts');
add_action('admin_menu','smsclone_add_menu');
add_action('admin_post_smsclone_processing_message_setup','smsclone_processing_message_setup');
add_action('admin_post_smsclone_failed_message_setup','smsclone_failed_message_setup');
add_action('admin_post_smsclone_completed_message_setup','smsclone_completed_message_setup');
add_action('admin_post_smsclone_refunded_message_setup','smsclone_refunded_message_setup');
add_action('admin_post_smsclone_cancelled_message_setup','smsclone_cancelled_message_setup');

add_action('admin_post_smsclone_admin_setup','smsclone_admin_setup');
add_action('admin_post_smsclone_admin_processing_setup','smsclone_admin_processing_setup');
add_action("woocommerce_order_status_failed", "smsclone_process_message_failed");
// Note that it's woocommerce_order_status_on-hold, not on_hold.
add_action( "woocommerce_order_status_processing", "smsclone_process_message_processing");
add_action( "woocommerce_order_status_completed", "smsclone_process_message_completed");
add_action( "woocommerce_order_status_refunded", "smsclone_process_message_refunded");
add_action( "woocommerce_order_status_cancelled", "smsclone_process_message_cancelled");