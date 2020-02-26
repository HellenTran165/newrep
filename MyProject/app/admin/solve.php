 <?php 
	include('config.php');

	$tensp = $_POST['ten'];
	$loaisp = $_POST['loai'];
	$anhsp = $_FILES['hinhanh']['name'];
	$anhsp_tmp = $_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($anhsp_tmp, 'uploads/'.$anhsp);
	$giasp = $_POST['gia'];

	if(isset($_POST['them'])) {
		try {
			$sql_themSP = ("insert into qlsp(tensp , loaisp, anh, gia) values('$tensp' , '$loaisp' , '$anhsp' , '$giasp')");
			mysql_query($sql_themSP);

			header('location:list.php');
		} catch (Exception $e) {
			
		}
		mysql_close($con);
	} 

	else if(isset($_POST['sua'])){
		try {
			if($anhsp != ''){
				$sql_suaSP = "UPDATE qlsp SET tensp='$tensp', loaisp='$loaisp', anh='$anhsp', gia='$giasp' WHERE id='$_GET[id]'";
				mysql_query($sql_suaSP);
				header('location:list.php');
			}

			else{
				$sql_suaSP = "UPDATE qlsp SET tensp='$tensp', loaisp='$loaisp', gia='$giasp' WHERE id='$_GET[id]'";
				mysql_query($sql_suaSP);
				header('location:list.php');
			}
		} 
		catch (Exception $e) {
			
		}

		mysql_close($conn);
		
	}
	else{
		try {
			$sql_xoaSP = "DELETE FROM qlsp WHERE id='$_GET[id]'";
			mysql_query($sql_xoaSP);

			header('location:list.php');
		} catch (Exception $e) {
			
		}
		mysql_close($conn);
	}
 ?>