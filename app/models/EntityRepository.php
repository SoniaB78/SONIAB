<?php

namespace App\Models;

class EntityRepository{
	private $db;
	
	public function getDb(){ // méthode pour la class PDO
		if(!$this->db){ // si db est vide on la créé
			try{
				$this->db = new \PDO('mysql:host=localhost;dbname=soniab;charset=utf8mb4', 'root', '', [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
			}catch(\PDOException $e){// on entre ici en cas de mauvaise connexion à la BDD
				die('Probleme de connexion à la BDD '. $e->getMessage());
			}
		}
		return $this->db;
    }
}

?>