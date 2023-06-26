<?php
namespace View;

use View\Forms\InputField as iField;
use View\Forms\SelectField as sField;
use View\Forms\TextField as tField;
use View\Forms\CheckField as cField;


class SearchView 
{
	public static function NewForm()
	{
		$form = new Forms\InputForm("post");
		$form->add( new iField("Név alapján", "name", "text"));
		$form->add( new sField("Faj alapján", "species", ["Macska", "Őz", "Teknős"]));
		$form->add( new iField("Minimum ár", "minprice", "number"));
		$form->add( new iField("Maximum ár", "maxprice", "number"));
		$form->setValues($_POST);
		$form->setButton("Keresés", "search", "search");
		echo $form->asHtml();
	}
	public static function ListSearchedData()
	{
		echo '<div style="overflow-x: auto;">
	       <table>
	           <thead>
	               <tr>
	                   <th>Neve</th>
	                   <th>Faja</th>
	                   <th>Kora</th>
	                   <th>Súlya</th>
	                   <th>Színe</th>
	                   <th>Neme</th>
	                   <th>Ára</th>
	                   <th>Születési dátum</th>
	                   <th> </th>
	               </tr>
	           </thead>
	           <tbody>';
				   $animals = \Model\Animalsmodel::GetAnimalsByPref();
				   foreach ($animals as $anim)
				   {
						echo '<tr>
					   <th>'. $anim->name .'</th>
	                   <td>'. $anim->species .'</td>
	                   <td>'. $anim->age .'</td>
	                   <td>'. $anim->weight .'</td>
	                   <td>'. $anim->color .'</td>
	                   <td>'. $anim->sex .'</td>
	                   <td class="price">'. number_format($anim->price, 0, "", " ") .' HUF</td>
	                   <td>'. $anim->date .'</td>
	                  <td><a href="?page=edit&id='. $anim->id .'">Módosítás</a></td>
					   </tr>';
				   }
             echo ' </tbody>
					</table>
					</div> ';
	
	}
}