<?php
include "include/koneksi.php";

$query=$koneksi->query("update regions set
id_region 		= '$_POST[id_region]', 
create_at 		= '$_POST[create_at]',
nama			= '$_POST[nama]' 
	where id_region='$_POST[id_region]'");

	if($query){
	header("location:region.php?note=sukses");
}else{
	header("location:region.php?note=gagal");
}
?>