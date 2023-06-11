<?php
namespace View;

class PageView
{
	public static function PageBegin()
	{
		$html = '<!DOCTYPE html>
				<html lang="en">
				<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0,">
				<title>Nyilvántartó Rendszer</title>
				<link rel="stylesheet" href="res/style.css">
				</head>
				<body>
				<header>
				<div class="inside">
				<div class="titlebar">Nyilvántartó rendszer</div>
				<div class="interaction"> 
				<nav>
				<ul>
				<li><a href="?page=new">Új adat bevitele</a></li>
				<li><a href="?page=list">Adatok listázása</a></li>
				<li><a href="?page=search">Keresés</a></li>
				</ul>
				</nav>
				</div>
				 </div>
				</header>
				<main>';
		
		echo $html;
	}
	public static function PageEnd() 
	{
		$html = '</main></body></html>';
		
		echo $html;
	}
}