<?php 
	
	class Block_E {

		protected $db;
		protected $cf;

		public function setDB($db){
			$this->db = $db;
		}

		public function setConfig($cf){
			$this->cf = $cf;
		}

		public function getData(){
			$tb = "qlsp";
			$id = $_GET['id'];
			$data = $this->db->getDataId($tb, $id);

			return $data;
		}

		public function setData(){
			if(isset($_POST['sua'])){
				$tensp = $_POST['ten'];
				$loaisp = $_POST['loai'];
				$anhsp = $_FILES['hinhanh']['name'];
				$anhsp_tmp = $_FILES['hinhanh']['tmp_name'];
				move_uploaded_file($anhsp_tmp, 'catalog/product/uploads/'.$anhsp);
				$giasp = $_POST['gia'];
				$id = $_GET['id'];
				$this->cf->edit($tensp , $loaisp, $anhsp, $giasp, $id);

				header('location:index.php?controller=product&action=list');
			}
		}

		
		public function renderEditLayout(){
			include("catalog/product/template/edit.php");
			$editTemplate = new editTemplate();
			$lineData = $this->getData();
			$editTemplate->setData($lineData);

			return $editTemplate;
		}
	}
 ?>