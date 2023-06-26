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
}