<?php 
	class addTemplate {
		public function toHTML(){
			?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Add Product</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		</head>
		<body >

			<h3 style="margin-top: 100px; margin-left: 50%; transform: translateX(-50%);">ADD NEW PRODUCTS</h3>
			

			<form style="margin-top: 50px; margin-left: 50%; transform: translateX(-50%);" id="fupform" action="" method="post" enctype="multipart/form-data">
				<table width="600" border="1">
					<tr>
						<td width="97"> Tên sản phẩm</td>
						<td width="87">
							<input id="name" type="text" name="ten">
						</td>
					</tr>

					<tr>
						<td>
							Loại sản phẩm
						</td>
						<td>
							<input id="type" type="text" name="loai">
						</td>
					</tr>

					<tr>
						<td>
							Hình Ảnh
						</td>
						<td>
							<input id="image" type="file" name="hinhanh" />
						</td>
					</tr>

					<tr>
						<td>
							Giá
						</td>
						<td>
							<input id="price" type="text" name="gia">
						</td>
					</tr>

					<tr>
			    		<td colspan="2"><div align="center">
			      		<input style="background-color: green; color: white" type="submit" id="add" name="them" value="Add">
			      		<input style="display: none; background-color: orange; color: white" type="submit" id="edit" name="edit" value="Edit / Back to List">
			      		<!-- <a href="list.php">
			      			<button>Cancel</button>
			      		</a> -->

			      		<input id="cancel" style="background-color: red; color: white;" type="button" value="Cancel" onclick="history.back(-1); " />
			    		</div>
						</td>
			  		</tr>
				</table>
				
			</form>

			<script>
			$(document).ready(function() {
				$('#add').on('click', function() {
					$("#add").attr("disabled", "disabled");
					var name = $('#name').val();
					var type = $('#type').val();
					var image = $('#image').val().replace(/.*(\/|\\)/, '');
					var price = $('#price').val();
					if(name!="" && type!="" && image!="" && price!=""){
						$.ajax({
							url: "catalog/product/controller/update_save_delete_ajax.php",
							type: "POST",
							data: {
								name: name,
								type: type,
								image: image,
								price: price				
							},
							cache: false,
							success: function(){
								
								alert("add product success")
								document.getElementById("name").innerHTML=name;
								document.getElementById("type").innerHTML=type;
								document.getElementById("image").innerHTML=image;
								document.getElementById("price").innerHTML=price;
								document.getElementById("add").style.display="none";
  								document.getElementById("edit").style.display = 'block';
  								document.getElementById("cancel").style.display = 'none';
								
							}
						});
					}
					else{
						alert('Please fill all the field !');
					}
				});
			});
			</script>
		</body>
		</html>
			<?php
		}
	}
 ?>

