<?php namespace Model;
	/**
	* @author Alfonso R�os
	*/
	class Person
	{
		public $IdPerson;
		public $name;
		public $age;
		public $email;

		function __construct($name = null, $age = null, $email = null)
		{
			$this->name = $name;
			$this->age = $age;
			$this->email = $email;
		}
	}
?>