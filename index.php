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
            <img src="dist/img/assets/computerLogo.png" alt="AdminLTE Logo" class="logo img-fluid img-circle" style="opacity: .8; height: 102px">
            <div class="d-flex flex-column">
              <span class="brand-text font-weight-bold">Pusat Asesmen</span>
              <span class="text-sm font-weight-light">Pemerintah</span>
              <span class="text-sm font-weight-light">Provinsi Sumatera Utara</span>
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

          <button type="button" class="btn btn-masuk">Masuk</button>
        </div>

      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <!-- Header -->
          <div class="row">
            <div class="col-lg-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <header class="d-flex px-4 py-5 align-items-center justify-content-around">
                      <div class="d-flex flex-column align-items-start">
                        <h2 class="header-title-text ">Pengumuman Seleksi Jabatan A</h2>
                        <p class="header-text">
                          Selamat Datang <br />di Portal Pusat Asesmen<br /> Provinsi Sumatera Utara
                        </p>
                        <a class="btn btn-primary" href="#">Masuk <i class="fas fa-angle-right"></i></a>
                      </div>
                      <div class="d-flex flex-wrap">
                        <img src="dist/img/assets/gubsu.png" class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid img-head-1" alt="Photo" />
                        <img src="dist/img/assets/wagub.png" class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid img-head-1" alt="Photo" />
                      </div>
                    </header>
                  </div>
                  <div class="carousel-item">
                    <header class="d-flex px-4 py-5 align-items-center justify-content-around">
                      <div class="d-flex flex-column align-items-start">
                        <h2 class="header-title-text ">Pengumuman Seleksi Jabatan A</h2>
                        <p class="header-text">
                          Selamat Datang <br />di Portal Pusat Asesmen<br /> Provinsi Sumatera Utara
                        </p>
                        <a class="btn btn-primary" href="#">Masuk <i class="fas fa-angle-right"></i></a>
                      </div>
                      <div class="d-flex flex-wrap">
                        <img src="dist/img/assets/gubsu.png" class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid img-head-1" alt="Photo" />
                        <img src="dist/img/assets/wagub.png" class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid img-head-1" alt="Photo" />
                      </div>
                    </header>
                  </div>
                </div>
              </div>

              <!-- /.card-body -->

              <!-- /.card -->
            </div>
          </div>
          <!-- /.header -->
          <!-- /.row -->

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