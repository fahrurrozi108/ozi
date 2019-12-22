<!-- cek apakah sudah login -->
<?php 
session_start();
if(empty($_SESSION['nama'])){
    header("location:user/login.php");
}
?>