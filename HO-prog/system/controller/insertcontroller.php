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
			\View\EditView::SuccessMessage("Rekord elmentve!", "Az adatok módosítása sikeresen megtörtént");
			
		}
	}
	private static function UpdateRequest($id)
	{
		$sent = \Req::Post("updateSucces");
		
		if($sent)
		{
			\Model\Animalsmodel::UpdateAnimal($id);
			\View\EditView::SuccessMessage("Változások elmentve!", "Az adatok módosítása sikeresen megtörtént");
			
		}
	}
}
