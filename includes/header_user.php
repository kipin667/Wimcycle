<?php
if (isset($_SESSION['title'])) {
    $title = $_SESSION['title'];
} else {
    $title = "runcycle";
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?php echo base_url; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>bootstrap-icons/bootstrap-icons.css">

</head>

<body class="vh-100">

    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-top">
        <div class="container">
            <!-- Brand / Logo -->
            <a class="navbar-brand fw-bold text-warning fs-3 me-4" href="<?= base_url; ?>">
                runcycle
            </a>

            <!-- Toggler Button (Mobile) -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items & Search -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-medium">
                    <li class="nav-item me-2">
                        <a class="nav-link active" aria-current="page" href="<?= base_url; ?>">
                            <i class="bi bi-house me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="<?= base_url . "user/dealer.php"; ?>">
                            <i class="bi bi-houses me-1"></i> Dealer
                        </a>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-tags-fill me-1"></i> Kategori
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm rounded-3">
                            <?php
                            $sql = "SELECT id_kategori, nama_kategori FROM tb_kategori";
                            $sql_eksekusi = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_array($sql_eksekusi)) { ?>
                                <li>
                                    <a class="dropdown-item py-2" href="<?= base_url . 'user/sepeda.php?id_kategori=' . $data['id_kategori']; ?>">
                                        <?= $data['nama_kategori']; ?>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item py-2 fw-semibold text-warning" href="<?= base_url . "user/sepeda.php"; ?>">
                                    Semua Sepeda
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Form Pencarian -->
                <form class="d-flex" role="search" action="<?= base_url . "user/sepeda.php"; ?>" method="GET">
                    <div class="input-group">
                        <input class="form-control bg-light border-0 ps-3" type="search" name="keyword" placeholder="Cari tipe atau kategori..." aria-label="Search" />
                        <button class="btn btn-warning text-white px-3" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->