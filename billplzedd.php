<?php

/**
 * Plugin Name: Billplz for Easy Digital Downloads
 * Plugin URI: http://github.com/billplz/Billplz-for-EDD
 * Description: Billplz Payment Gateway | Accept Payment using all participating FPX Banking Channels. <a href="https://www.billplz.com/join/8ant7x743awpuaqcxtqufg" target="_blank">Sign up Now</a>.
 * Author: Wan @ Billplz
 * Author URI: http://www.github.com/billplz
 * Version: 3.0.1
 * License: GPL-3.0-or-later
 * Requires PHP: 5.6
 */

//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

// Main Reference: https://pippinsplugins.com/create-custom-payment-gateway-for-easy-digital-downloads/

require 'includes/billplz.php';

if (!function_exists('gourl_edd_gateway_load') && !function_exists('gourl_edd_action_links')) { // Exit if duplicate
    require 'includes/load.php';
}
