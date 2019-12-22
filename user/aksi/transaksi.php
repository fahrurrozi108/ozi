<?php
session_start();
include '../../config.php';
$_SESSION['id_pelanggan'];
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
            <div class= "col-md-">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" >
             
    <h4>Tabel Transaksi<hr></h4>
<thead>
<div>
        <th>NO</th>
        <th>No.pemesanan</th>
        <TH>Tgl Pemesanan</TH>
        <TH>Nama Paket</TH>
        <TH>Haraga satuan</TH>
        <TH>Jumlah</TH>
        <th>Ongkir</th>
        <th>Total Bayar</th>
        <TH>File</TH>
        <TH>STATUS</TH>
    </div>
  
</thead>
<tbody>
<div>
  
      <?php
      
include '../../config.php';
$no = 1;
$data = mysqli_query
($koneksi,"select tb_pemesanan.no_pemesanan,tb_pemesanan.tgl_pemesanan,tb_paket.nama_paket,tb_paket.harga_satuan,tb_paket.ongkir,tb_pemesanan.jumlah,tb_pemesanan.file,tb_pemesanan.status from tb_pemesanan,tb_paket where tb_pemesanan.no_pemesanan=tb_paket.id_paket like " .$_SESSION['id_pelanggan']);
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
<td align="center"><B><?= number_format() ?><B></td>
<td><?php echo $d['file']; ?></td>
<td><b><?php echo $d['status']; ?></b></td>


</tr>
<?php 
}
?>
    
    </div>
</div>

</tbody>  
    
</table>
</div>
  
  </div>
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