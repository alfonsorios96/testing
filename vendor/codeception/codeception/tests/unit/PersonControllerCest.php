<?php

class PersonControllerCest
{	
	protected $user;
	
	protected function _inject(Model\Person $user)
	{
		$this->user = $user;
	}
	
    public function _before(UnitTester $I)
    {
    	$faker = Faker\Factory::create();
    	
    	$this->user = new Model\Person(
    			$faker->name, 
    			$faker->date($format = 'Y-m-d', $max = 'now'),
    			$faker->email);
    	
    	$controller = new Controller\PersonController();
    	 
    	$controller->save($this->user);
    }

    public function _after(UnitTester $I)
    {
    	$controller = new Controller\PersonController();
    	$result = $controller->getLastRecord();
    	$controller->delete($result);
    }

    // tests
    public function saveAnInexistencePerson(UnitTester $I)
    {    	    	
    	$controller = new Controller\PersonController();
    	$result = $controller->getLastRecord();

    	$I->assertEquals($this->user->name, $result->name);
    	$I->assertEquals($this->user->age, $result->age);
    	$I->assertEquals($this->user->email, $result->email);
    }
}
