<?php
namespace View\Forms;

class CheckField extends InputField
{
	public function __construct($text, $name) 
	{
		parent::__construct($text, $name, "checkbox");
		$this->setValue(1);
	}
	
	public function asHtml() 
	{
		$html = '<div class="inputField check">'. $this->createField() . $this->createLabel() .'</div>';
		
		return $html;
	}
}
