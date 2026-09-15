<?php
session_start();
$_SESSION['title'] = "tamplate";

include "../includes/baseURL.php";
include "../koneksi.php";
include "../includes/header_user.php";
?>

<!-- awal content -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <h2>PRODUK</h2>
            <p>wimcycle menawarkan sepeda berkualitas</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php
            if (isset($_GET[id_kategori])):
                $id_kategori = $_GET['id_kategori'];
                $sql = "SELECT id_kategori, nama_kategori FROM tb_kategori WHERE id_kategori = $id_kategori";
                $sql_eksekusi = mysqli_query($koneksi, $sql);
                $data = mysqli_fetch_array($sql_eksekusi);           
                ?>
                <a href="<?= base_url ?> " class="text-dark text-decoration-none link-warning fw-bold">Beranda</a> <font color='orange'>Kategori</font>
                <p>
                    <a href="<?= base_url ?> " class="text-dark text-decoration-none link-warning fw-bold">Beranda</a> <font color='orange'>Kategori</font>
                </p>
                <?php
                else:
            endif;
            ?>
        <div class="col-lg-6">
            Urut Berdasarkan
        </div>
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

if($sql_eksekusi && mysqli_num_rows($sql_eksekusi) > 0){
    while ($data = mysqli_fetch_array($sql_eksekusi))
        {
            echo $data['tipe_sepeda'] . "-kategori: ". $data['nama_kategori']. "<br>";
                    }
};
if (!$sql_eksekusi) {
    die("Query error: " . mysqli_error($koneksi));
}
?>
<!-- akhir content -->

<?php
include "../includes/footer.php";
?>