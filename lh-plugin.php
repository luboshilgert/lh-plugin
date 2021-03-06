<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.hilgert.cz/
 * @since             1.0.0
 * @package           LH Plugin template
 *
 * @wordpress-plugin
 * Plugin Name:       LH Plugin template
 * Plugin URI:        https://www.hilgert.cz/
 * Description:       LH Plugin template
 * Version:           1.0.0
 * Author:            Lubos Hilgert
 * Author URI:        https://www.hilgert.cz/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lh-plugin
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

if (file_exists(dirname(__FILE__) . "/vendor/autoload.php")) {
    require_once dirname(__FILE__) . "/vendor/autoload.php";
}

function activate_lh_plugin(){
    \LHPlugin\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_lh_plugin');

function deactivate_lh_plugin(){
    \LHPlugin\Base\Deactivate::dectivate();
}
register_deactivation_hook(__FILE__, 'deactivate_lh_plugin');

if(class_exists('LHPlugin\\Init')){
    \LHPlugin\Init::register_services();
}