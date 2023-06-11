<?php

class Req
{
	public static function NewPorpertySubmitted()
	{
		return isset($_POST["newSent"]);
	}
	public static function GetPropertyPostData() 
	{
		$data = [];
		
		foreach($_POST as $key => $value)
		{
			if(!empty($value))
			{
				$data[$key] = $value;
			}
		}
		return $data;
	}
}
