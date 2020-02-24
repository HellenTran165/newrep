<?php 
	$servername = 'localhost';
	$username = 'root';
	$pass = '';
	$dbname = 'qlsp_test';
	$conn = mysql_connect($servername, $username, $pass, $dbname);

	mysql_select_db($dbname, $conn);
 ?>