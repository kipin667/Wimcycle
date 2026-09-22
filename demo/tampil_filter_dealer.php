<?php
include '../koneksi.php';

if (isset($_GET['id_dealer'])) {
    $id_kategori = $_GET['id_dealer'];
} else {
    $id_kategori = 0;
}

if ($id_kategori == 'semua' || $id_kategori == 0) {
    $sql = "SELECT * FROM tb_sepeda";
} else {
    $sql = "SELECT s.*, st.stok, st.id_dealer 
            FROM tb_stok st
            JOIN tb_sepeda s ON st.id_sepeda = s.id_sepeda
            WHERE st.id_dealer = '$id_kategori'";
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
        <a href="filter_dealer.php" class="btn btn-secondary">Kembali ke Filter</a>
    </div>
    <div class="row">
        <?php
        // Cek apakah data sepeda ditemukan
        if (mysqli_num_rows($sql_eksekusi) > 0) :
            while ($data = mysqli_fetch_assoc($sql_eksekusi)) :
        ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <!-- Gambar Sepeda -->
                        <img src="../assets/kategori/<?= $data['gambar_sepeda'] ?? 'default.jpg'; ?>" class="card-img-top" alt="<?= $data['tipe_sepeda']; ?>" style="height: 180px; object-fit: cover;">
                        
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary"><?= $data['tipe_sepeda']; ?></h5>
                            <p class="card-text text-danger fw-bold fs-5 mb-2">
                                Rp <?= number_format($data['harga'], 0, ',', '.'); ?>
                            </p>
                            <ul class="list-group list-group-flush mb-1">
                                <li class="list-group-item px-0 py-1"><strong>Berat:</strong> <?= $data['berat']; ?> kg</li>
                                <li class="list-group-item px-0 py-1"><strong>Ukuran:</strong> <?= $data['ukuran']; ?></li>
                                <li class="list-group-item px-0 py-1"><strong>FD / RD:</strong> <?= $data['fd']; ?> / <?= $data['rd']; ?> Speed</li>
                                
                                <!-- Menampilkan Stok jika bukan opsi 'semua' -->
                                <?php if (isset($data['stok'])) : ?>
                                    <li class="list-group-item px-0 py-1 text-success"><strong>Stok Dealer:</strong> <?= $data['stok']; ?> unit</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        else :
        ?>
            <div class="col-12 text-center py-5">
                <p class="text-muted fs-5">Tidak ada sepeda yang tersedia untuk dealer ini.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>