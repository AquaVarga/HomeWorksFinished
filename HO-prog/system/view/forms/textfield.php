<?php
namespace View\Forms;

class TextField extends InputField
{
	public function __construct($text, $name) 
	{
		parent::__construct($text, $name, null);
	}
	
	protected function createField() 
	{
		return '<textarea name="'. $this->name .'" id="'. $this->name .'">'. $this->value .'</textarea>';
	}
}

