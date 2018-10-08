<?php
define('DS', DIRECTORY_SEPARATOR);
require_once dirname( dirname( __FILE__ ) ) . DS . 'includes'. DS .'functions.php';
require_once dirname(dirname(__FILE__)) . DS . 'vendor' . DS . 'autoload.php';

if(function_exists("tests_add_filter")){
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
	echo "tests_add_filter exist ";
	tests_add_filter( 'muplugins_loaded', '_manually_load_environment' );

	require dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';
}else{
	echo "tests_add_filter doesn't exist ";
}


