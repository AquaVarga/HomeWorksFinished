<?php
namespace View;

use View\Forms\InputField as iField;
use View\Forms\SelectField as sField;
use View\Forms\TextField as tField;
use View\Forms\CheckField as cField;

class EditView 
{
	public static function NewForm($id)
	{
		$animal = \Model\Animalsmodel::getAnimalById($id);
		
		$form = new Forms\InputForm("post");
		$form->setButton("Változtatások mentése", "updateSucces", "updateSucces");
		$form->add( new iField("Kis állat neve", "name", "text"));
		$form->add( new sField("Faj", "species", ["Macska", "Őz", "Teknős"]));
		$form->add( new iField("Kor", "age", "number"));
		$form->add( new iField("Súly", "weight", "number"));
		$form->add( new iField("Szín", "color", "text"));
		$form->add( new sField("Neme", "sex", ["Hím", "Nőstény"]));
		$form->add( new iField("Ár", "price", "number"));
		$form->add( new iField("Születési dátum", "date", "date"));
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
}
