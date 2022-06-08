<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM ujians ORDER BY id DESC");
?>

<!-- Header -->
<div class="row">
  <div class="col-lg-12">
    <header class="row px-4 py-5 align-items-center justify-content-between">
      <div class="col-md-4 flex-column align-items-start">
        <h2 class="header-title-text mb-4 text-center">Selamat Datang
          di Pusat Penilaian
          Kompetensi ASN
          Provinsi Sumatera Utara</h2>
      </div>
      <div class="col-md-6 d-flex flex-column text-center white-text">
        <div class="lightbox">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="d-none d-lg-block">
                <img src="dist/img/assets/header-pic-1.png" alt="Header-pic-1" class="w-100 rounded" />
              </div>
              <div class="d-lg-none mb-4">
                <img src="dist/img/assets/header-pic-1.png" alt="Header-pic-1" class="w-100 rounded" />
              </div>

            </div>
            <div class="col-lg-4">
              <img src="dist/img/assets/header-pic-2.png" alt="Header-pic-2" class="w-100 mb-4 mb-md-4  rounded" />
              <img src="dist/img/assets/header-pic-3.png" alt="Header-pic-3" class="w-100 rounded" />
            </div>
          </div>
        </div>
      </div>

    </header>
  </div>
</div>
<!-- /.header -->
<!-- /.row -->

<div class="row my-5">
  <div class="col-lg-12">
    <div class="card px-0">
      <div class="card-header mb-4">
        <h3 class="card-title"><i class="fas fa-bullhorn"></i> Kegiatan</h3>
      </div>

      <!-- Post Kegiatan -->
      <div class="row mb-3 mx-2 align-items-start">
        <div class="col-2 mx-2">
          <div class="date d-flex flex-column align-items-center">
            <h4 class="pt-3">27</h4>
            <p>April</p>
            <h5 class="year text-center py-2">2022</h5>
          </div>
        </div>

        <div class="col-4"><a href="?page=kegiatan-detail">
            <img class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid" src="dist/img/assets/berita-thumb-2.png" alt="thumbnail-1"></a>
        </div>

        <div class="col-5 px-0 align-self-start">
          <a href="?page=kegiatan-detail">
            <h5>Grand Launching Website Pusat Asesmen</h5>
            <p>Website Pusat Asesmen akan launching pada tanggal 23 Mei 2022</p>
          </a>
          <p>27 April 2022</p>
        </div>


      </div>


      <?php
      while ($data = mysqli_fetch_array($result)) {
        echo
        "<div class='row mb-3 mx-2 align-items-start'>
        <div class='col-2 mx-2'>
          <div class='date d-flex flex-column align-items-center'>
            <h4 class='pt-3'>27</h4>
            <p>April</p>
            <h5 class='year text-center py-2'>2022</h5>
          </div>
        </div>

        <div class='col-4'><a href='?page=kegiatan-detail'>
            <img class='mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid' src='dist/img/assets/berita-thumb-2.png' alt='thumbnail-1'></a>
        </div>

        <div class='col-5 px-0 align-self-start'>
          <a href='?page=kegiatan-detail'>
            <h5>Ujian " . $data['name'] . "</h5>
            <p>Website Pusat Asesmen akan launching pada tanggal 23 Mei 2022</p>
          </a>
          <p>27 April 2022</p>
        </div>


      </div>";
      }
      ?>








      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- ./Post Kegiatan -->


    </div>
  </div>
  <!-- <div class="col-lg-4 d-none d-md-block">
    <div class="card">
      <div class="card-header mb-4">
        <h3 class="card-title"><i class="fas fa-bullhorn"></i> Kegiatan</h3>
      </div>
      <div class="row align-items-center px-2">
        <div class="col-sm-4">
          <img class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid" src="dist/img/assets/logo.png" alt="logo">
        </div>
        <div class="col-sm-8 pr-3">
          <p>Seleksi mutasi pindah masuk
            PNS ke Lingkungan Pemerintah
            Provinsi Sumatera Utara</p>
          <div class="row">
            <div class="col-sm-12">
              <p>25/02/2022 - <i class="fas fa-eye"></i> 1481</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center px-2">
        <div class="col-sm-4">
          <img class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid" src="dist/img/assets/logo.png" alt="logo">
        </div>
        <div class="col-sm-8 pr-3">
          <p>Seleksi mutasi pindah masuk
            PNS ke Lingkungan Pemerintah
            Provinsi Sumatera Utara</p>
          <div class="row">
            <div class="col-sm-12">
              <p>25/02/2022 - <i class="fas fa-eye"></i> 1481</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center px-2">
        <div class="col-sm-4">
          <img class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid" src="dist/img/assets/logo.png" alt="logo">
        </div>
        <div class="col-sm-8 pr-3">
          <p>Seleksi mutasi pindah masuk
            PNS ke Lingkungan Pemerintah
            Provinsi Sumatera Utara</p>
          <div class="row">
            <div class="col-sm-12">
              <p>25/02/2022 - <i class="fas fa-eye"></i> 1481</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center px-2">
        <div class="col-sm-4">
          <img class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid" src="dist/img/assets/logo.png" alt="logo">
        </div>
        <div class="col-sm-8 pr-3">
          <p>Seleksi mutasi pindah masuk
            PNS ke Lingkungan Pemerintah
            Provinsi Sumatera Utara</p>
          <div class="row">
            <div class="col-sm-12">
              <p>25/02/2022 - <i class="fas fa-eye"></i> 1481</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center px-2">
        <div class="col-sm-4">
          <img class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid" src="dist/img/assets/logo.png" alt="logo">
        </div>
        <div class="col-sm-8 pr-3">
          <p>Seleksi mutasi pindah masuk
            PNS ke Lingkungan Pemerintah
            Provinsi Sumatera Utara</p>
          <div class="row">
            <div class="col-sm-12">
              <p>25/02/2022 - <i class="fas fa-eye"></i> 1481</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center px-2">
        <div class="col-sm-4">
          <img class="mx-auto d-block mb-2 float-md-left mr-md-4 img-fluid" src="dist/img/assets/logo.png" alt="logo">
        </div>
        <div class="col-sm-8 pr-3">
          <p>Seleksi mutasi pindah masuk
            PNS ke Lingkungan Pemerintah
            Provinsi Sumatera Utara</p>
          <div class="row">
            <div class="col-sm-12">
              <p>25/02/2022 - <i class="fas fa-eye"></i> 1481</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div> -->
</div>
