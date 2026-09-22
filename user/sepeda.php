<?php
session_start();
$_SESSION['title'] = "tamplate";

include "../includes/baseURL.php";
include "../koneksi.php";
include "../includes/header_user.php";
?>

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
                $id_kategori = $_GET['id_kategori'];
                $sql = "SELECT id_kategori, nama_kategori FROM tb_kategori WHERE id_kategori = '$id_kategori'";
                $sql_eksekusi = mysqli_query($koneksi, $sql);
                $data = mysqli_fetch_array($sql_eksekusi);
            ?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url ?>" class="text-dark text-decoration-none fw-bold">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">
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

    <div class="row">
        <div class="col-lg-3">
            <h3>filter</h3>
            <form action="">
                <label for="">Harga Min</label>
                <input type="number" name="harga_min" id="" class="form-control">
                <label for="">Harga Max</label>
                <input type="number" name="harga_max" id="" class="form-control">
                <label for="">Berat</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                        Kurang dari 2kg
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                    <label class="form-check-label" for="radioDefault2">
                        Kurang dari 4kg
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                    <label class="form-check-label" for="radioDefault2">
                        Lebih dari 4kg
                    </label>
                </div>
            </form>
        </div>
        <div class="col-lg-9">
            <h3>Sepeda</h3>
        </div>
    </div>
    <?php
    $id_kategori = isset($_GET['id_kategori']) ? mysqli_real_escape_string($koneksi, $_GET['id_kategori']) : null;

    if ($id_kategori) {
        $sql = "SELECT * FROM tb_sepeda sp 
                INNER JOIN tb_kategori kt ON sp.id_kategori = kt.id_kategori 
                WHERE sp.id_kategori = '$id_kategori'";
    } else {
        $sql = "SELECT * FROM tb_sepeda sp 
                INNER JOIN tb_kategori kt ON sp.id_kategori = kt.id_kategori";
    }

    $sql_eksekusi = mysqli_query($koneksi, $sql);

    if (!$sql_eksekusi) {
        die("Query error: " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($sql_eksekusi) > 0) {
        while ($data = mysqli_fetch_array($sql_eksekusi)) {
    ?>
            <div class="col-12 mb-2">
                <span class="fw-bold"><?= $data['tipe_sepeda']; ?></span>
                <span class="text-muted">(Kategori: <?= $data['nama_kategori']; ?>)</span>
            </div>
    <?php
        }
    } else {
        echo "<div class='col-12'><p class='text-muted'>Tidak ada produk ditemukan.</p></div>";
    }
    ?>
</div>
<!-- akhir content -->

<?php
include "../includes/footer.php";
?>