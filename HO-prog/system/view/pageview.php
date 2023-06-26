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
				 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
				<link rel="stylesheet" href="src/style.css">
				<link rel="stylesheet" href="fontawesome/css/all.min.css">
				<script src="src/script.js"></script>
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