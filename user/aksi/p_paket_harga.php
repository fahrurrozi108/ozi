
<?php
session_start();
include '../../config.php';
$no_pemesanan =$_POST['no_pemesanan'];
$tgl_upload = date("Ymd");
$id_pelanggan =$_POST['id_pelanggan'];
$id_paket =$_POST['id_paket'];
$harga_satuan =$_POST['harga_satuan'];
$jumlah =$_POST['jumlah'];
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
$folder = "files/$nama_file";
$status =$_POST['status'];
$keterangan =$_POST['keterangan'];

if (move_uploaded_file($lokasi_file,"$folder")){
  echo ("<script LANGmUAGE='JavaScript'>
  window.alert('Pemesanan Sukses');
  window.location.href='transaksi.php';
  </script>");
  
include '../../config.php';
$query = "INSERT INTO tb_pemesanan
(no_pemesanan,tgl_pemesanan,id_pelanggan,id_paket,harga_satuan,jumlah,file,status,keterangan)
 VALUES ('$no_pemesanan','$tgl_upload','$id_pelanggan','$id_paket','$harga_satuan','$jumlah','$nama_file','$status','$keterangan')";
            
  mysqli_query($koneksi, $query);

}

else{

  echo "File gagal di upload";

}
?>


