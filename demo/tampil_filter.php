<?php
include '../koneksi.php';

if (isset($_GET['id_kategori'])) {
    $id_kategori = $_GET['id_kategori'];
} else {
    $id_kategori = 0;
}

if ($id_kategori == 'semua') {
    $sql = "SELECT * FROM tb_sepeda";
} else {
    $sql = "SELECT * FROM tb_sepeda WHERE id_kategori = '$id_kategori'";
}

$sql_eksekusi = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Filter Sepeda</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="mb-4 text-center">Daftar Sepeda Terfilter</h2>
    <div class="mb-3">
        <a href="filter.php" class="btn btn-secondary">Kembali ke Filter</a>
    </div>
    <div class="row">
        <?php
        while ($data = mysqli_fetch_assoc($sql_eksekusi)) :
        ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary"><?= $data['tipe_sepeda']; ?></h5>
                        <p class="card-text text-danger fw-bold fs-5 mb-2">
                            Rp <?= number_format($data['harga'], 0, ',', '.'); ?>
                        </p>
                        <ul class="list-group list-group-flush mb-1">
                            <li class="list-group-item px-0 py-1"><strong>Berat:</strong> <?= $data['berat']; ?> kg</li>
                            <li class="list-group-item px-0 py-1"><strong>Ukuran:</strong> <?= $data['ukuran']; ?></li>
                            <li class="list-group-item px-0 py-1"><strong>FD / RD:</strong> <?= $data['fd']; ?> / <?= $data['rd']; ?> Speed</li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</div>

</body>
</html>