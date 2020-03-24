<?php 
	class Block_A {
		protected $cf;
		protected $db;

		public function setDB($db){
			$this->db = $db;
		}
		public function setConfig($cf){
			$this->cf = $cf;
		}

		public function getData(){
			$tb = "qlsp";
			$data = $this->db->getDataHere($tb);
			return $data;
		}

		public function setDataEdit(){
			if(isset($_POST['edit'])){
				$tensp = $_POST['ten']; 
				$loaisp = $_POST['loai'];
				$anhsp = $_FILES['hinhanh']['name'];
				$anhsp_tmp = $_FILES['hinhanh']['tmp_name'];
				move_uploaded_file($anhsp_tmp, 'catalog/product/uploads/'.$anhsp);
				$giasp = $_POST['gia'];
				
               
				try{
					$this->cf->edit_here($tensp, $loaisp, $anhsp, $giasp);

				    header('location:product-list.html');

				}
				catch(Exception $e){
					echo 'database not working', $e->getMessage();
				}
				
			}
		}

		public function renderAddLayout(){
			include("catalog/product/template/add_edit.php");
			$addTemplate = new addTemplate();
			return $addTemplate;
		}

		
	}
 ?>