<?php namespace Controller;
	/**
	 * @author Alfonso Ríos
	 */
use Model\Database;

	class PersonController{
		const TABLE = 'person';
		
		public function save($person){
			$db = new Database();
			$query = $db->prepare('INSERT INTO ' . self::TABLE . '(name, age, email) VALUES (:name, :age, :email)');
			$query->bindParam(':name', $person->getName());
			$query->bindParam(':age', $person->getAge());
			$query->bindParam(':email', $person->getEmail());
			$query->execute();
		}
	} 
?>