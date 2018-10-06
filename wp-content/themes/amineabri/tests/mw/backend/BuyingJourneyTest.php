<?php
/*
 * to run this test run this command :
 * phpunit --filter testCreateOrder
 * */
require_once dirname( dirname( __FILE__ ) ) . '/../../functions.php';
class BuyingJourneyTest extends WP_UnitTestCase {

	public function testCreateOrder() {
		//$test = get_browser_language();
		$this->assertEquals("de", "de");
	}
}