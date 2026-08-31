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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
  <!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
  <div class="container-fluid px-lg-4">
    
    <!-- 1. Logo (Kiri) -->
    <a class="navbar-brand me-4" href="#">
      <img src="<?= Base_URL. "assets/banner/logo.webp" ?>" alt="Wimcycle" height="40">
    </a>

    <!-- Tombol Toggler untuk Tampilan Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- 2. Menu Navigasi Utama (Di sebelah logo) -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav gap-lg-3 text-center me-auto ms-lg-2">
        <li class="nav-item">
          <a class="nav-link fw-bold text-dark" href="#">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-dark" href="#">Dukungan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-dark" href="#">Dealer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-dark" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-dark" href="#">Wimmers Fun Day</a>
        </li>
      </ul>
    </div>

    <!-- 3. Tombol Pencarian (Kanan) -->
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

  </div>
</nav>
  <!-- Akhir Navbar -->

  <!-- awal carousel -->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= Base_URL . "assets/banner/dekstop-web.jpg" ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= Base_URL . "assets/banner/dekstop-web-2.jpg" ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= Base_URL . "assets/banner/dekstop-web1.jpg" ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= Base_URL . "assets/banner/MicrosoftTeams-image-174.jpg" ?>" class="d-block w-100" alt="...">
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
  <!-- Akhir carousel -->

  <!-- awal konten -->
<div class="container py-4">
  <div class="row my-3">
    <div class="col-lg-12 text-center">
      <h2>Sepeda GOcycle</h2>
      <b>
        <p style="margin: 20px 10% 0px 10%">Wimcycle menawarkan rangkaian sepeda berkualitas dengan desain yang stylish dan nyaman sesuai kebutuhan bersepeda keluarga anda!</p>
      </b>
    </div>
  </div>
  <hr style="border: 3px solid #0b1ddc;">

  <div class="row justify-content-center g-4 mb-4">
    <div class="col-12 col-md-6">
      <div class="card h-100 rounded-0">
        <img src="<?= Base_URL . "assets/kategori/sepeda anak.webp" ?>" class="card-img-top product-img" alt="Sepeda Anak">
        <div class="card-body d-flex flex-column text-center">
          <h5 class="card-title fw-bold fs-6">Sepeda Anak</h5>
          <p class="card-text text-secondary small">Berbagai pilihan sepeda hadir untuk menemani bersepeda anak Anda</p>
          <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold mt-auto align-self-center">Lihat Semua <i class="bi bi-arrow-right-circle-fill ms-2"></i></a>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="card h-100 rounded-0">
        <img src="<?= Base_URL . "assets/kategori/sepeda bmx.webp" ?>" class="card-img-top object-fit-contain bg-light-subtle" alt="Sepeda BMX">
        <div class="card-body d-flex flex-column text-center">
          <h5 class="card-title fw-bold fs-6">Sepeda BMX</h5>
          <p class="card-text text-secondary small">Jenis sepeda yang cocok bagi Anda pecinta olahragasepeda ekstrim</p>
          <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold mt-auto align-self-center">Lihat Semua <i class="bi bi-arrow-right-circle-fill ms-2"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center g-4">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100 rounded-0">
        <img src="<?= Base_URL. "assets/kategori/cooming.webp" ?>" class="card-img-top" alt="CTB">
        <div class="card-body d-flex flex-column text-center">
          <h5 class="card-title fw-bold fs-6">CTB</h5>
          <p class="card-text text-secondary small">Sepeda yang cocok bagi Anda yang ingin bepergiandengan teman-teman untuk meningkatkan kebugaran tubuh</p>
          <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold mt-auto align-self-center">Lihat Semua <i class="bi bi-arrow-right-circle-fill ms-2"></i></a>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100 rounded-0">
        <img src="<?= Base_URL . "assets/kategori/sepeda lipat.webp" ?>" class="card-img-top object-fit-contain bg-light-subtle" alt="Sepeda Lipat">
        <div class="card-body d-flex flex-column text-center">
          <h5 class="card-title fw-bold fs-6">Sepeda Lipat</h5>
          <p class="card-text text-secondary small">Sepeda lipat yang cocok bagi Anda untuk menjelajahi kota</p>
          <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold mt-auto align-self-center">Lihat Semua <i class="bi bi-arrow-right-circle-fill ms-2"></i></a>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100 rounded-0">
        <img src="<?= Base_URL . "assets/kategori/sepeda gunung.webp" ?>" class="card-img-top object-fit-contain bg-light-subtle" alt="Sepeda Gunung">
        <div class="card-body d-flex flex-column text-center">
          <h5 class="card-title fw-bold fs-6">Sepeda Gunung (MTB)</h5>
          <p class="card-text text-secondary small">Sepeda yang cocok bagi Anda ingin merasakan sepeda gunung serbaguna</p>
          <a href="#" class="btn btn-primary rounded-pill px-4 py-1 fw-bold mt-auto align-self-center">Lihat Semua <i class="bi bi-arrow-right-circle-fill ms-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

   <div class="row my-3">
      <div class="col-lg-12 text-center">
        <h2>PRODUK TERBARU WIMCYCLE</h2>
        <b>
          <p style="margin: 20px 10% 0px 10%" >Nantikan produk terbaru dari Wimcycle dengan design lebih fresh dan colorful</p>
        </b>
      </div>
    </div>
    <hr style="border: 3px solid #0b1ddc;">

    <!-- Awal Bagian Konten 2 -->
