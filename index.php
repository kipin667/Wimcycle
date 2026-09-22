<?php
   session_start();
   $_SESSION['title'] = "beranda - runcycle"; 
   include 'koneksi.php';

   include 'includes/baseURL.php';
   include "includes/header_user.php";
   include "includes/banner.php";

        $sql = "SELECT * FROM tb_kategori";
        $sql_eksekusi = mysqli_query($koneksi, $sql);
        
        $sql_sepeda_terbaru = "SELECT * FROM tb_sepeda ORDER BY id_sepeda DESC LIMIT 1";
        $sql_eksekusi_sepeda_terbaru = mysqli_query($koneksi, $sql_sepeda_terbaru);
        $data_sepeda_terbaru_array = mysqli_fetch_array($sql_eksekusi_sepeda_terbaru);
        $data_sepeda_baru = $data_sepeda_terbaru_array;
?>
<head>
    <style>
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

    <div class="container my-5">
    <!-- Header Section -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark">Kategori Sepeda Wimcycle</h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">
            Wimcycle menawarkan rangkaian sepeda berkualitas dengan desain yang stylish dan nyaman sesuai kebutuhan bersepeda keluarga Anda!
        </p>
    </div>

        <!-- Grid Card -->
<div class="row g-4 justify-content-center">
    <?php while($data_kategori = mysqli_fetch_array($sql_eksekusi)) :?>
    <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-3">
            
            <!-- Container Gambar dengan Padding -->
            <div class="p-3">
                <img src="<?php echo base_url. "assets/kategori/". $data_kategori['gambar']?>" 
                    class="card-img-top img-fluid" 
                    alt="<?= $data_kategori['nama_kategori'] ?>" 
                    style="height: 200px; object-fit: contain;">
            </div>

            <!-- Body Card -->
            <div class="card-body d-flex flex-column justify-content-between p-2">
                <div>
                    <h4 class="card-title fw-bold text-dark mb-2"><?= $data_kategori['nama_kategori']?></h4>
                    <p class="card-text text-secondary small px-2"><?= $data_kategori['deskripsi_kategori'] ?></p>
                </div>
                
                <!-- Tombol Bergaya Wimcycle -->
                <div class="mt-3">
                    <a href="<?= base_url. "/user/sepeda.php?id_kategori=" . $data_kategori['id_kategori'] ?>" 
                    class="btn btn-wimcycle rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center justify-content-center">
                        Lihat Semua 
                        <span class="ms-2 bg-white text-dark rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 22px; height: 22px;">
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <?php endwhile; ?>
</div>

<div>
            <div class="row my-3 g-4">
                <div class="col-lg-12 text-center">
                    <h2>PRODUK TERBARU WIMCYCLE</h2>
                    <p style="margin: 10px 20% 0px 20%">Nantikan produk terbaru dari Wimcycle dengan design lebih fresh dan colorful</p>
                </div>
            </div>
            <hr style="border: 2px solid #fbb41b">

            <div class="my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card mb-3 border-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-5">
                                    <img src="<?php echo base_url; ?>assets/kategori/kategori5.jpg" class="img-fluid rounded-start w-100" alt="BMX Big foot Road 20"> 
                                </div>
                                <div class="col-md-6 ps-md-6">
                                    <div class="card-body d-flex flex-column h-100 p-4">
                                        <h2 class="card-title fw-bold"><?= $data_sepeda_baru['tipe_sepeda'] ?></h2>
                                        <p class="card-text text-muted">Sepeda BMX Bigfoot "Road" hadir dengan improvement dari seri sebelumnya "Solid Series", Seri "Road" menjawab semua pertanyaan Anda mengenai Big Foot yang tampil agresif dan Arogan. Hadir dengan warna baru Red Light & Green Light.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="btn btn-wimcycle d-inline-flex align-items-center gap-2 rounded-pill">Lihat semua <i class="bi bi-arrow-right-circle-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "includes/footer.php"
    ?>