<?php  
  class listTemplate{
    protected $data;

    public function setData($data){
      $this->data = $data;

    }
    public function toHtml(){   
          ?>  
          <!DOCTYPE html>
            <html lang="en">
            <head>
              <title>View Ajax</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            </head>
            <body> 

            <a  href="product-add.html">
            <button style="cursor: pointer; margin-bottom: 50px; margin-top: 20px; margin-left: 50%; transform: translateX(-50%); padding: 10px 10px; background-color: purple; color: white;">ADD NEW PRODUCTS</button>
            </a>

            <!-- show list product from database -->
            <h4>MY PRODUCTS LIST</h4>
            <table id="list" style="text-align: center;" width="100%" border="1">
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
                <td><img src="<?php echo BASE_URL ?><?php echo $value{'anh'} ?>" width="80" height="80" />
                </td>     
                <td><?php echo $value{'gia'}?></td>
                <td>  
                  <div style="display: flex; text-align: center; margin-left: 50%; transform: translateX(-50%);">
                  <!-- edit button -->
                  <button style="width: 55px; height: 34px;" type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_country"
                  data-id="<?=$value['id'];?>"
                  data-name="<?=$value{'tensp'};?>"
                  data-type="<?=$value{'loaisp'};?>"
                  data-image="<?=$value{'anh'};?>"
                  data-price="<?=$value{'gia'};?>"
                  >Edit
                  </button>

      
                  <!-- delete button -->
                  <button  style="background-color: red; width: 55px; height: 34px;" type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#acceptdel"
                  data-id="<?=$value['id'];?>"
                  >Delete
                  </button>

                  </div>
                </td>   
              </tr> 
              <?php
                }
              ?>
          </table>

          <!--modal delete -->
            <div  class="modal fade" id="acceptdel" role="dialog">
              <div class="modal-dialog modal-sm">
                <div class="modal-content " style="width: 300px; margin-left: 50%; transform: translateX(-50%);">
                <div class="modal-header" style="color:#fff;background-color: #af9484;padding:6px;">
                  <h5 class="modal-title"><i class="fa fa-edit"></i>Confirm</h5>
                </div>

                <input id="del" type="hidden" name="id" value="<?php echo $value['id']; ?>">
                
                <em>are you sure want to delete?</em>
                <p  style="text-align:center;float:center;"><button id="delete" type="submit" id="update_data" class="btn btn-default btn-sm" style="background-color: #af9484;color:#fff;">YES</button>
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="background-color: #af9484;color:#fff;">Close</button></p>
              </div>
              </div>
            </div>  <!--  modal delete end -->

          <!-- Modal Update-->
              <div  class="modal fade" id="update_country" role="dialog">
              <div class="modal-dialog modal-sm">
                <div class="modal-content " style="width: 500px; margin-left: 50%; transform: translateX(-50%);">
                <div class="modal-header" style="color:#fff;background-color: #e35f14;padding:6px;">
                  <h5 class="modal-title"><i class="fa fa-edit"></i> Update</h5>
                 
                </div>
                <div class="modal-body">
                
                  <!--1-->
                  <div class="row">
                    <div class="col-md-3">
                        <label>Tên SP</label>
                    </div>
                    <div class="col-md-9">
                      <input type="text" name="name_modal" id="name_modal" class="form-control-sm" required>
                    </div>  
                  </div>
                    <!--2-->
                  <div class="row">
                    <div class="col-md-3">
                        <label>Loại SP</label>
                    </div>
                    <div class="col-md-9">
                      <input type="text" name="type_modal" id="type_modal" class="form-control-sm" required>
                    </div>  
                  </div>
                    <!--3-->
                  <div class="row">
                    <div class="col-md-3">
                        <label>Ảnh SP</label>
                    </div>
                    <div class="col-md-9">
                      <input type="file" name="image_modal" id="image_modal" class="form-control-sm" required>
                      <img id="my_image" src="catalog/product/modules/" width="80" height="80">
                    </div>  
                  </div>
                  <!--4-->
                  <div class="row">
                    <div class="col-md-3">
                        <label>Giá SP</label>
                    </div>
                    <div class="col-md-9">
                      <input type="text" name="price_modal" id="price_modal" class="form-control-sm" required>
                    </div>  
                  </div>
                  <input type="hidden" name="id_modal" id="id_modal" class="form-control-sm">
                </div>
                <div class="modal-footer" style="padding-bottom:0px !important;text-align:center !important;">
                <p style="text-align:center;float:center;"><button type="submit" id="update_data" class="btn btn-default btn-sm" style="background-color: #e35f14;color:#fff;">Save</button>
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="background-color: #e35f14;color:#fff;">Close</button></p>
                
                </div>
                </div>
              </div>
            </div>
          <!-- Modal update End-->

          <script>
          $(document).ready(function() {

            //ajax for edit from list
              $(function () {
                $('#update_country').on('show.bs.modal', function (event) {
                  var button = $(event.relatedTarget); 
                  var id = button.data('id');
                  var name = button.data('name');
                  var type = button.data('type');
                  var image = button.data('image'); //c1.png.....
                  var price = button.data('price');
                  var modal = $(this);

                  modal.find('#name_modal').val(name);
                  modal.find('#type_modal').val(type);
                 
                  $("#my_image").attr("src","<?php echo BASE_URL ?>"+image);
                  modal.find('#price_modal').val(price);
                  modal.find('#id_modal').val(id);
                });
            });
            
            $(document).on("click", "#update_data", function() { 
                $.ajax({
                  url: "catalog/product/controller/update_save_delete_ajax.php",
                  type: "POST",
                  cache: false,
                  data:{
                    idE: $('#id_modal').val(),
                    name: $('#name_modal').val(),
                    type: $('#type_modal').val(),
                    image: $('#image_modal').val().replace(/.*(\/|\\)/, ''),
                    price: $('#price_modal').val(),
                  },
                  success: function(){
                      alert('edit successfully');
                      location.reload();
                  }
                });
              });

            //ajax for delete from delete

            $(function () {
                  $('#acceptdel').on('show.bs.modal', function (event) {
                  var button = $(event.relatedTarget); 
                  var id = button.data('id');
                  var modal = $(this);

                  
                  modal.find('#del').val(id);
               });
            });

          $(document).on("click", "#delete", function() { 
                $.ajax({
                  url: "catalog/product/controller/update_save_delete_ajax.php",
                  type: "POST",
                  cache: false,
                  data:{
                    id: $('#del').val(),
                    
                  },
                  success: function(){
                    location.reload();
                  }
                });
              });


          });
        </script>
          
        <?php
        }  
    }
?>
  </body>
</html>

