<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");

require_once 'vendor/autoload.php';
require_once 'system/Req.php';
require_once 'system/Model.php';
require_once 'system/View.php';
require_once 'system/views/begin.php';

Model::Init();

if(Req::NewPorpertySubmitted())
{
	$property = Req::GetPropertyPostData();
	Model::InsertProperty($property);
	
}
View::CreationForm();

$properties = Model::SelectProperties();
View::ShowProperties($properties);

require_once 'system/views/end.php';