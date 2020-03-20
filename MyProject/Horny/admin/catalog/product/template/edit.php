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
				<input id="name_val" type="text" name="ten" value="<?php echo $value['tensp'] ?>">
				</td>
			</tr>

			<tr>
				<td>
					Loai Sp
				</td>
				<td>
					<input id="type_val" type="text" name="loai" value="<?php echo $value['loaisp'] ?>">
				</td>
			</tr>

			<tr>
				<td>
					Hinh Anh
				</td>
				<td>
					<input id="image_val" type="file" accept="image/x-png,image/gif,image/jpeg" name="hinhanh" />
					<img src="catalog/product/uploads/<?php echo $value['anh'] ?>" width="80" height="80">
				</td>
			</tr>

			<tr>
				<td>
					Gia 
				</td>
				<td>
					<input id="price_val" type="text" name="gia" value="<?php echo $value['gia'] ?>">
				</td>
			</tr>

			<tr>
	    		<td style="text-align: center;" colspan="2">
	    		<input type="hidden" name="id" value="<?php echo $value['id'] ?>"> 
	      		<input   type="submit" name="sua" value="Edit" onclick="save_row('<?php echo $value['id'] ?>')">
	   

	      		<input type="button" value="Cancel" onclick="history.back(-1)" />		
				</td>
	  		</tr>
	  		<?php 
	  			}
	  		 ?>
			</table>	
            
          </form>
		  
      	</body>

      	<script type="text/javascript" src="catalog/product/template/edit.js"></script>

		</html>


        <?php
        //http://techzaurus.blogspot.com/2017/08/how-to-make-crud-system-using-ajax.html
        //https://www.webslesson.info/2019/02/update-or-edit-data-using-jquery-dialogify-with-php-ajax.html
        //https://www.studentstutorial.com/ajax/update-data
        //https://wiki.matbao.net/kb/ajax-la-gi-cach-su-dung-ajax-toi-uu-nhat/
		}


	}
 ?>

