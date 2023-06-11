<?php

namespace Model;

class Database
{
	private static $pdo;
	
	public static function Connect($dbName, $dbUser, $dbPass) 
	{
		$dsn = 'mysql:host=localhost;dbname='. $dbName .';charset=utf8mb4';
		self::$pdo = new \PDO($dsn, $dbUser, $dbPass);
		
		self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
	}
	public static function Exec($sql, $params = [])
	{
		$query = self::$pdo->prepare($sql);
		$query->execute($params);
		
		return $query;
	}
	public static function GetError()
	{
		$error = self::$pdo->errorInfo();
		return $error[2];
	}
}
