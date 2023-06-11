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
		\Controller\PageController::New();
		break;
	case "search":
		\Controller\PageController::Search();
		break;
}
\Controller\InsertController::Insert();