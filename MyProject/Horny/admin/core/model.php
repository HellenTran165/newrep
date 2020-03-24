<?php 
	class Config {
		protected $tensp;
		protected $loaisp;
		protected $anhsp;
		protected $giasp;
		protected $id;

	function add($tensp , $loaisp , $anhsp, $giasp){
		try{
			$sql_add = "INSERT INTO qlsp(tensp, loaisp, anh, gia) VALUES('$tensp', '$loaisp', '$anhsp', '$giasp')";
			mysql_query($sql_add);

		}
		catch(Exception $e){
			echo 'not working since database already existed', $e->getMessage();
		}
		
	}


	function edit($tensp , $loaisp , $anhsp, $giasp, $id){
		try{
			if($anhsp == ''){
			$sql_edit = "UPDATE qlsp SET tensp = '$tensp' , loaisp = '$loaisp' ,  gia='$giasp' WHERE id='$id'";
			mysql_query($sql_edit);
			}
			else{
				$sql_edit = "UPDATE qlsp SET tensp = '$tensp' , loaisp = '$loaisp' , anh = '$anhsp',  gia='$giasp' WHERE id='$id'";
				mysql_query($sql_edit);
			}

		}
		catch(Exception $e){
			echo 'not working since database already existed', $e->getMessage();
		}
		
		
	}

	function edit_here($tensp , $loaisp , $anhsp, $giasp){
		try{
			if($anhsp == ''){
			$sql_edit = "UPDATE qlsp SET tensp = '$tensp' , loaisp = '$loaisp' ,  gia='$giasp' ORDER BY id DESC LIMIT 1;";
			mysql_query($sql_edit);
			}
			else{
				$sql_edit = "UPDATE qlsp SET tensp = '$tensp' , loaisp = '$loaisp' , anh = '$anhsp',  gia='$giasp' ORDER BY id DESC LIMIT 1;";
				mysql_query($sql_edit);
			}

		}
		catch(Exception $e){
			echo 'not working since database already existed', $e->getMessage();
		}
		
		
	}

	function delete($id) {
		try{
			$sql_del = "DELETE FROM qlsp WHERE id = '$id' ";
			mysql_query($sql_del);

		}
		catch(Exception $e){
			echo 'not working since database already existed', $e->getMessage();
		}
		
	}

	}

?>
