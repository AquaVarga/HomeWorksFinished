<?php
namespace View;

use View\Forms\InputField as iField;
use View\Forms\SelectField as sField;
use View\Forms\TextField as tField;
use View\Forms\CheckField as cField;


class Newformview 
{
	public static function NewForm()
	{
		$form = new Forms\InputForm("post");
		$form->add( new iField("Kis állat neve", "name", "text"));
		$form->add( new sField("Faj", "species", ["Macska", "Őz", "Teknős"]));
		$form->add( new iField("Kor", "age", "number"));
		$form->add( new iField("Súly", "weight", "number"));
		$form->add( new iField("Szín", "color", "text"));
		$form->add( new sField("Neme", "sex", ["Hím", "Nőstény"]));
		$form->add( new iField("Ár", "price", "number"));
		$form->add( new sField("Elérhető", "available", ["Elérhető", "Nem elérhető"]));
		$form->setValues($_POST);
		$form->setButton("Bevitel", "insertSucces");
		echo $form->asHtml();
	}
	
	
}
