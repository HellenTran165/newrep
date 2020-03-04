<?php 
	class Block_A {
		protected $cf;
		public function setConfig($cf){
			$this->cf = $cf;
		}

		public function setData(){
			if(isset($_POST['them'])){
				$tensp = $_POST['ten'];
				$loaisp = $_POST['loai'];
				$anhsp = $_FILES['hinhanh']['name'];
				$anhsp_tmp = $_FILES['hinhanh']['tmp_name'];
				move_uploaded_file($anhsp_tmp, 'catalog/product/uploads/'.$anhsp);
				$giasp = $_POST['gia'];

				$this->cf->add($tensp , $loaisp, $anhsp, $giasp);

				header('location:index.php?controller=product&action=list');
			}
		}

		public function renderAddlayout(){
			include("catalog/product/template/add.php");
			$addTemplate = new addTemplate();
			return $addTemplate;
		}
	}
 ?>