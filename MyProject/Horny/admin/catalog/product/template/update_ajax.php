<?php
if(isset($_POST['id'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	$image=$_POST['image'];
	$price=$_POST['price'];

	$cf->edit($name, $type, $image, $price, $id);
	}
?>