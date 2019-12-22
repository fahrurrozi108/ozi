<?php
require_once("../../config.php");

$id = $_GET['id'];
$query = "DELETE FROM tb_pemesanan WHERE id = $id"; // query hapus data

if(mysqli_query($koneksi, $query)){
    header("Location:../data_pesanan.php"); // redirect ke index.php
}else{
    echo "Hapus data gagal";
}
?>