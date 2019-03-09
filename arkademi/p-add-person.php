<?php include "include/koneksi.php";?>
<?php
$query=$koneksi->query("select * from person where id='$_GET[id]'");
$data=$query->fetch_assoc();
?>
<?php

$id		 	= $_REQUEST['id'];
$name   	= $_REQUEST['name'];
$id_region  = $_REQUEST['id_region'];
$address   	= $_REQUEST['address'];
$income   	= $_REQUEST['income'];
$create_at 	= $_REQUEST['create_at']; 
 
 
$mysqli  =$koneksi->query("INSERT INTO person (id, name, id_region, address, income, create_at) 
VALUES ('$id', '$name', '$id_region', '$address', '$income', '$create_at')");
  
  
if($mysqli){
	header("location:person.php?note=sukses");
}else{
	header("location:person.php?note=gagal");
}
?>