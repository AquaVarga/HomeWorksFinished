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
		$required = array('name', 'species', 'age', 'weight', 'color', 'sex', 'price', 'date');
		
		$error = false;
		
		foreach ($required as $field)
		{
			if (empty($_POST[$field]))
			{
				$error = true;
			}
		}
		
		if ($error)
		{
			\View\FormView::ErrorMessage("Rekord mentése sikertelen!", "Minden adat megadása szükséges");
		}
		else
		{
			\Model\Animalsmodel::InsertAnimals();
			\View\FormView::SuccessMessage("Rekord elmentve!", "Az adatok rögzítése sikeresen megtörtént");
		}	
		}
	}
	private static function UpdateRequest($id)
	{
		$sent = \Req::Post("updateSucces");
		if($sent)
		{
		$required = array('name', 'species', 'age', 'weight', 'color', 'sex', 'price', 'date');
		
		$error = false;
		
		foreach ($required as $field)
		{
			if (empty($_POST[$field]))
			{
				$error = true;
			}
		}
		
		if ($error)
		{
			\View\FormView::ErrorMessage("Változtatások mentése sikertelen!", "Minden adat megadása szükséges");
		}
		else
		{
			\Model\Animalsmodel::UpdateAnimal($id);
			\View\FormView::SuccessMessage("Változások elmentve!", "Az adatok módosítása sikeresen megtörtént");
		}
		}
		
	}
}
