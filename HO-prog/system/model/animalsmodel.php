<?php

namespace Model;

class Animalsmodel 
{
	public static function GetAnimals()
	{
		$query = Database::Exec("SELECT * FROM animal ORDER BY species ASC");
		$animals = $query->fetchALL(\PDO::FETCH_CLASS);
		
		return $animals;
	}
	public static function InsertAnimals()
	{
		$sql = "INSERT INTO animal  VALUES (NULL, :name, :species, :age, :weight, :color, :sex, :price, :available)";
		
		$params =
				[
					'name' => \Req::Post("name"),
					'species' => \Req::Post("species"),	
					'age' => \Req::Post("age"),
					'weight' => \Req::Post("weight"),
					'color' => \Req::Post("color"),
					'sex' => \Req::Post("sex"),
					'price' => \Req::Post("price"),
					'available' => \Req::Post("available"),
				];
		
		$query = Database::Exec($sql, $params);
		
		return $query;		
	}

	
	
	
	
}



/*public function getAllAnimals()
	{
		$sql = "SELECT * FROM animal ORDER BY name";
		$query = $this->pdo->query($sql);
		$animals = $query->fetchAll(PDO::FETCH_ASSOC);
		
		return $animals;
	}
	public function getAllAnimalsAsList()
	{
		$list = [];
		$animals = $this->getAllAnimals();
		
		foreach($animals as $anim)
		{
			$aid = $anim["id"];
			$aname = $anim["name"];
			$afaj = $anim["faj"];
			$aage = $anim["age"];
			$aweight = $anim["weight"];
			$acolor = $anim["color"];
			$asex = $anim["sex"];
			$aprice = $anim["price"];
			$aavailable = $anim["available"];
			
			$list[ $aid ] = $aname;
		}
		return $list;
	}
	public function getAnimalsById($id)
	{
		$sql = "SELECT * FROM animal WHERE id = :id";
		$query = $this->pdo->prepare($sql);
		$query->execute(["id" => $id]);
		
		$animal = $query->fetch(PDO::FETCH_ASSOC);
		return $animal;
	}*/