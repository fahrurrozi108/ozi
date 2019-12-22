<?php
session_start();
include '../config.php';
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from tb_pelanggan where username='$username' and password='$password' ");
$pemesanan = mysqli_query($koneksi,"select * from tb_pemesanan");
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    
    while($d = mysqli_fetch_array($data)){
       $_SESSION['id_pelanggan'] = $d['id_pelanggan'];
       
    }
    
    
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login Sukses');
    window.location.href='aksi/home.php';
    </script>");
}else{
	header("location:login.php");
}
?>