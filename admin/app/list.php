<?php
	include("config.php"); 
	$sql_list="SELECT * FROM qlsp";
	$row_list=mysql_query($sql_list);
?>
<a href="add.php">
  <button style="margin-bottom: 50px; margin-top: 20px; margin-left: 50%; transform: translateX(-50%); padding: 10px 10px;">ADD NEW PRODUCTS</button>
</a>


<h4>MY PRODUCTS LIST</h4>
<table style="text-align: center;" width="100%" border="1">
	<tr>
		<td>Tên sản phẩm</td>
		<td>Loại sản phẩm</td>
		<td>Ảnh sản phẩm</td>
		<td>Giá sản phẩm</td>
    <td>Quản lí</td>
	</tr>
 
	<?php
  		
  		while($dong=mysql_fetch_array($row_list)){
  	?>
  	<tr>
  		
  		<td><?php echo $dong['tensp']?></td>			
  		<td><?php echo $dong['loaisp']?></td>			
  		<td><img src="uploads/<?php echo $dong['anh'] ?>" width="80" height="80" />
    	</td>			
  		<td><?php echo $dong['gia']?></td>
  		<td>
  			<a href="edit.php?id=<?php echo $dong['id'] ?>" style="padding: 10px; color: white; background-color: green; text-decoration: none; border: 1px solid green;">edit</a>
        <a href="solve.php?id=<?php echo $dong['id'] ?>" style="padding: 10px; color: white; background-color: red; text-decoration: none; border: 1px solid red;">delete</a>
  		</td>

  		

  	</tr>
  	<?php
  				
  	}

  	?>


</table>
