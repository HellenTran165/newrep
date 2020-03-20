<?php 
	include("catalog/product/template/edit.php");
	include("catalog/product/template/list.php");

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
			if(isset($_POST['id'])){
			$idE = $_POST['id'];
			$data = $this->db->getDataId($tb, $idE);
			return $data;
			}
		}

		public function setData(){
			if(isset($_POST['sua'])){
				$tensp = $_POST['ten']; 
				$loaisp = $_POST['loai'];
				$anhsp = $_FILES['hinhanh']['name'];
				$anhsp_tmp = $_FILES['hinhanh']['tmp_name'];
				move_uploaded_file($anhsp_tmp, 'catalog/product/uploads/'.$anhsp);
				$giasp = $_POST['gia'];
				$idE = $_POST['id'];
               
				try{
					$this->cf->edit($tensp, $loaisp, $anhsp, $giasp, $idE);

				    header('location:product-list.html');

				}
				catch(Exception $e){
					echo 'database not working', $e->getMessage();
				}
				
			}
		}

		
		public function renderEditLayout(){
			
			$editTemplate = new editTemplate();
			$lineData = $this->getData();
			$editTemplate->setData($lineData);

			return $editTemplate;
		}
	}
 ?>