<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'qlsp_test';
	$conn = mysql_connect($hostname, $username, $password, $dbname);
	mysql_select_db($dbname, $conn);
 ?>