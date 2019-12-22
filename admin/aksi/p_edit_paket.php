<?php
include '../../config.php';
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $ongkir = $_POST['ongkir'];

    $query = "UPDATE tb_paket SET nama_paket = '$nama', harga_satuan = '$harga', ongkir = '$ongkir' WHERE id_paket = $id";
    if(mysqli_query($koneksi, $query)){
        header("Location: ../paket_harga.php");
    }else{
        echo "Edit Data Gagal";
    }
}
?>