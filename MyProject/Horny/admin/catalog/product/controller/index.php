<?php 

	
	$action = $rs['action'];


	if($action == 'add'){
		include("catalog/product/block/block_add_edit.php");
	 	$blockAdd = new Block_A();
	 	$blockAdd->setConfig($cf);
	 	echo $blockAdd->renderAddLayout()->toHTML();
	 	$blockAdd->setDataEdit();
		}	

	else{
			include("catalog/product/block/block_list.php");
			$block = new Block_L();
			$block->setDB($db);
			echo $block->renderLayout()->toHtml();
		}	
	
 ?>