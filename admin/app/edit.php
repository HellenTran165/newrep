<h3>EDIT PRODUCT</h3>
<?php
include("config.php");
	$sql = "SELECT * FROM qlsp WHERE id = '$_GET[id]'";
	$row = mysql_query($sql);
	$dong = mysql_fetch_array($row);
 ?>


 <form action="solve.php?id=<?php echo $dong['id'] ?>" method="post" enctype="multipart/form-data">
	<table width="600" border="1">
		<tr>
			<td width="97"> Ten Sp</td>
			<td width="87">
				<input type="text" name="ten" value="<?php echo $dong['tensp'] ?>">
			</td>
		</tr>

		<tr>
			<td>
				Loai Sp
			</td>
			<td>
				<input type="text" name="loai" value="<?php echo $dong['loaisp'] ?>">
			</td>
		</tr>

		<tr>
			<td>
				Hinh Anh
			</td>
			<td>
				<input type="file" name="hinhanh" />
				<img src="uploads/<?php echo $dong['anh'] ?>" width="80" height="80">
			</td>
		</tr>

		<tr>
			<td>
				Gia
			</td>
			<td>
				<input type="text" name="gia" value="<?php echo $dong['gia'] ?>">
			</td>
		</tr>

		<tr>
    		<td style="text-align: center;" colspan="2">
      		<input type="submit" name="sua" value="Edit">
      		<!-- <a href="list.php">
      			<button >Cancel</button>
      		</a>    -->

      		<input type="button" value="Cancel" onclick="history.back(-1)" />		
			</td>
  		</tr>
	</table>	
 </form>