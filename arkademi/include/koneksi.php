<?php
// koneksi ke database
$koneksi=new mysqli ("localhost","root","","sensus_penduduk");
if ($koneksi) {
	echo "";}else{
		echo "Koneksi Gagal";
	}
?>
