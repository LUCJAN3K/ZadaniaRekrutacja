<?php
include ("TextInput.php");
include ("NumericInput.php");
$text = "Kot";
$textinput = new TextInput();
$numericinput = new NumericInput();
$textinput->add($text);
$textinput->add($text);
$numericinput->add(3);
$numericinput->add(5);
$numericinput->add($text);
$value = $textinput->getValue().$numericinput->getValue();
echo ($value);
?>