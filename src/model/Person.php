<?php namespace Model;
	/**
	* @author Alfonso Ríos
	*/
	class Person
	{
		private $IdPerson;
		private $name;
		private $age;
		private $email;

		function __construct($name, $age, $email)
		{
			$this->name = $name;
			$this->age = $age;
			$this->email = $email;
		}
		
		public function getIdPerson (){
			return $this->IdPerson;
		}
		
		public function getName (){
			return $this->name;
		}
		
		public function getAge (){
			return $this->age;
		}
		
		public function setIdPerson (){
			return $this->IdPerson;
		}
		
		public function getEmail (){
			return $this->email;
		}
		
		public function setName ($name) {
			$this->name = $name;
		}
		
		public function setAge ($age) {
			$this->age = $age;
		}
		
		public function setEmail ($email) {
			$this->email = $email;
		}
	}
?>