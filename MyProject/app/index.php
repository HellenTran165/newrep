<?php 
	include("core/config.php");

	$db = new Database();
	$db->connect();
	if(isset($_GET['controller'])){
		$controller = $_GET['controller'];
	}
	else {
		$controller = '';
	}

	if($controller == 'product'){
		require_once("catalog/product/controller/index.php");
	}
	else{
		require_once("catalog/product/controller/index.php");
	}
 ?>