<?php 
	include("core/model.php");
	$cf = new Config();

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else {
		$action = '';
	}

	if($action == 'add'){
		include("catalog/product/template/add.php");
			if(isset($_POST['them'])){
				$tensp = $_POST['ten'];
				$loaisp = $_POST['loai'];
				$anhsp = $_FILES['hinhanh']['name'];
				$anhsp_tmp = $_FILES['hinhanh']['tmp_name'];
				move_uploaded_file($anhsp_tmp, 'catalog/product/uploads/'.$anhsp);
				$giasp = $_POST['gia'];

				$cf->add($tensp , $loaisp, $anhsp, $giasp); 
				header('location:index.php?controller=product&action=list');
			}
		}	

	else
		if($action == 'edit'){
			$tb = "qlsp";
			$id = $_GET['id'];
			$data = $db->getDataId($tb , $id);
			include("catalog/product/template/edit.php");
			if(isset($_POST['sua'])){
				$tensp = $_POST['ten'];
				$loaisp = $_POST['loai'];
				$anhsp = $_FILES['hinhanh']['name'];
				$anhsp_tmp = $_FILES['hinhanh']['tmp_name'];
				move_uploaded_file($anhsp_tmp, 'catalog/product/uploads/'.$anhsp);
				$giasp = $_POST['gia'];
				$cf->edit($tensp , $loaisp, $anhsp, $giasp, $id);
				header('location:index.php?controller=product&action=list');
			}
		}
		else{
			if($action == 'delete'){
				$id = $_GET['id'];
				$cf->delete($id);
				header('location:index.php?controller=product&action=list');

			}
			else{	
					
					$tb = "qlsp";
					$data = $db->getAllData($tb);
					include("catalog/product/template/list.php");
				}
			}
	
 ?>