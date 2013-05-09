<?php

class ChequeTest extends SapphireTest {
  
  function setUp() {
    parent::setUp();
  }
  
  public function testClassConfig() {
		$processor = PaymentFactory::factory('Cheque');
		$this->assertEquals(get_class($processor), 'ChequeProcessor');
		$this->assertEquals(get_class($processor->gateway), 'ChequeGateway');
		$this->assertEquals(get_class($processor->payment), 'Payment');
	}
}