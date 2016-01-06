<?php namespace Model;

use PDO as PDO;

class Database extends PDO
{
	protected  $tipo_de_base = 'mysql';
	protected $host = 'localhost';
	protected $nombre_de_base = 'testing';
	protected $usuario = 'root';
	protected $contrasena = 'n0m3l0';
	
	function __construct()
	{
		try{
			parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base.';charset=utf8', $this->usuario, $this->contrasena);
		}catch(PDOException $e){
			echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
			exit;
		}
	}
}

?>