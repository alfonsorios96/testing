<?php

use Model\Person;
use Controller\PersonController;

class PersonControllerTest extends \Codeception\TestCase\Test
{
    /**
     * @var \CodeGuy
     */
    protected $guy;

    protected function _before()
    {
    	
    }

    protected function _after()
    {
    	
    }

    // tests
    public function testMe()
    {
    	$person = new Person("Alfonso Ríos", 19, "alfonso.rios@netlogistik.com");
    	$controllerPerson = new PersonController();
		$controllerPerson->save($person);
		$this->tester->seeInDatabase('person', array('id' => 1, 'name' => 'Alfonso Ríos', 'age' => 19, 'email' => 'alfonso.rios@netlogistik.com'));
    }
}