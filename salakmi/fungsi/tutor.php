<?php

function tampilkan(){
	global $link;

	$query 		= "SELECT * from tutorial";
	$result 	= mysqli_query($link, $query) or die('gagal menampilkan data');

	return $result;
}


function tampilkan_tutor($kode){
	global $link;

	$query 		= "SELECT * from tutorial WHERE kode='$kode'";
	$result 	= mysqli_query($link, $query) or die('gagal menampilkan data');

	return $result;
}

function excerpt($string){
	$string = substr($string, 0, 1000);
	return $string . "...";
}

?>