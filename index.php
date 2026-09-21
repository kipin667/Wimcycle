<?php
   session_start();
   $_SESSION['title'] = "beranda - runcycle"; // Sekaligus perbaikan penulisan $_SESSION yang kurang tanda underscore
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




    <!-- awal content -->

    <div class="container">
        <div class="row my-5 g-4">
            <div class="col-lg-12 text-center">
                <h2>Kategori Sepeda Wimcycle</h2>
                <p style="margin: 10px 20% 0px 20%">Wimcycle menawarkan rangkaian sepeda berkualitas dengan desain yang stylish dan nyaman sesuai kebutuhan bersepeda keluarga anda!</p>
            </div>
        
        <hr style="border: 2px solid #fbb41b">
        
        <?php while($data_kategori = mysqli_fetch_array($sql_eksekusi)) :?>
        <div class="col-lg-4">
            <div class="card">
                <img src="<?php echo base_url. "assets/kategori/". $data_kategori['gambar']?>" class="card-img-top" alt="..." style="height: 450px; object-fit: contain;">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $data_kategori['nama_kategori']?></h5>
                    <p class="card-text"><?= $data_kategori['deskripsi_kategori'] ?></p>
                    <a href="<?= base_url. "/user/sepeda.php?id_kategori=" . $data_kategori['id_kategori'] ?>" class="btn btn-primary">Lihat semua <i class="bi bi-arrow-right-circle-fill-fs-6 ms-3"></i></a>
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
                                            <a href="#" class="btn btn-primary d-inline-flex align-items-center gap-2 rounded-pill">Lihat semua <i class="bi bi-arrow-right-circle-fill"></i> </a>
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