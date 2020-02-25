<?php 
	$servername = 'localhost';
	$username = 'root';
	$pass = '';
	$dbname = 'qlsp_test';
	$conn = mysql_connect($servername, $username, $pass, $dbname) or die("could not connect!");
	mysql_select_db($dbname, $conn);

 ?>