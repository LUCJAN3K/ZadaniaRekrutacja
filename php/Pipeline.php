<?php
class Pipeline{
	public static function make(...$fns){
		return function($arg) use ($fns){
			foreach($fns as $fn){
				$arg = $fn($arg);
			}
			return $arg;
		};
	}
}

?>