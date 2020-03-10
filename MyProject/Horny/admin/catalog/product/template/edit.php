<?php 
	class editTemplate {
		protected $data;
		public function setData($data){
			$this->data = $data;
		}

		public function toHTML(){
			 ?>
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
        
        <?php
		}
	}
 ?>

