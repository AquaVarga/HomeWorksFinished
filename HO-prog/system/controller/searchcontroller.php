<?php

namespace Controller;

class SearchController 
{
	public static function Search()
	{
		self::SearchRequest();
		
	}
	private static function SearchRequest()
	{
		$sent = \Req::Post("search");
		
		if($sent)
		{
			\Model\Animalsmodel::GetAnimalsByPref();
		}
	}
}
