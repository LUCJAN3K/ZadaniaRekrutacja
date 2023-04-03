<?php
class NumericInput extends TextInput{
	public function add($input){
		if(is_numeric($input)){
			$this->value.=$input;
		}
	}
}
?>