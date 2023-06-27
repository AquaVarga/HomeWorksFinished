<?php
require_once 'system/autoloader.php';
Model\Database::Connect("homework", "root", "mysql");

$page = Req::GetPage();

switch($page)
{
	case "list":
		\Controller\PageController::List();
		break;
	case "new":
		if(\Controller\InsertController::Insert())
		{
			\Controller\PageController::New();
		}
		else
		{
			\Controller\PageController::New();
		}
		
		break;
	case "search":
		\Controller\PageController::Search();
		break;
	case "edit":
		if(\Controller\InsertController::Update())
		{
			\Controller\PageController::Edit();
		}
		else
		{
			\Controller\PageController::Edit();
		}
		break;
	case "del":
		$id = \Model\Animalsmodel::getId();
		\Model\Animalsmodel::DeleteAnimal($id);
		\Controller\PageController::List();
		
}


