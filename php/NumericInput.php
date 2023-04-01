<?php
class NumericInput extends TextInput{
	public $value;
	public function add($input){
		if(!is_string($input)){
			$this->value+=$input;
		}
	}
}
?>