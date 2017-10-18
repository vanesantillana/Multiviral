<?php
	 $dbhost = 'localhost';
	 $dbuser = 'nash';
	 $dbpass = '123456';
	 $dbname = 'prueba3';
	 //ini_set('display_errors', 1);
	 //error_reporting(E_ALL);
	 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	 header("Content-Type: text/html;charset=utf-8");
	$conn->set_charset("utf8");

?>
