<?php

/**
 * Plugin Name: Smsclone
 * Description: An sms plugin for woocommerce websites that requires sending of sms to customers.
 * Version: 1.0.0
 * Author: Ubah Ebuka Samuel
 */
if(!function_exists('add_action')) {
    exit;
}

if (!defined('ABSPATH'))
{
    exit;
}

if ( ! defined( 'WPINC' ) ) {
	exit;
}
require_once(ABSPATH . 'wp-admin/includes/plugin.php');
define('SMSCLONE_PLUGIN_BASENAME',plugin_basename(__FILE__));
define('SMSCLONE_PLUGIN_FILE',__FILE__);
define('SMSCLONE_PLUGIN_DIR',plugin_dir_path(__FILE__));

if(is_plugin_active('woocommerce/woocommerce.php')) {
    require_once(plugin_dir_path(__FILE__)."functions.php");
}else{
    /**
     * WooCommerce is not installed
     */
    deactivate_plugins(plugin_basename(__FILE__));
}

