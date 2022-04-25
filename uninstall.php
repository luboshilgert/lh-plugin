<?php


// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
$database = new \LHPlugin\Base\Database();
$database->deleteTables();
