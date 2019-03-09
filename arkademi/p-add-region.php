<?php include "include/koneksi.php";?>
<?php
$query=$koneksi->query("select * from regions where id_region='$_GET[id_region]'");
$data=$query->fetch_assoc();
?>
<?php

  $id_region 		 = $_REQUEST['id_region'];
  $name   			 = $_REQUEST['name'];
  $create_at 		 = $_REQUEST['create_at']; 
 
 
$mysqli  =$koneksi->query("INSERT INTO regions (id_region, name, create_at) 
VALUES ('$id_region', '$name', '$create_at')");
  
  
if($mysqli){
	header("location:region.php?note=sukses");
}else{
	header("location:region.php?note=gagal");
}
?>