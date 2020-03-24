<?php
if(isset($_POST['idE'])){
	$idE=$_POST['idE'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	$image=$_POST['image'];
	$price=$_POST['price'];

	$cf->edit($name, $type, $image, $price, $idE);
	}
	else{
		if(isset($_POST['name'])){
			$name=$_POST['name'];
			$type=$_POST['type'];
			$image=$_POST['image'];
			$price=$_POST['price'];
			$cf->add($name, $type, $image, $price);
		}
		else{
			if(isset($_POST['id'])){
			$id=$_POST['id'];

			$cf->delete($id);
			}
		}
	}
?>