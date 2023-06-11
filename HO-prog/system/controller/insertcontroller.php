<?php
namespace Controller;


class InsertController 
{
	public static function Insert()
	{
		//PageController::New();
		
		self::InsertRequest();
	}
	private static function InsertRequest()
	{
		$sent = \Req::Post("insertSucces");
		
		if($sent)
		{
			\Model\Animalsmodel::InsertAnimals();
		}
	}
}
