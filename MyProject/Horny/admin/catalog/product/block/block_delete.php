<?php 
	class Block_D {
		protected $cf;

		public function setConfig($cf){
			$this->cf = $cf;
		}
		public function destroy(){
			$id = $_GET['id'];
			$this->cf->delete($id);
			header('location:index.php?controller=product&action=list');
		}
	}
 ?>