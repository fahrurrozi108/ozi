<?php
require_once("../../config.php");

$id = $_GET['id_paket'];
$query = "DELETE FROM tb_paket WHERE id_paket = $id"; // query hapus data

if(mysqli_query($koneksi, $query)){
    header("Location:../paket_harga.php"); // redirect ke index.php
}else{
    echo "Hapus data gagal";
}
?>