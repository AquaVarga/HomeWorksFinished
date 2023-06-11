<?php

class View
{
	public static function ShowProperties($items)
	{
		echo '<section class="p-4 bg-white shadow mb-4">';
		echo '<table class="table table-striped table-hover">';
		echo '<thead><tr>';
		echo '<th>Ár</th><th>Állapot</th><th>Elhelyezkedés</th><th>Méret</th><th>Felszereltség</th>';
		echo '</tr></thead><tbody>';
		
		foreach ($items as $obj)
		{
			$price = "-";
			if(isset($obj['price']))
			{
				$price = $obj['price'];
			}
			$condition = "-";
			if(isset($obj['condition']))
			{
				$condition = $obj['condition'];
			}
			$location = "-";
			if(isset($obj['location']))
			{
				$location = $obj['location'];
			}
			$size = "-";
			if(isset($obj['size']))
			{
				$size = $obj['size'];
			}
			$equipment = "-";
			if(isset($obj['equipment']))
			{
				$equipment = $obj['equipment'];
			}
			$id = $obj['_id']->serialize();
			
			echo '<tr>';
			echo '<td>'. $price .'</td>';
			echo '<td>'. $condition .'</td>';
			echo '<td>'. $location .'</td>';
			echo '<td>'. $size .'</td>';
			echo '<td>'. $equipment .'</td>';
			echo '</tr>';
		}
		
		echo '</tbody></table>';
		echo '</section>';
	}
	
	public static function CreateInput($text, $name)
	{
		$html = '<div class="mb-3">';
		$html .= '<label for="'. $name .'" class="form-label">'. $text .'</label>';
		$html .= '<input type="text" name="'. $name .'" id="'. $name .'" class="form-control">';
		$html .= '</div>';
		
		return $html;
	}
	
	
	public static function CreationForm()
	{
		echo '<section class="p-4 bg-white shadow mb-4">';
		echo '<h3 class="mb-4">Új ingatlan hozzáadása</h3>';
		echo '<form method="post" action="index.php">';
		
		echo self::CreateInput("Ár", "price");
		echo self::CreateInput("Állapot", "condition");
		echo self::CreateInput("Elhelyezkedés", "location");
		echo self::CreateInput("Méret", "size");
		echo self::CreateInput("Felszereltség", "equipment");
		
		
		
		
		echo '<div id="formDynamic"></div>';
		echo '<button class="btn btn-primary" name="newSent"><i class="fa-solid fa-check"></i> Új ingatlan létrehozása</button>';
		
		echo '</form>';
		echo '</section>';

	}
	
	
	
}
