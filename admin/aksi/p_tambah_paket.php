<?php 

include "../../config.php";
$nama = $_POST['nama'];
$harga =$_POST['harga'];
$ongkir =$_POST['ongkir'];

mysqli_query($koneksi,"insert into tb_paket (nama_paket,harga_satuan,ongkir) values('$nama','$harga','$ongkir')");

echo "<script>alert('Suksess'); window.location=('../paket_harga.php');</script>";

?>