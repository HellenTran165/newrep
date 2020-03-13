<?php 
	include("catalog/product/template/list.php");
	class Block_D {
		protected $cf;

		public function setConfig($cf){
			$this->cf = $cf;
		}
		public function destroy(){
			$id = $_GET['id'];
			try{
				$this->cf->delete($id);
				header('location:product-list.html');
			}
			catch(Exception $e){
				echo 'database not working', $e->getMessage();
			}
			
		}
	}
 ?>