<div class="container d-flex justify-content-center py-4">
  <!-- Horizontal Card dengan Lebar Maksimal yang Disesuaikan (misal: 800px) -->
  <div class="card border-0 shadow-sm p-3" style="max-width: 800px; width: 100%;">
    <div class="row g-4 align-items-center">
    
      <!-- Kolom Gambar (Kiri) -->
      <div class="col-md-5">
        <div class="bg-light p-3 rounded text-center">
          <img src="<?= Base_URL. "assets/kategori/newProduk.jpg" ?>" class="img-fluid rounded" alt="BMX Big foot Road 20">
        </div>
      </div>
      <!-- Kolom Konten & Teks (Kanan) -->
      <div class="col-md-7">
        <div class="card-body p-0 ps-md-2">
          <!-- Judul Produk -->
          <h3 class="card-title fw-bold text-dark mb-3" style="font-family: 'Montserrat', sans-serif;">
            BMX Big foot Road 20"
          </h3>
          <!-- Deskripsi Produk -->
          <p class="card-text text-secondary mb-4" style="line-height: 1.6; font-size: 0.95rem;">
            Sepeda BMX Bigfoot "Road" hadir dengan improvement dari seri sebelumnya "Solid Series", Seri "Road" menjawab semua pertanyaan Anda mengenai Big Foot yang tampil agresif dan Arogan. Hadir dengan warna baru Red Light & Green Light.
          </p>
          <!-- Tombol Aksi (Lihat Semua) -->
          <a href="#" class="btn btn-primary rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2 fw-semibold">
            Lihat Semua
            <i class="bi bi-arrow-right-circle-fill"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
      <!-- Akhir Bagian Konten 2-->
  <!-- akhir konten -->

  <!-- awal footer -->
  <footer class="bg-primary text-white py-4 w-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-3 mb-lg-0">
          <h3>Website Resmi GOcycle</h3>
          <p><i class="bi bi-geo-alt-fill"></i> JL AMD Babakan Pocis Kelurahan Bakti Jaya Kecamatan Setu</p>
        </div>
        <div class="col-lg-2 col-6">
          <p class="fw-bold mb-1">Shopee Indonesia</p>
          <p><i class="bi bi-shop"></i> Gocycle Official</p>
        </div>
        <div class="col-lg-2 col-6">
          <p class="fw-bold mb-1">Tokopedia Indonesia</p>
          <p><i class="bi bi-shop"></i> Gocycle Official</p>
        </div>
        <div class="col-lg-2 text-lg-end">
          <p>&copy; 2026</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->

  <!-- Awal Javascript -->
  <script src="<?= Base_URL . "bootstrap/js/bootstrap.bundle.js"; ?>"></script>
  <!-- Akhir Javascript -->
</body>
</html>