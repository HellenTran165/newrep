<?php 
	class Database {
		protected $hostname = 'localhost';
		protected $username = 'root';
		protected $password = 'root';
		protected $dbname = 'qlsp_test';

		protected $conn = null;
		protected $result = null;

		public function connect(){
			$this->conn = mysql_connect($this->hostname , $this->username, $this->password, $this->dbname);

			if($this->conn){
				mysql_select_db($this->dbname, $this->conn);
				 
			}
			else{
				echo "could not connect";
			}
			return $this->conn;
		}

		public function excute($sql){
			$this->result = mysql_query($sql);
			return $this->result;
		}

		public function getData(){
			if($this->result){
				$data = mysql_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function getAllData($table){
			$sql = "SELECT * FROM $table";
			$this->excute($sql);

			if($this->num_row() == 0){
				$data[] = 0;
			}  
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}

		public function getDataId($table, $id){
			$sql = "SELECT * FROM $table WHERE id='$id'";
			$this->excute($sql);

			if($this->num_row() == 0){
				$data[] = 0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}

		public function num_row() {
			if($this->result){
				$num = mysql_num_rows($this->result);
			}
			else{
				$num = 0;
			}
			return $num;
		}

		public function getDataToCategory(){
			$sql = "SELECT * FROM qlsp LIMIT 6";
			$row_sql = mysql_query($sql);

			return $row_sql;
		}

		public function getDataToCard(){
			$sql = "SELECT * FROM qlsp ORDER BY id DESC LIMIT 3";
			$row = mysql_query($sql);

			return $row;
		}

		
	} 
 ?>
