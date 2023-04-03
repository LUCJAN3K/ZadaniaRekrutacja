<?php
class TextInput{
	public $value;
	public function add($input){
		$this->value.=$input." ";
	}
	public function getValue(){
		return $this->value;
	}
}
?>