<?php

$id = $_GET['id'];

switch ($id) {
	case 'exec':
		$url = 'cexec/source/exec' ;
		break;

	case 'phpi':
		$url = 'phpi/source/phpi' ;
		break;

	case 'rlfi':
		$url = 'rlfi/source/rlfi' ;
		break;
	
	case 'sqli':
		$url = 'sqli/source/sqli' ;
		break;
	
	case 'upload':
		$url = 'upload/source/upload' ;
		break;
		
	
	default:
		$url = 'cexec/source/exec' ;
		break;
}

$source = $url . '.php';

//echo $source;
show_source($url.'.php')



?>