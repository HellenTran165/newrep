<?php 

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else {
		$action = '';
	}

	if($action == 'add'){
		include("catalog/product/block/block_add.php");
	 	$blockAdd = new Block_A();
	 	$blockAdd->setConfig($cf);
	 	echo $blockAdd->renderAddlayout()->toHTML();
	 	$blockAdd->setData();
		}	

	else
		if($action == 'edit'){
			include("catalog/product/block/block_edit.php");
			$blockEdit = new Block_E();
			$blockEdit->setDB($db);
			$blockEdit->setConfig($cf);
			echo $blockEdit->renderEditLayout()->toHTML();
			$blockEdit->setData();
		} 
		else{
			if($action == 'delete'){
				include("catalog/product/block/block_delete.php");
				$blockDelete = new Block_D();
				$blockDelete->setConfig($cf);
				$blockDelete->destroy();

			}
			else{	
					include("catalog/product/block/block_list.php");
					$block = new Block_L();
					$block->setDB($db);
					echo $block->renderLayout()->toHtml();
				}
			}
	
 ?>