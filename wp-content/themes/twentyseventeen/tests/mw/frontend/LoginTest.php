<?php
/*
 * to run this test run this command :
 * phpunit --filter testHasLoginForm
 * */
class LoginTest extends PHPUnit_Extensions_Selenium2TestCase {

	public static $browsers = [
		[
			'browserName' => 'chrome',
			'browser'     => '*chrome',
			'host'        => 'localhost',
			'port'        => 4444,
			'timeout'     => 2000,
		],
	];

	public function setUp(){
		$this->setBrowserUrl("https://www.muralswallpaper.co.uk/wp");
	}

	public function testHasLoginForm(){
		$this->url("wp-login.php");
		$username = $this->byName("logs");
		$password = $this->byName("pwd");
		$this->assertEquals("", $username->value());
		$this->assertEquals("", $password->value());
	}
}