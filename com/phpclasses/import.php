<?php
Class Import{
	public static $errors = array();
	public static function inc($l){
		$l=str_replace('.','/',$l).'.php'; $c=explode('/',$l);
		include($l);
		$o = rtrim($c[count($c)-1],".php");
		$GLOBALS[$o]=new $o();
	}
	public static function handler($errno,$errstr,$errfile,$errline){
		if(!isset(Import::$errors[$errfile])){
			Import::$errors[$errfile] = $errline;
			Import::getLineFile($errfile,$errline);
		}
	}
	public static function getLineFile($file,$line){
		$l = file($file);
		if(isset($l[$line-1])){
			Import::inc(rtrim($l[$line-1],";\n\r"));
		}
	}
}
set_error_handler(array('import','handler'),E_NOTICE);
?>