<?php 
	class Config {
		protected $tensp;
		protected $loaisp;
		protected $anhsp;
		protected $giasp;
		protected $id;

	function add($tensp , $loaisp , $anhsp, $giasp){
		$sql_add = "INSERT INTO qlsp(tensp, loaisp, anh, gia) VALUES('$tensp', '$loaisp', '$anhsp', '$giasp')";
		mysql_query($sql_add);
		
	}


	function edit($tensp , $loaisp , $anhsp, $giasp, $id){
		if($anhsp == ''){
			$sql_edit = "UPDATE qlsp SET tensp = '$tensp' , loaisp = '$loaisp' ,  gia='$giasp' WHERE id='$id'";
			mysql_query($sql_edit);
		}
		else{
			$sql_edit = "UPDATE qlsp SET tensp = '$tensp' , loaisp = '$loaisp' , anh = '$anhsp'  gia='$giasp' WHERE id='$id'";
			mysql_query($sql_edit);
		}
		
		

	}

	function delete($id) {
		$sql_del = "DELETE FROM qlsp WHERE id = '$id' ";
		mysql_query($sql_del);
	}

	}

?>
