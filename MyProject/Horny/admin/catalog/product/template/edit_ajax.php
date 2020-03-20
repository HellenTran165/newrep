<?php 
	if(isset($_POST['row_id']))
	{
	 $id=$_POST['row_id'];
	 $tensp=$_POST['name_val'];
	 $loaisp=$_POST['type_val'];
	 $anhsp=$_POST['image_val'];
	 $giasp=$_POST['price_val'];

	 try{
			
			$cf->edit($tensp, $loaisp, $anhsp, $giasp, $id);

		}
		catch(Exception $e){
			echo 'not working since database already existed', $e->getMessage();
		}
		
	 exit();
	}
 ?>