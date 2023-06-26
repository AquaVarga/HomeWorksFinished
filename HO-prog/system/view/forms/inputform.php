<?php
namespace View\Forms;

class InputForm
{
	private $method;
	private $action;
	private $fields;
	private $btnText;
	private $btnName;
	
	public function __construct($method, $action = "") 
	{
		$this->method = $method;
		$this->action = $action;
		
		$this->fields = [];
		$this->btnText = "Elküld";
		$this->btnName = "send";
	}

	public function add($inputField)
	{
		$this->fields[] = $inputField;
	}
	public function setValues($source)
	{
		foreach($this->fields as $field)
		{
			$name = $field->getName();
			
			if(isset($source[$name]))
			{
				$value = $source[$name];
				$field->setValue($value);
			}
		}
	}
	public function setButton($text, $name)
	{
		$this->btnName = $name;
		$this->btnText = $text;
	}
	
	public function onSubmit($method)
	{
		$source = $_POST;
		if($this->method == "get")
		{
			$source = $_GET;
		}
		
		if(isset($source[ $this->btnName ]))
		{
			$method($source);
		}
	}
	
	public function asHtml()
	{
		$html = '<form method="'. $this->method .'" action="'. $this->action .'">';
		
		foreach($this->fields as $field)
		{
			$html .= $field->asHtml();
		}
		$html .= ('<button name="'. $this->btnName .'" value = "1" class="button">'. $this->btnText .'</button></form>');
		
		return $html;
	}
}

