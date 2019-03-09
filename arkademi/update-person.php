<?php
include "include/koneksi.php";

$query=$koneksi->query("update person set
id 			= '$_POST[id]',
name 		= '$_POST[name]',
id_region 	= '$_POST[id_region]',
address 	= '$_POST[address]',
income 		= '$_POST[income]', 
create_at 	= '$_POST[create_at]'
	where id='$_POST[id]'");

	if($query){
	header("location:person.php?note=sukses");
}else{
	header("location:person.php?note=gagal");
}
?>