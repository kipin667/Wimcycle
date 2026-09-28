<?php
include '../koneksi.php';

$sql = "SELECT * FROM tb_dealer";
$sql_eksekusi = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Sepeda</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="mb-4 text-center">Pilih Kategori Dealer</h2>

    <form action="tampil_filter_dealer.php" method="GET" class="col-md-6 mx-auto">
        <div class="mb-3">
            <label for="" class="form-label fw-bold">Kategori</label>
            <select name="id_kategori" id="" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                <?php
                    while ($data = mysqli_fetch_array($sql_eksekusi)):
                ?>
                        <option value="<?= $data['nama_dealer']; ?>">
                            <?= $data['nama_dealer']; ?>
                        </option>
                <?php
                    endwhile;
                ?>
                <option value="semua" class="bg-warning">Semua Kategori</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tampilkan Sepeda</button>
    </form>
</div>

</body>
</html>