<!-- <?php
      include("includes/baseURL.php");
      ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= Base_URL . "bootstrap/css/bootstrap.css" ?>">
  <link rel="stylesheet" href="<?= Base_URL . "bootstrap-icons/bootstrap-icons.css " ?>">
</head>

<body>
  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="<?= Base_URL . "aseets/banner/logo.webp" ?>" alt="">
      <h2><a class="navbar-brand" href="#">Runcycle</a></h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house"></i> <b>Beranda</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house"></i> <b>Dealer</b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b>Kategori</b>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"></a>Sepeda Gunung</li>
              <li><a class="dropdown-item" href="#"></a>Sepeda Anak</li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#"></a>Semua Sepeda</li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari Sepeda" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <!-- awal coursel -->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src=<?= Base_URL . "assets/bannner/dekstop-web.jpg" ?> class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= Base_URL . "assets/bannner/dekstop-web-2.jpg" ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= Base_URL . "assets/bannner/dekstop-web1.jpg" ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= Base_URL . "assets/bannner/MicrosoftTeams-image-174.jpg" ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Akhir coursel -->
  <!-- awal konten -->
  <div class="container">
    <div class="row my-3">
      <div class="col-lg-12 text-center">
        <h2>Sepeda GOcycle</h2>
        <b>
          <p style="margin: 20px 10% 0px 20%">Wimcycle menawarkan rangkaian sepeda berkualitas dengan desain yang stylish dan nyaman sesuai kebutuhan bersepeda keluarga anda!</p>
        </b>
      </div>
    </div>
    <hr style="border: 3px solid #0b1ddc;">

  <div class="row justify-content-center g-4 mb-4">

        <!-- Card Sepeda Anak -->
<div class="container py-5">

    <!-- =========================
         BARIS 1 : 2 CARD
    ========================== -->
    <div class="row justify-content-center g-4 mb-4">

        <!-- Card Sepeda Anak -->
        <div class="col-12 col-md-6">
            <div class="card h-100 rounded-0">
                <img 
                    src="<?= Base_URL. "assets/kategori/sepeda anak.webp"?>"
                    class="card-img-top object-fit-contain bg-light-subtle"
                    style="height: 170px;"
                    alt="Sepeda Anak"
                >
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold fs-6">Sepeda Anak</h5>
                    <p class="card-text text-secondary small">Berbagai pilihan sepeda hadir untuk menemanibersepeda anak Anda</p>
                     <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold">Lihat Semua<i class="bi bi-arrow-right-circle-fill ms-2"></i></a>
                </div>
            </div>
        </div>


        <!-- Card Sepeda BMX -->
        <div class="col-12 col-md-6">
            <div class="card h-100 rounded-0">
                <img 
                    src="<?= Base_URL. "assets/kategori/sepeda anak.webp"?>"
                    class="card-img-top object-fit-contain bg-light-subtle"
                    style="height: 170px;"
                    alt="Sepeda BMX"
                >
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold fs-6">Sepeda BMX</h5>
                    <p class="card-text text-secondary small">Jenis sepeda yang cocok bagi Anda pecinta olahragasepeda ekstrim</p>
                    <a href="#" 
                       class="btn btn-primary rounded-pill px-4 py-1 fw-bold">
                        Lihat Semua
                        <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- =========================
         BARIS 2 : 3 CARD
    ========================== -->
    <div class="row justify-content-center g-4">
        <!-- CTB -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 rounded-0">
                <div 
                    class="d-flex justify-content-center align-items-center bg-warning"
                    style="height: 170px;"
                >
                    <span class="fw-bold">Coming Soon</span>
                </div>
                <div class="card-body text-center"><h5 class="card-title fw-bold fs-6">CTB</h5>
                <p class="card-text text-secondary small">Sepeda yang cocok bagi Anda yang ingin bepergiandengan teman-teman untuk meningkatkan kebugaran tubuh</p>
                <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold">Lihat Semua<i class="bi bi-arrow-right-circle-fill ms-2"></i></a>
                </div>
            </div>
        </div>


        <!-- Sepeda Lipat -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 rounded-0">
                <img 
                    src="<?= Base_URL. "assets/kategori/sepeda anak.webp"?>"
                    class="card-img-top object-fit-contain bg-light-subtle"
                    style="height: 170px;"
                    alt="Sepeda Lipat"
                >
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold fs-6">Sepeda Lipat</h5>
                    <p class="card-text text-secondary small">Sepeda lipat yang cocok bagi Anda untuk menjelajahi kota<p>
                    <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold">Lihat Semua<i class="bi bi-arrow-right-circle-fill ms-2"></i>
                    </a>
                </div>
            </div>
        </div>


        <!-- Sepeda Gunung -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 rounded-0">
                <img 
                    src="<?= Base_URL. "assets/kategori/sepeda anak.webp"?>"
                    class="card-img-top object-fit-contain bg-light-subtle"
                    style="height: 170px;"
                    alt="Sepeda Gunung"
                >
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold fs-6">Sepeda Gunung (MTB)</h5>
                    <p class="card-text text-secondary small">Sepeda yang cocok bagi Anda ingin merasakan sepeda gunung serbaguna</p>
                    <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold">Lihat Semua<i class="bi bi-arrow-right-circle-fill ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
  <!-- akhir konten -->

  <!-- awal footer -->
   <div class="row bg-primary ">
    <div class="col-lg-12">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3>Website Resmi GOcycle</h3>
            <p><i class="bi bi-geo-alt-fill"></i>JL AMD Babakan Pocis Kelurahan Bakti Jaya Kecamatan Setu</p>
          </div>
          <div class="col-lg-2">
            <p class="fw-bold">Shoope Indonesia</p>
            <p><i class="bi bi-shop"></i> Gocycle Official</p>
          </div>
          <div class="col-lg-2">
            <p class="fw-bold">Tokopedia Indonesia</p>
            <p><i class="bi bi-shop"></i> Gocycle Official</p>
          </div>
          <div class="col-lg-2">2026</div>
        </div>
      </div>
    </div>
   </div>
   <!-- akhir footer -->

  <!-- AWal Javascript -->
  <script src="<?= Base_URL . "bootstrap/js/bootstrap.bundle.js"; ?>"></script>
  <!-- Akhir Javascript -->
</body>

</html>