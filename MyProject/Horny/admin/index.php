<?php 

	include("core/config.php");
	$db = new Database();

	$db->connect();

	include("core/model.php");
	$cf = new Config();

	include("catalog/product/template/edit_ajax.php");
	
	function detectURL(){
		    $result = array();
		    $path = ltrim($_SERVER['REQUEST_URI'], '/');    
		    $elements = explode('/', $path);                
		    $firt = array_shift($elements);                    
		    $second = array_shift($elements);                    
		    
		    switch (array_shift($elements)) {
		        case 'products-list.html':
		            $result = array('controller'=>'product', 'action'=>'list');
		            break;
		        case 'product-add.html':
		            $result = array('controller'=>'product', 'action'=>'add');
		            break;
		        case 'product-edit.html':
		            $result = array('controller'=>'product', 'action'=>'edit');
		            break;
		        case 'product-delete.html':
		            $result = array('controller'=>'product', 'action'=>'delete');
		            break;
		        default:
		            $result = array('controller'=>'product', 'action'=>'error');
		            break;
		    }
		    return $result;
		}

	$rs = detectURL();



	$controller = $rs['controller'];


	if($controller == 'product'){
		require_once("catalog/product/controller/index.php");
	}
	else{
		require_once("catalog/product/controller/index.php");
	}
 ?>