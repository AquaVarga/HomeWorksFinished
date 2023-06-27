<?php
namespace View;

use View\Forms\InputField as iField;
use View\Forms\SelectField as sField;
use View\Forms\TextField as tField;
use View\Forms\CheckField as cField;


class FormView
{
	public static function NewForm()
	{
		$form = new Forms\InputForm("post");
		$form->add( new iField("Kis állat neve", "name", "text"));
		$form->add( new iField("Faj", "species", "text"));
		$form->add( new iField("Kor", "age", "number"));
		$form->add( new iField("Súly", "weight", "number"));
		$form->add( new iField("Szín", "color", "text"));
		$form->add( new sField("Neme", "sex", ["Hím", "Nőstény"]));
		$form->add( new iField("Ár", "price", "number"));
		$form->add( new iField("Örökbe fogadás ideje", "date", "date"));
		$form->setButton("Bevitel", "insertSucces", "InsertSucces");
		$form->setValues($_POST);
		echo $form->asHtml();
	}
	public static function SearchForm()
	{
		$form = new Forms\InputForm("post");
		$form->add( new iField("Név alapján", "name", "text"));
		$form->add( new iField("Faj alapján", "species", "text"));
		$form->add( new iField("Minimum ár", "minprice", "number"));
		$form->add( new iField("Maximum ár", "maxprice", "number"));
		$form->setValues($_POST);
		$form->setButton("Keresés", "search", "search");
		echo $form->asHtml();
	}
	public static function EditForm($id)
	{
		$animal = \Model\Animalsmodel::getAnimalById($id);
		
		$form = new Forms\InputForm("post");
		$form->setButton("Változtatások mentése", "updateSucces", "updateSucces");
		$form->add( new iField("Kis állat neve", "name", "text"));
		$form->add( new iField("Faj", "species", "text"));
		$form->add( new iField("Kor", "age", "number"));
		$form->add( new iField("Súly", "weight", "number"));
		$form->add( new iField("Szín", "color", "text"));
		$form->add( new sField("Neme", "sex", ["Hím", "Nőstény"]));
		$form->add( new iField("Ár", "price", "number"));
		$form->add( new iField("Örökbe fogadás ideje", "date", "date"));
		$form->setValues($animal);
		echo $form->asHtml();
	}
	public static function SuccessMessage($title, $text) 
	{
		echo '<div id="alert" class="alert alert-success">
            	<i class="fa-solid fa-triangle-exclamation"></i>
            	<strong>'. $title .'</strong> '. $text .'
            </div>';
		
		//ez még kisérletezés alatt áll
		echo `<script type="text/javascript">
        setTimeout(function () {
            $('#alert').alert('close');
        }, 2000);</script>`;
	}
	public static function ErrorMessage($title, $text) 
	{
		echo '<p class="alert alert-danger">
            	<i class="fa-solid fa-triangle-exclamation"></i>
            	<strong>'. $title .'</strong> '. $text .'
            </p>';
	}
	
	
}
