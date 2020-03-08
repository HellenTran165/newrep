<?php  
  class listTemplate{
    protected $data;

    public function setData($data){
      $this->data = $data;

    }
    public function toHtml(){   
          ?>    
          <a href="index.php?controller=produc&action=add">
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
                
                <td><?php echo $value{'tensp'}?></td>     
                <td><?php echo $value{'loaisp'}?></td>      
                <td><img src="catalog/product/uploads/<?php echo $value{'anh'} ?>" width="80" height="80" />
                </td>     
                <td><?php echo $value{'gia'}?></td>
                <td>
                  <a href="index.php?id=<?php echo $value{'id'} ?>?controller=product&action=edit" style="padding: 10px; color: white; background-color: green; text-decoration: none; border: 1px solid green;">edit</a>
                  <a href="index.php?id=<?php echo $value{'id'} ?>?controller=product&action=delete" style="padding: 10px; color: white; background-color: red; text-decoration: none; border: 1px solid red;">delete</a>
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

