<!-- <?php
include("includes/baseURL.php");
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= Base_URL."bootstrap/css/bootstrap.css" ?>">
    <link rel="stylesheet" href="<?= Base_URL; ?> bootstrap-icons/bootstrap-icons.css">
</head>
<body>
    <!-- Awal Navbar -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
     <img src="<?=  Base_URL."aseets/banner/logo.webp" ?>" alt="">
    <a class="navbar-brand" href="#">Runcycle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house"></i>Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"></a>Sepeda Gunung</li>
            <li><a class="dropdown-item" href="#"></a>Sepeda Anak</li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a>Semua Sepeda</li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Sepeda" aria-label="Search"/>
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
      <img src= <?= Base_URL."assets/bannner/dekstop-web.jpg"?> class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= Base_URL."assets/bannner/dekstop-web-2.jpg"?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= Base_URL."assets/bannner/dekstop-web1.jpg"?>" class="d-block w-100" alt="...">
    </div>
     <div class="carousel-item">
      <img src="<?= Base_URL."assets/bannner/MicrosoftTeams-image-174.jpg"?>" class="d-block w-100" alt="...">
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
 <img src="<?= Base_URL."assets/bannner/MicrosoftTeams-image-174.jpg"?>" class="d-block w-100" alt="...">
       <!-- Akhir coursel -->
    <h1>GOCYCLE</h1>
    <?= Base_URL ?>
    <!-- AWal Javascript -->
     <script src="<?= Base_URL."bootstrap/js/bootstrap.bundle.js"; ?>"></script>
     <!-- Akhir Javascript -->
</body>
</html>