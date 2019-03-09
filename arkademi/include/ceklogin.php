<?php  
if(!empty($_POST["email"]) and !empty($_POST["password"])){
		include "koneksi.php";
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		//staf
		$query=$koneksi->query("select * from users where 
			email='$email' and password='$password'");
			$row=$query->fetch_assoc();
			if($row){
			session_start();
			$_SESSION['email']=$row['email'];
			$_SESSION['password']=$row['password'];
		header("location:../index.php?note=login berhasil");
		}else{
// jika tidak ada yang cocok
		header("location:../login.php?note=Username/password_salah");
		}		
	}
else{
	header("location:../login.php?note=Data_Isian_kosong");
}
?>
