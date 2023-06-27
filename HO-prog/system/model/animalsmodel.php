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
		$sql = "INSERT INTO animal  VALUES (NULL, :name, :species, :age, :weight, :color, :sex, :price, :date)";
		
		$params =
				[
					'name' => \Req::Post("name"),
					'species' => \Req::Post("species"),	
					'age' => \Req::Post("age"),
					'weight' => \Req::Post("weight"),
					'color' => \Req::Post("color"),
					'sex' => \Req::Post("sex"),
					'price' => \Req::Post("price"),
					'date' => \Req::Post("date"),
				];
		
		$query = Database::Exec($sql, $params);
		
		return $query;		
	}
	public static function UpdateAnimal($id)
	{
		$sql = "UPDATE animal SET name = :name, species = :species, age = :age, weight = :weight, color =  :color, sex = :sex, price = :price, date = :date WHERE id = :id";
		$params =
				[
					'name' => \Req::Post("name"),
					'species' => \Req::Post("species"),	
					'age' => \Req::Post("age"),
					'weight' => \Req::Post("weight"),
					'color' => \Req::Post("color"),
					'sex' => \Req::Post("sex"),
					'price' => \Req::Post("price"),
					'date' => \Req::Post("date"),
					"id" => $id,
				];
		$query = Database::Exec($sql, $params);
		
		return $query;
	}
	public static function DeleteAnimal($id) 
	{
		$sql = "DELETE FROM animal WHERE id = :id";
		$params = 
				[
					'id' => $id
				];
		$query = Database::Exec($sql, $params);
		return $query;
	}

	public static function GetAnimalsByPref()
	{
		$sql = "SELECT * FROM animal";
		$params = [];
		if(\Req::Post("name") != NULL)
		{
		$sql .= " WHERE name LIKE :name";
		$params = ['name' => \Req::Post("name")];
		}
		
		if(\Req::Post("name") != NULL AND \Req::Post("species") != NULL)
		{
		$sql .= " AND species LIKE :species";
		$params['species'] = \Req::Post("species");
		}
		if(\Req::Post("name") == NULL AND \Req::Post("species") != NULL)
		{
		$sql .= " WHERE species LIKE :species";
		$params = ['species' => \Req::Post("species")];
		}
		
		if((\Req::Post("name") != NULL OR \Req::Post("species") != NULL) AND \Req::Post("minprice") != NULL )
		{
		$sql .= " AND price > :minprice";
		$params['minprice'] = \Req::Post("minprice");
		}
		if(\Req::Post("name") == NULL AND \Req::Post("species") == NULL AND \Req::Post("minprice") != NULL)
		{
		$sql .= " WHERE price > :minprice";
		$params = ['minprice' => \Req::Post("minprice")];
		}
		
		if((\Req::Post("name") != NULL OR \Req::Post("species") != NULL OR \Req::Post("minprice") != NULL) AND \Req::Post("maxprice") != NULL)
		{
		$sql .= " AND price < :maxprice";
		$params['maxprice'] = \Req::Post("maxprice");
		}
		if(\Req::Post("name") == NULL AND \Req::Post("species") == NULL AND \Req::Post("minprice") == NULL AND \Req::Post("maxprice") != NULL)
		{
		$sql .= " WHERE price < :maxprice";
		$params = ['maxprice' => \Req::Post("maxprice")];
		}
		$sql .= " ORDER BY name ASC";
		if(!$params)
		{
			$query = Database::Exec($sql);
		}
		else
		{
			$query = Database::Exec($sql, $params);
		}

		$animals = $query->fetchALL(\PDO::FETCH_CLASS);
		return $animals;
		
	}
	public static function getAnimalById($id) 
	{
		$sql = "SELECT * FROM animal WHERE id = :id";
		$params = ['id' => $id];
		
		$query = Database::Exec($sql, $params);
		$animal = $query->fetch(\PDO::FETCH_ASSOC);
		return $animal;
	}
	public static function getId() 
	{
		if(isset($_GET["id"]))
		{
			return $_GET["id"];
		}
	}
	
	
	
	
	
	
	
}
