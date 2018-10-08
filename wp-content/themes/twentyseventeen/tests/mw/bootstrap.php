<?php
ini_set('display_errors', true);
error_reporting(-1);

define('DS', DIRECTORY_SEPARATOR);
define('DB', true);
require_once dirname( dirname( __FILE__ ) ) . DS . 'includes'. DS .'functions.php';
require_once dirname(dirname(__FILE__)) . DS . 'vendor' . DS . 'autoload.php';
function _manually_load_environment() {

	// Add your theme …
	switch_theme('twentyseventeen');
	// Update array with plugins to include ...
	$plugins_to_active = [
		//"advanced-custom-fields-pro/acf.php",
		//"contact-form-7/wp-contact-form-7.php",
		//"elasticsearch-mw/elasticsearch-mw.php",
		//"woocommerce-xero/woocommerce-xero.php",
		//"woocommerce/woocommerce.php"
	];
	update_option( 'active_plugins', $plugins_to_active );
}
tests_add_filter( 'muplugins_loaded', '_manually_load_environment' );

require dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

echo "hello";