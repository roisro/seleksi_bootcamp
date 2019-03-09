<?php
include "include/koneksi.php";
$query=$koneksi->query("delete from regions where id_region='$_GET[id_region]'");
if($query){
	header("location:region.php?note=sukses");
}else{
	header("location:region.php?note=gagal");
}
?>