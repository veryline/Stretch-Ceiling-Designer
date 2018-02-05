<?php
	header('Content-Type: application/x-javascript; charset=utf8');

	$GET_lang = isset($_GET['lang'])? $_GET['lang']: "en";
	$lang = file("$GET_lang.txt");
	print_r($lang);

	
?>

