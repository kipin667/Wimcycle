<?php

include '../koneksi.php';
$sql = "SELECT * FROM tb_sepeda";
$sql_eksekusi = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sepeda</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="mb-4 text-center">Daftar Sepeda</h2>
    <div class="row">
        <?php
        while ($data = mysqli_fetch_assoc($sql_eksekusi)) :
        ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <!-- Elemen gambar ditambahkan di sini -->
                    <img src="../assets/kategori/kategori2.jpg" class="card-img-top" alt="<?= $data['tipe_sepeda']; ?>" style="height: 180px; object-fit: cover;">
                    
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