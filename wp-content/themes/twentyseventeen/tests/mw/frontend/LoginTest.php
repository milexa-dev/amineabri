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
		$this->setBrowserUrl("https://www.muralswallpaper.com");
	}

	/**
	 * @return array
	 */
	public function validInputsProviderDimensions() {
		$inputs[] = [
			[
				'product-dimension-w-cm'    => 100,
				'product-dimension-h-cm'    => 200,
				'contact'                   => [
					'billing_first_name'        => "Example",
					'billing_last_name'         => "User",
					'billing_email'             => "amineabri@milexa.com",
					'billing_company'           => "Milexa",
					'billing_phone'             => "07501263336"
				]
			]
		];
		return $inputs;
	}

	/**
	 * @dataProvider validInputsProviderDimensions
	 */
	public function testHasLoginForm(array $inputs){
		$this->url("shop-murals/green-and-pink-oriental-sky-wallpaper/");
		$this->timeouts()->implicitWait(5000);
		// Click Get Quote/Buy
		$this->byId('getquotebutton')->click();
		$this->timeouts()->implicitWait(60000);

		// Fill the data into GetQuote form
		$this->fill_get_quote_form($inputs);
		$this->timeouts()->implicitWait(60000);

		// click on pay now button
		$this->byCssSelector(".button.button--order.button--auto-w")->click();
		$this->timeouts()->implicitWait(5000);

		// Get the total amount from the page
		$total = $this->byId("line-total");
		$total = $total->byClassName("val");
		$total = $total->byClassName("data");
		$this->assertEquals("0.00", $total->text());
	}


	public function fill_get_quote_form(array $inputs) {
		$dimension = $this->byId('dimension-form-metric');
		$contact   = $this->byId('muralswallpaper_order_form');
		foreach ($inputs as $input => $value) {
			if($input === "contact"){
				foreach($value as $k => $v){
					$contact->byId($k)->value($v);
				}
			}else{
				$dimension->byId($input)->value($value);
			}
		}
		$this->timeouts()->implicitWait(60000);
		$contact->submit();
	}
}