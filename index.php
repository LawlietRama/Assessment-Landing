<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pusat Penilaian Kompetensi ASN</title>
  <meta name="description" content="Pusat Penilaian Kompetensi ASN Pemerintah Provinsi Sumatera Utara" />
  <meta property="og:title" content="Pusat Penilaian Kompetensi ASN" />
  <meta property="og:url" content="https://berhala.net/landings" />
  <meta property="og:description" content="Pusat Penilaian Kompetensi ASN Pemerintah Provinsi Sumatera Utara" />
  <meta property="og:image" content="dist/img/assets/logo-provsu.png" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css" />
</head>

<body class="hold-transition layout-top-nav">
  <button class="btn-masuk px-4 d-none d-lg-block" onclick="topFunction()" id="backToTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-lg navbar-light navbar-white">
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

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="?page=beranda" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="?page=alur" class="nav-link">Fungsi</a>
            </li>
            <li class="nav-item">
              <a href="?page=kegiatan" class="nav-link">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a href="?page=profil" class="nav-link">Profil</a>
            </li>
            <li class="nav-item">
              <a href="?page=kontak" class="nav-link">Kontak</a>
            </li>
          </ul>


        </div>
        <a href="https://pusatasesmen.sumutprov.go.id/cbt"><button type="button" class="btn btn-masuk ">Masuk</button></a>

      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Bottom Navbar (only on tablets, mobiles) -->
    <div class="d-lg-none">
      <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark white-bg justify-content-around text-center">
        <!-- Bottom Navbar content -->
        <div class="col-4">
          <a href="https://pusatasesmen.sumutprov.go.id/cbt"><i class="fa fa-sign-in" aria-hidden="true"></i> <br>Daftar/Login</a>
        </div>
        <div class="col-4">
          <a href="?page=kontak"><i class="fa fa-ticket" aria-hidden="true"></i> <br>Helpdesk</a>
        </div>
        <div class="col-4">
          <a href="https://www.google.com/maps/place/BKD+Prov.+Sumatera+Utara,+Jl.+Pangeran+Diponegoro+No.30,+Madras+Hulu,+Kec.+Medan+Polonia,+Kota+Medan,+Sumatera+Utara+20151/@3.580163,98.671545,15z/data=!4m2!3m1!1s0x30313161c4870b09:0x147d3ccbb17086f8?hl=id&gl=ID"><i class="fa fa-map-marker" aria-hidden="true"></i><br>Rute</a>
        </div>

        <!-- ./Bottom Navbar content -->
      </nav>
    </div>

    <!-- ./Bottom Navbar (only on tablets, mobiles) -->

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
            case 'profil':
              include __DIR__ . '/pages/profil.php';
              break;
            default:
              #code...
              include __DIR__ . '/pages/home.php';
              break;
          }
          ?>

          <!-- Secondary Footer -->
          <div class="secondary-footer row justify-content-between align-items-center">
            <div class="col-md-4 px-4 py-5">
              <h4>PUSAT PENILAIAN
                KOMPETENSI ASN
                PROVINSI SUMATERA UTARA</h4>

              <p>Jl. Pangeran Diponegoro No.30,
                Madras Hulu, Kec. Medan Polonia,
                Kota Medan, Sumatera Utara 20151</p>
            </div>
            <div class="col-md-3 px-4 py-5 align-self-start">
              <h5>KONTAK</h5>
              <ul class="footer-list">
                <li>
                  No. tlpn : 021 786 3506
                </li>
                <li>
                  Hp (wa) : 0857 76523987
                </li>
              </ul>
              <h5>EMAIL</h5>
              <ul class="footer-list">
                <li>
                  admintes@gmail.com
                </li>
              </ul>
            </div>
            <div class="col-md-3 px-4 py-5 align-self-start">
              <h5>LINK</h5>
              <ul class="footer-list">
                <li>
                  <a href="?page=beranda">Beranda</a>
                </li>
                <li>
                  <a href="?page=alur">Fungsi</a>
                </li>
                <li>
                  <a href="?page=kegiatan">Kegiatan</a>
                </li>
                <li>
                  <a href="?page=profil">Profil</a>
                </li>
                <li>
                  <a href="?page=kontak">Kontak</a>
                </li>
              </ul>
            </div>
            <div class="col-md-2 px-4 py-5 align-self-start">
              <h5>Website Terkait</h5>
              <ul class="footer-list">
                <li>
                  <a href="#">BKD</a>
                </li>
                <li>
                  <a href="#">Pemerintah Provinsi <br>Sumatera Utara</a>
                </li>
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
  <!-- Button Back to Top -->
  <script>
    //Get the button
    var mybutton = document.getElementById("backToTopBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>
