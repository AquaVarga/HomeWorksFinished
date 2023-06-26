<?php
namespace Controller;


class InsertController 
{
	public static function Insert()
	{
		self::InsertRequest();
	}
	public static function Update() 
	{
		$id = \Model\Animalsmodel::getId();
		self::UpdateRequest($id);
	}
	
	private static function InsertRequest()
	{
		$sent = \Req::Post("insertSucces");
		
		if($sent)
		{
			\Model\Animalsmodel::InsertAnimals();
		}
	}
	private static function UpdateRequest($id)
	{
		$sent = \Req::Post("updateSucces");
		
		if($sent)
		{
			\Model\Animalsmodel::UpdateAnimal($id);
		}
	}
}
