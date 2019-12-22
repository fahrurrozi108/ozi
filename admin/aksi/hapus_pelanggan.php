<?php
require_once("../../config.php");

$id = $_GET['id_pelanggan'];
$query = "DELETE FROM tb_pelanggan WHERE id_pelanggan = $id"; // query hapus data

if(mysqli_query($koneksi, $query)){
    header("Location:../data_pelanggan.php"); // redirect ke index.php
}else{
    echo "Hapus data gagal";
}
?>