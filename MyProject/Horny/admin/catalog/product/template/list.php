<?php  
  class listTemplate{
    protected $data;

    public function setData($data){
      $this->data = $data;

    }
    public function toHtml(){   
          ?>    
          <a href="product-add.html">
            <button style="cursor: pointer; margin-bottom: 50px; margin-top: 20px; margin-left: 50%; transform: translateX(-50%); padding: 10px 10px;">ADD NEW PRODUCTS</button>
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
            
                foreach ($this->data as $value) {
                 

              ?> 
              <tr>
                <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                <td><?php echo $value{'tensp'}?></td>     
                <td><?php echo $value{'loaisp'}?></td>      
                <td><img src="catalog/product/uploads/<?php echo $value{'anh'} ?>" width="80" height="80" />
                </td>     
                <td><?php echo $value{'gia'}?></td>
                <td>  
                  <div style="display: flex; text-align: center; margin-left: 50%; transform: translateX(-50%);">
                  <form action="product-edit.html" method="post">
                    
                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">  
                    <input type="submit" name="idE" value="Edit" style="background-color: green; padding: 5px 13px;">  
                    </form> 

                    <form action="product-delete.html" method="post">
                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>"> 
                    <input type="submit" name="idD" value="Delete" style="background-color: red; padding: 5px 5px;"> 
                  </form> 
                </div>
                </td>   
              </tr>  
              <?php
                }
              ?>
            
          </table>
          
        <?php
        }  
    }
?>

