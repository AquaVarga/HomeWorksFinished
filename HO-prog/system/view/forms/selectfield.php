<?php
namespace View\Forms;

class SelectField extends InputField
{
	private $options;
	
	public function __construct($text, $name, $options) 
	{
		parent::__construct($text, $name, null);
		
		$this->options = $options;
	}
	
	protected function createField() 
	{
		$html = '<select name="'. $this->name .'" id="'. $this->name .'">';
		foreach($this->options as $this->name)
		{
			$html .= ('<option value="'. $this->name .'"'); 
			$html .= ('>'. $this->name .'</option>');
		}
		$html .= '</select>';
		
		return $html;
	}
}

