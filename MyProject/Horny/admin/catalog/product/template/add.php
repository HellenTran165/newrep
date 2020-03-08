<?php 
	class addTemplate {
		public function toHTML(){
			?>
				<h3>ADD NEW PRODUCTS</h3>

			<form action="" method="post" enctype="multipart/form-data">
				<table width="600" border="1">
					<tr>
						<td width="97"> Ten Sp</td>
						<td width="87">
							<input type="text" name="ten">
						</td>
					</tr>

					<tr>
						<td>
							Loai Sp
						</td>
						<td>
							<input type="text" name="loai">
						</td>
					</tr>

					<tr>
						<td>
							Hinh Anh
						</td>
						<td>
							<input type="file" name="hinhanh" />
						</td>
					</tr>

					<tr>
						<td>
							Gia
						</td>
						<td>
							<input type="text" name="gia">
						</td>
					</tr>

					<tr>
			    		<td colspan="2"><div align="center">
			      		<input type="submit" name="them" value="Add">
			      		<!-- <a href="list.php">
			      			<button>Cancel</button>
			      		</a> -->

			      		<input type="button" value="Cancel" onclick="history.back(-1)" />
			    		</div>
						</td>
			  		</tr>
				</table>
				
			</form>
			<?php
		}
	}
 ?>

