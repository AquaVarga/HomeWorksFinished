<?php

class Model
{
	public static function Init()
	{
		$uri = "mongodb+srv://AquaVarga:O17DbDz10@cluster0.hpytgeg.mongodb.net/test";
		$client = new MongoDB\Client($uri);
		self::$db = $client->real_estate;
	}
	
	public static function InsertProperty($property)
	{
		if($property)
		{
			$collection = self::$db->properties;
			return $collection->insertOne($property);
		}
		return null;
	}
	public static function SelectProperties()
	{
		$collection = self::$db->properties;
		
		$sort = ['price' => 1];
		$list = $collection->find([], ['sort' => $sort]);
		
		return $list->toArray();
	}
	private static $db;
}