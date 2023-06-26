<?php

class Req
{
	public static function Get($name, $default = null) 
	{
		if(isset($_GET[$name]))
		{
			$value = $_GET[$name];
			$value = htmlspecialchars($value);
		}
		else
		{
			$value = $default;
		}
		return $value;
	}
	public static function Post($name) 
	{
		if(isset($_POST[$name]))
		{
			$value = $_POST[$name];
			$value = htmlspecialchars($value);
			return $value;
		}
		return null;	
	}
	public static function GetPage() 
	{
		return self::Get("page", "list");
	}
}