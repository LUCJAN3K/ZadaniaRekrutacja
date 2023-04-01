<?php
include ("Pipeline.php");
include ("TextInput.php");
$test = Pipeline::make(function($var) { return $var * 3; }, function($var) { return $var + 1; },
function($var) { return $var / 2; });
echo "Zadanie 1: <br/>".$test(3);
$text = "Kot Kot Kot";
$textinput = new TextInput();
$textinput->add($text);
echo ("<br/>".$textinput->getValue());
?>