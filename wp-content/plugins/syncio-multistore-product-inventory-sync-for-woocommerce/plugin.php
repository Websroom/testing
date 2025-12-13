<?php
/*
Plugin Name: Syncio — Multistore Product & Inventory Sync For WooCommerce
Requires Plugins: woocommerce
Description: Seamlessly sync inventory and products across multiple WooCommerce and Shopify stores. Efficiently manage WooCommerce multistor
Version: 1.0.20
Author: syncio.co
Author URI: https://syncio.co
License: GPLv2 or later
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


// check if its syncio ready - table list of req
// if its is ready -> connect to syncio

// Define constants.
define( 'SYNCIO_PLUGIN_VERSION', '1.0.20' );

if ( ! function_exists( 'get_bloginfo' ) ) {
    require_once( ABSPATH . 'wp-includes/general-template.php' );
}
$site_title = get_bloginfo('name');

if (strpos($site_title, 'local-wp') !== false) {
    $environment = 'local';
} elseif (strpos($site_title, 'syncio-staging') !== false) {
    $environment = 'staging';
} else {
    $environment = 'production';
}

// Define Syncio URLs based on the environment.
// if site url from wp admin->settings contains local-wp, set it to local
// if site url from wp admin->settings contains syncio-staging, set it to staging
// else set it to production
switch ($environment) {
    case 'local':
        define( 'SYNCIO_URL', 'https://api.syncio.test/' );
        define( 'SYNCIO_INSTALLER_URL', 'https://api.syncio.test/api/wpp-installer' );
        break;
    case 'staging':
        define( 'SYNCIO_URL', 'https://staging-app.syncio.io/' );
        define( 'SYNCIO_INSTALLER_URL', 'https://staging-app.syncio.io/registration/woocommerce/create-account' );
        break;
    case 'production':
    default:
        define( 'SYNCIO_URL', 'https://app-v2.syncio.io/' );
        define( 'SYNCIO_INSTALLER_URL', 'https://app-v2.syncio.io/registration/woocommerce/create-account' );
        break;
}


define( 'SYNCIO_PLUGIN_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'SYNCIO_RETAILER_REST_PATH', '/wp-json/syncio/retailer/v1/' );
define('SYNCIO_INTERCOM_APP_ID', 'z6dvdx17');

//register activation hook
register_activation_hook( __FILE__, function() {
    add_option('syncio_plugin_just_activated',true);
});


include 'Syncio.php';
