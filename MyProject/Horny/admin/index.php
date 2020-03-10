<?php 
	include("core/config.php");
	$db = new Database();
	include("core/setup.php");

	include("core/model.php");
	$cf = new Config();
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