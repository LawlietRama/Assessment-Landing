<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pusat Asesmen | Beranda</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css" />
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="index.php" class="navbar-brand">
          <div class="mr-auto d-flex flex-row align-items-center">
            <img src="dist/img/assets/logo-provsu.png" alt="Logo ProvSU" class="logo img-fluid img-circle" style="opacity: .8; height: 102px">
            <div class="d-flex flex-column">
              <span class="brand-text font-weight-bold">Pusat Penilaian<br>
                Kompetensi ASN</span>
              <span class="text-sm font-weight-light">Pemerintah Provinsi Sumatera Utara</span>
            </div>
          </div>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3 justify-content-end" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="?page=beranda" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="?page=alur" class="nav-link">Alur</a>
            </li>
            <li class="nav-item">
              <a href="?page=kegiatan" class="nav-link">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a href="?page=kontak" class="nav-link">Kontak</a>
            </li>
          </ul>

          <a href="https://cbt.berhala.net"><button type="button" class="btn btn-masuk">Masuk</button></a>
        </div>

      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <div class="content">
        <div class="container">


          <?php
          $queries = array();
          parse_str($_SERVER['QUERY_STRING'], $queries);
          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
          switch ($queries['page']) {
            case 'beranda':
              # code...
              include __DIR__ . '/pages/home.php';
              break;
            case 'alur':
              # code...
              include __DIR__ . '/pages/alur.php';
              break;
            case 'kontak':
              # code...
              include __DIR__ . '/pages/kontak.php';
              break;
            case 'kegiatan':
              include __DIR__ . '/pages/kegiatan.php';
              break;
            case 'kegiatan-detail':
              include __DIR__ . '/pages/kegiatan-detail.php';
              break;
            default:
              #code...
              include __DIR__ . '/pages/home.php';
              break;
          }
          ?>

          <!-- Secondary Footer -->
          <div class="secondary-footer row justify-content-between align-items-center">
            <div class="col-5 px-4 py-5">
              <h4>Pusat Asesmen Provinsi Sumatera Utara</h4>

              <p>Jl. Pangeran Diponegoro No.30,
                Madras Hulu, Kec. Medan Polonia,
                Kota Medan, Sumatera Utara 20151</p>
            </div>
            <div class="col-3 px-4 py-5">
              <h4>LINK</h4>
              <ul class="footer-list">
                <li>Beranda</li>
                <li>Alur</li>
                <li>Kegiatan</li>
                <li>Kontak</li>
              </ul>
            </div>
          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="text-center">
        &copy; Copyright <strong>Badan Kepegawaian Daerah Provinsi Sumatera Utara.</strong> All Rights Reserved
        Pusat Asesmen Provinsi Sumatera Utara

      </div>
      <!-- Default to the left -->

    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>