<?php namespace Controller;
	/**
	 * @author Alfonso Ríos
	 */
use Model\Database;
use Model\Person;
	
	class PersonController{
		const TABLE = 'person';
		
		public function save($person){
			$db = new Database();
			$query = $db->prepare('INSERT INTO ' . self::TABLE . '(name, age, email) VALUES (:name, :age, :email)');
			$query->bindParam(':name', $person->name);
			$query->bindParam(':age', $person->age);
			$query->bindParam(':email', $person->email);
			$query->execute();
		}
		
		public function getLastRecord() {
			$db = new Database();
			$query = $db->prepare('SELECT * FROM ' . self::TABLE . ' ORDER BY IdPerson DESC LIMIT 1');
			$query->execute();
			
			$row = $query->fetch();
			
			if ($row) {
				$new = new Person($row['name'], $row['age'], $row['email']);
				$new->IdPerson = $row['IdPerson'];
				return $new;
			}else{
				return false;
			}
		}
		
		public function getAll() {
			$db = new Database();
			$query = $db->prepare('SELECT * FROM ' . self::TABLE);
			$query->execute();
			
			while($row = $query->fetch()){
				$new = new Person($row['name'], $row['age'], $row['email']);
				$new->IdPerson = $row['IdPerson'];
				$array[] = $new;
			}
			
			if (isset($array)) {
				return $array;
			}else{
				return false;
			}
			
		}
	
		public function delete($person) {
			$db = new Database();
			$consulta = $db->prepare('DELETE FROM ' . self::TABLE .' WHERE IdPerson = :id');
			$consulta->bindParam(':id', $person->IdPerson);
			$consulta->execute();
		}
	} 
?>