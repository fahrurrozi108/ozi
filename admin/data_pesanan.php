<?php
session_start();
include '../config.php';
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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Berugak Print</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

    

      <li class="nav-item">
        <a class="nav-link" href="data_pelanggan.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Pelanggan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="paket_harga.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Tambah Paket</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="data_pesanan.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Pemesanan</span></a>
      </li>
      
  
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
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
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Paket</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             
    
<thead>
<table class="table table-hover">
    <div>
        <th>id</th>
        <th>No </th>
        <TH>Tgl </TH>
        <TH>Nama Paket</TH>
        <TH>Harga Satuan</TH>
        <TH>Jumlah</TH>
        <th>Ongkir</th>
        <TH>Total</TH>
        <TH>File</TH>
        <TH>Status</TH>
        <th align="center">Aksi</th>
    </div>
    <?php 
include '../config.php';
$no = 1;
$data = mysqli_query($koneksi,"select tb_pemesanan.no_pemesanan,tb_pemesanan.tgl_pemesanan,tb_paket.nama_paket,tb_paket.harga_satuan,tb_paket.ongkir,tb_pemesanan.jumlah,tb_pemesanan.file,tb_pemesanan.status from tb_pemesanan,tb_paket ".$_SESSION['id_pelanggan']);
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['no_pemesanan']; ?></td>
<td><?php echo $d['tgl_pemesanan']; ?></td>
<td><?php echo $d['nama_paket']; ?></td>
<td><?php echo $d['harga_satuan']; ?></td>
<td><?php echo $d['jumlah']; ?></td>
<td><?php echo $d['ongkir']; ?></td>
<td><?php echo $d['']; ?></td>
<td><?php echo $d['file']; ?><a href="download.php?id=<?php echo $d['id']; ?>">Download</a> </td>
<td><?php echo $d['status']; ?></td>
<td>
<a href="aksi/edit_pesanan.php?id=<?php echo $d['id']; ?>" class="btn btn-info">Edit</a>
<a href="aksi/hapus_pesanan.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">Hapus</a> 

</td>

</tr>
<?php 
}
?>
    
</table> 
          
</div>
  </div>
</div>
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>

