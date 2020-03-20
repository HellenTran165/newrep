function save_row(id)
{
 var name=document.getElementById("name_val").value;
 var type=document.getElementById("type_val").value;
 var image=document.getElementById("image_val").value;
 var price=document.getElementById("price_val").value;
 alert(name);
 $.ajax
 ({
  type:'post',
  url:'catalog/product/template/edit_ajax.php',
  data:{
  row_id:id,
  name_val:name,
  type_val:type,
  image_val:image,
  price_val:price
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("name_val"+id).innerHTML=name;
    document.getElementById("type_val"+id).innerHTML=type;
    document.getElementById("image_val"+id).innerHTML=image;
    document.getElementById("price_val"+id).innerHTML=price;
   }
  }
 });
}
