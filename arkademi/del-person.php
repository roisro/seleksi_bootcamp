<?php
include "include/koneksi.php";
$query=$koneksi->query("delete from person where id='$_GET[id]'");
if($query){
	header("location:person.php?note=sukses");
}else{
	header("location:person.php?note=gagal");
}
?>