<?php

include '../config.php';
$nama           =$_POST['nama'];
$alamat          =$_POST['alamat'];
$kode_post      =$_POST['kode_post'];
$no              =$_POST['no'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$submit      =$_POST['submit'];
 
if(isset($submit)){
 
  $ins = mysqli_query($koneksi,"insert into tb_pelanggan(nama_pelanggan,alamat,kode_post,no,username,password) values ('$nama','$alamat','$kode_post','$no','$username','$password')");
  echo "<script>alert('Registrasi Sukses'); window.location=('login.php');</script>";
}
?>