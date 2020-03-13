<?php 
	
	class editTemplate {
		protected $data;
		public function setData($data){
			$this->data = $data;
		}

		public function toHTML(){
			 ?>

			<!DOCTYPE html>
			<html lang="en">
			<head>
  			<title>Edit</title>
  			<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			</head>
			<body>

        	<h3>EDIT PRODUCT</h3>

 			<form action="" method="post" enctype="multipart/form-data">
			<table width="600" border="1">
           
            <?php
                
                foreach ($this->data as $value) {

              ?> 
             <tr>
				<td width="97"> Ten Sp</td>
				<td width="87">
				<input type="text" name="ten" value="<?php echo $value['tensp'] ?>">
				</td>
			</tr>

			<tr>
				<td>
					Loai Sp
				</td>
				<td>
					<input type="text" name="loai" value="<?php echo $value['loaisp'] ?>">
				</td>
			</tr>

			<tr>
				<td>
					Hinh Anh
				</td>
				<td>
					<input type="file" accept="image/x-png,image/gif,image/jpeg" name="hinhanh" />
					<img src="catalog/product/uploads/<?php echo $value['anh'] ?>" width="80" height="80">
				</td>
			</tr>

			<tr>
				<td>
					Gia 
				</td>
				<td>
					<input type="text" name="gia" value="<?php echo $value['gia'] ?>">
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
	  		<?php 
	  			}
	  		 ?>
			</table>	
            
          </form>
		  
      	</body>

		</html>


        <?php
        //https://www.studentstutorial.com/ajax/update-data
        //https://wiki.matbao.net/kb/ajax-la-gi-cach-su-dung-ajax-toi-uu-nhat/
		}


	}
 ?>

