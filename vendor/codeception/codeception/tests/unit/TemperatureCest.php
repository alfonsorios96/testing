<?php

class TemperatureCest
{
	
	protected $m;
	
	public function _inject(\Mockery $m){
		$this->m = $m;
	}
	
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    	$this->m->close();
    }

    // tests
    public function tryToTest(UnitTester $I)
    {
    	$service = $this->m->mock('service');
    	$service
    		->shouldReceive('readTemp')
    		->times(3)
    		->andReturn(10, 12, 14);
    	
    	$temperature = new Model\Temperature($service);
    	
    	$I->assertEquals(12, $temperature->average());
    }
}
