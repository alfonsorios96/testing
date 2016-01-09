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
    }

    public function _after(UnitTester $I)
    {
    	
    }

    // tests
    public function saveAnInexistencePerson(UnitTester $I)
    {    	    	
		
    }
}
