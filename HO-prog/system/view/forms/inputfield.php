<?php
namespace View\Forms;

class InputField
{
	protected $text;
	protected $name;
	protected $type;
	protected $value;
	
	public function __construct($text, $name, $type) 
	{
		$this->text = $text;
		$this->name = $name;
		$this->type = $type;
		
		$this->value = "";
	}
	
	public function getName() 
	{
		return $this->name;
	}
	public function setValue($value) 
	{
		$this->value = $value;
		return $this;
	}

	public function asHtml() 
	{
		$html = '<div class="inputField">'. $this->createLabel() . $this->createField() .'</div>';
		
		return $html;
	}
	
	protected function createLabel()
	{
		return '<label for="'. $this->name .'">'. $this->text .'</label><br>';
	}
	protected function createField()
	{
		return '<input type="'. $this->type .'" name="'. $this->name .'" id="'. $this->name .'" value="'. $this->value .'">';
	}
}
