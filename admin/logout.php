<?php 
session_start();
session_destroy();
 
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Logout Sukses');
    window.location.href='index.php';
    </script>");
?>