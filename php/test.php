<?php
include ("Pipeline.php");
$test = Pipeline::make(function($var) { return $var * 3; }, function($var) { return $var + 1; },
function($var) { return $var / 2; });
echo "Zadanie 1: </br>".$test(3);
?>