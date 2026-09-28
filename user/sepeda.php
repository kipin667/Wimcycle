<?php
session_start();
$_SESSION['title'] = "tamplate";

include "../includes/baseURL.php";
include "../koneksi.php";
include "../includes/header_user.php";

?>

<head>
    <style>
        .bg-wimcycle {
            background-color: #0b2c5d;
            color: #fbfbfb;
        }

        .btn-wimcycle {
            background-color: #0b2c5d;
            color: #ffffff;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-wimcycle:hover {
            background-color: #082044;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }
    </style>
</head>

<!-- awal content -->
<div class="container py-4">
    <!-- Header Produk -->
    <div class="row mb-3">
        <div class="col-12">
            <h2>PRODUK</h2>
            <p class="text-muted">Wimcycle menawarkan sepeda berkualitas</p>
        </div>
    </div>

    <!-- Breadcrumb dan Filter -->
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <?php if (isset($_GET['id_kategori'])):
                $id_kategori = mysqli_real_escape_string($koneksi, $_GET['id_kategori']);
                $sql = "SELECT id_kategori, nama_kategori FROM tb_kategori WHERE id_kategori = '$id_kategori'";
                $sql_eksekusi = mysqli_query($koneksi, $sql);
                $data = mysqli_fetch_array($sql_eksekusi);
            ?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url ?>" class="text-dark text-decoration-none fw-bold">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active fw-bold" style="color: #1E3A8A;" aria-current="page">
                            <?= isset($data['nama_kategori']) ? $data['nama_kategori'] : 'Kategori'; ?>
                        </li>
                    </ol>
                </nav>
            <?php endif; ?>
        </div>

        <div class="col-md-6 text-md-end mt-2 mt-md-0">
            <span>Urut Berdasarkan</span>
        </div>
    </div>

    <!-- Layout Utama: Kiri (Filter) & Kanan (Produk) -->
    <div class="row">
        <!-- Sidebar Filter (Kiri) -->
        <div class="col-lg-3 mb-4">
            <div class="card p-3 shadow-sm">
                <h4 class="mb-3">Filter</h4>
                <form action="" method="GET">
                    <div class="mb-3">
                        <label for="harga_min" class="form-label fw-bold">Harga Min</label>
                        <input type="number" name="harga_min" id="harga_min" class="form-control" placeholder="0">
                    </div>
                    <div class="mb-3">
                        <label for="harga_max" class="form-label fw-bold">Harga Max</label>
                        <input type="number" name="harga_max" id="harga_max" class="form-control" placeholder="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Berat</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="berat" id="radioBerat1" value="2">
                            <label class="form-check-label" for="radioBerat1">
                                Kurang dari 2kg
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="berat" id="radioBerat2" value="4">
                            <label class="form-check-label" for="radioBerat2">
                                Kurang dari 4kg
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="berat" id="radioBerat3" value="4_plus">
                            <label class="form-check-label" for="radioBerat3">
                                Lebih dari 4kg
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-wimcycle w-100 fw-bold">Terapkan Filter</button>
                </form>
            </div>
        </div>

        <!-- Daftar Card Sepeda (Kanan) -->
        <div class="col-lg-9">
            <h3 class="mb-3">Sepeda</h3>

            <div class="row">
                <?php
                $id_kategori = isset($_GET['id_kategori']) ? mysqli_real_escape_string($koneksi, $_GET['id_kategori']) : null;

                // Memanggil dl.nama_dealer menggunakan GROUP_CONCAT agar jika 1 sepeda ada di beberapa dealer,
                // nama dealernya digabung jadi satu string (contoh: "Dealer A, Dealer B")
                if ($id_kategori) {
                    $sql = "SELECT sp.*, kt.nama_kategori, GROUP_CONCAT(DISTINCT dl.nama_dealer SEPARATOR ', ') AS list_dealer 
                            FROM tb_sepeda sp 
                            INNER JOIN tb_kategori kt ON sp.id_kategori = kt.id_kategori
                            LEFT JOIN tb_stok st ON sp.id_sepeda = st.id_sepeda
                            LEFT JOIN tb_dealer dl ON st.id_dealer = dl.id_dealer 
                            WHERE sp.id_kategori = '$id_kategori'
                            GROUP BY sp.id_sepeda";
                } else {
                    $sql = "SELECT sp.*, kt.nama_kategori, GROUP_CONCAT(DISTINCT dl.nama_dealer SEPARATOR ', ') AS list_dealer 
                            FROM tb_sepeda sp 
                            INNER JOIN tb_kategori kt ON sp.id_kategori = kt.id_kategori
                            LEFT JOIN tb_stok st ON sp.id_sepeda = st.id_sepeda
                            LEFT JOIN tb_dealer dl ON st.id_dealer = dl.id_dealer
                            GROUP BY sp.id_sepeda";
                }

                $sql_eksekusi = mysqli_query($koneksi, $sql);

                if (!$sql_eksekusi) {
                    die("Query error: " . mysqli_error($koneksi));
                }

                if (mysqli_num_rows($sql_eksekusi) > 0) {
                    while ($data = mysqli_fetch_array($sql_eksekusi)) {
                ?>

                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm border-0 rounded-3">
                                <img src="../assets/kategori/kategori2.jpg" class="card-img-top rounded-top-3" alt="<?= $data['tipe_sepeda']; ?>" style="height: 180px; object-fit: cover;">

                                <div class="card-body d-flex flex-column">
                                    <!-- Judul Produk -->
                                    <h5 class="card-title fw-bold text-dark mb-1"><?= $data['tipe_sepeda']; ?></h5>

                                    <!-- Harga Produk -->
                                    <p class="card-text text-danger fw-bold fs-5 mb-2">
                                        Rp <?= number_format($data['harga'], 0, ',', '.'); ?>
                                    </p>

                                    <ul class="list-group list-group-flush mb-3 small">
                                        <li class="list-group-item px-0 py-1 bg-transparent"><strong>Berat:</strong> <?= $data['berat']; ?> kg</li>
                                        <li class="list-group-item px-0 py-1 bg-transparent"><strong>Ukuran:</strong> <?= $data['ukuran']; ?></li>
                                        <li class="list-group-item px-0 py-1 bg-transparent"><strong>FD / RD:</strong> <?= $data['fd']; ?> / <?= $data['rd']; ?> Speed</li>
                                        <li class="list-group-item px-0 py-1 bg-transparent">
                                            <strong>Dealer:</strong> <?= !empty($data['list_dealer']) ? $data['list_dealer'] : '-'; ?>
                                        </li>
                                    </ul>

                                    <div class="mt-auto d-flex gap-2">
                                        <a href="<?= base_url . 'user/dealer.php'; ?>" class="btn btn-outline-primary fw-semibold w-50 d-flex align-items-center justify-content-center">
                                            <i class="bi bi-houses me-1"></i> Dealer
                                        </a>

                                        <a href="<?= base_url . 'user/detail_sepeda.php?id=' . $data['id_sepeda']; ?>" class="btn btn-wimcycle fw-bold w-50 d-flex align-items-center justify-content-center">
                                            <i class="bi bi-eye-fill me-1"></i> Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted'>Tidak ada produk ditemukan.</p></div>";
                }
                ?>
            </div>
        </div>

        <?php
        include "../includes/footer.php";
        ?>