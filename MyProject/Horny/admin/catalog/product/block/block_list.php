 <?php 

	class Block_L {
		protected $db;

		function setDB($db){
			$this->db = $db;
		}

		function getList(){
			$tb = "qlsp";
			$data = $this->db->getAllData($tb);

			return $data;			
		}

		function renderLayout(){
			include("catalog/product/template/list.php");
			$template = new listTemplate();
			$listData = $this->getList();
			$template->setData($listData);

			return $template;
		}
	}

 ?>