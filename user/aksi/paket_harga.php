<?php 
  session_start();
 
	if($_SESSION['status']!="login"){
		header("location:../login.php");
  }
  ?>
  
  <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Berugak Print</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
      <div class="">
         <img src="../../gambar/logo.jpg" width="90%">
        </div>
        <div class=""> Berugak Media</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

    

      <li class="nav-item">
        <a class="nav-link" href="paket_harga.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Paket Harga</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="transaksi.php">
          <i class="fas fa-fw fa-signal"></i>
          <span>Transaksi</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="identitas.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Identitas</span></a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Logout</span></a>
      </li>



      
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">
        
           
</nav>
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Paket Harga</h1>
          
          </div>
          
<div class="container">
   <div class="col-md-12">
 
   <form action="p_paket_harga.php" method="POST" enctype="multipart/form-data">
 
  <div>
  <input type="hidden" name="no_pemesanan">
  </div>
  <div>
  <input type="hidden"  name="id_pelanggan" value<?php echo $_SESSION['id_pelanggan'] ?>>
  </div>
  <div>
  <input type="hidden" name="harga_satuan">
  </div>

<div class="form-group">
  <label><b>Pilih Paket Jasa:</b></label>
  <select class="form-control" name="id_paket" required > 
<?php 
  include '../../config.php';
	$sql="select * from tb_paket";
  $hasil=mysqli_query($koneksi,$sql);
  $no=0;
  while ($data = mysqli_fetch_array($hasil)) {
  $no++; ?> 
  

  <option  value="<?php echo $data['nama_paket'];?>">
  <?php echo $data['nama_paket'];?> Harga :
  <?php echo $data['harga_satuan'];?>
</option> 

<?php } ?>
 </select>
</div>


<div>
    <label for=""><b>Jumlah :</b></label>
    <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Lembaran" required >

    </div>


  <div class="form-group">
    <label for="exampleFormControlFile1"><b>File :</b></label>
    <input type="file" class="form-control-file" name="fupload" id="exampleFormControlFile1" required>
  </div>
    <div>
    <label for=""><b>Keterengan :</b></label>
    <textarea type="text" name="keterangan" class="form-control" placeholder="Masukan keterangan yang kurang jelas di sini contoh:ukuran,warna,dll" required></textarea>
    </div>
    <div>
  <input type="hidden" name="status">
  </div>

    <BR>
<div>
    <button class="btn btn-success" type="submit" >Pesan</button>
</div>
    </form>
   </div>
          <br>
  </div>
  </div>
  </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Berugak IT Lombok</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/chart-area-demo.js"></script>
  <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>
 