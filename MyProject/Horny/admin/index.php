<?php 
	
	include("core/config.php");
	$db = new Database();

	$db->connect();

	include("core/model.php");
	$cf = new Config();

	include("catalog/product/helper/def_URL.php");

	include("catalog/product/controller/update_save_delete_ajax.php");


	
	function detectURL(){
		    $result = array();
		    $path = ltrim($_SERVER['REQUEST_URI'], '/');    
		    $elements = explode('/', $path);                
		    $str_1 = array_shift($elements);                    
		    $str_2 = array_shift($elements);                    
		    // $str_3 = array_shift($elements);                    
		    // $str_4 = array_shift($elements);                    
		    // $str_5 = array_shift($elements);                    
		                      
		    
		    switch (array_shift($elements)) {
		        case 'products-list.html':
		            $result = array('controller'=>'product', 'action'=>'list');
		            break;
		        case 'product-add.html':
		            $result = array('controller'=>'product', 'action'=>'add');
		            break;
		        default:
		            $result = array('controller'=>'product', 'action'=>'list');
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