<?php
   session_start();
   $_SESSION['title'] = "beranda - runcycle"; // Sekaligus perbaikan penulisan $_SESSION yang kurang tanda underscore
   include 'koneksi.php';

   include 'includes/baseURL.php';
   include "includes/header_user.php";
   include "includes/banner.php";

        $sql = "SELECT * FROM tb_kategori";
        $sql_eksekusi = mysqli_query($koneksi, $sql);
        
?>




    <!-- awal content -->

    <div class="container">
        <div class="row my-5 g-4">
            <div class="col-lg-12 text-center">
                <h2>Kategori Sepeda Wimcycle</h2>
                <p style="margin: 10px 20% 0px 20%">Wimcycle menawarkan rangkaian sepeda berkualitas dengan desain yang stylish dan nyaman sesuai kebutuhan bersepeda keluarga anda!</p>
            </div>
        </div>
        <hr style="border: 2px solid #fbb41b">
        
        <?php while($data_kategori = mysqli_fetch_array($sql_eksekusi)) :?>
        <div class="col-lg-4">
            <div class="card">
                <img src="<?php echo base_url; ?>assets/kategori/kategori3.jpg" class="card-img-top" alt="..." style="height: 450px; object-fit: contain;">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $data_kategori['nama_kategori']?></h5>
                    <p class="card-text"></p>
                    <a href="" class="btn btn-primary">Lihat semua <i class="bi bi-arrow-right-circle-fill-fs-6 ms-3"></i></a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

        <!-- kartu satu -->
        <div class="row my-3 g-4 justify-content-center mx-0">
            <div class="col-md-6">
                <div class="card h-100 d-flex flex-column text-center">
                    <img src="<?php echo base_url; ?>assets/kategori/kategori3.jpg" class="card-img-top" alt="..." style="height: 450px; object-fit: contain;">
                    <div class="card-body d-flex flex-column flex-grow-1 justify-content-center align-items-center py-4">
                        <h5 class="card-title">Sepeda Anak</h5>
                        <p class="card-text">Berbagai pilihan sepeda hadir untuk menemani anak anda</p>
                        <a href="#" class="btn btn-primary mt-auto rounded-pill">Lihat semua <i class="bi bi-arrow-right-circle-fill"></i> </a>
                    </div>
                </div>
            </div>

            <!-- KARTU 2 -->
            <div class="col-md-6">
                <div class="card h-100 d-flex flex-column text-center">
                    <img src="<?php echo base_url; ?>assets/kategori/kategori2.jpg" class="card-img-top" alt="..." style="height: 450px; object-fit: contain;">
                    <div class="card-body d-flex flex-column flex-grow-1 justify-content-center align-items-center py-4">
                        <h5 class="card-title">Sepeda BMX</h5>
                        <p class="card-text">jenis sepeda yang cocok untuk anda pencinta olahraga extrem, melakukan trik dan gerakan memukau</p>
                        <a href="#" class="btn btn-primary mt-auto rounded-pill">Lihat semua <i class="bi bi-arrow-right-circle-fill"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- KARTU 3 -->
        <div class="row my-5 mx-0">
            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column text-center">
                    <img src="<?php echo base_url; ?>assets/kategori/coomingsoon.jpg" class="card-img-top" alt="..." style="height: 360px; object-fit: contain;">
                    <div class="card-body d-flex flex-column flex-grow-1 justify-content-center align-items-center">
                        <h5 class="card-title">ctb</h5>
                        <p class="card-text">akan hadir secepatnya</p>
                        <a href="#" class="btn btn-primary mt-auto rounded-pill">Lihat semua <i class="bi bi-arrow-right-circle-fill"></i> </a>
                    </div>
                </div>
            </div>

            <!-- kartu 4 -->
            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column text-center">
                    <img src="<?php echo base_url; ?>assets/kategori/kategori7.jpg" class="card-img-top" alt="..." style="height: 360px; object-fit: contain;">
                    <div class="card-body d-flex flex-column flex-grow-1 justify-content-center align-items-center">
                        <h5 class="card-title">Sepeda Lipat</h5>
                        <p class="card-text">sepeda lipat cocok bagi anda untuk menjelajahi kota</p>
                        <a href="#" class="btn btn-primary mt-auto rounded-pill">Lihat semua <i class="bi bi-arrow-right-circle-fill"></i> </a>
                    </div>
                </div>
            </div>

            <!-- kartu 5 -->
            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column text-center">
                    <img src="<?php echo base_url; ?>assets/kategori/kategori6.jpg" class="card-img-top" alt="..." style="height: 360px; object-fit: contain;">
                    <div class="card-body d-flex flex-column flex-grow-1 justify-content-center align-items-center">
                        <h5 class="card-title">Sepeda Gunung</h5>
                        <p class="card-text">sepeda yang cocok bagi anda yang ingin merasakan sepeda gunung untuk off road ringan di akhir pekan</p>
                        <a href="#" class="btn btn-primary mt-auto rounded-pill">Lihat semua <i class="bi bi-arrow-right-circle-fill"></i> </a>
                    </div>
                </div>
            </div>
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
                                        <h2 class="card-title fw-bold">BMX Big foot Road 20"</h2>
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

        <div>
            <div class="row my-3 g-4">
                <div class="col-lg-12 text-center">
                    <h2>INFORMASI TERBARU</h2>
                    <p style="margin: 10px 20% 0px 20%">temukan kumpulan tips bersepeda dengan keluarga dengan runcycle</p>
                </div>
            </div>
            <hr style="border: 2px solid #fbb41b">
            <div class="col-lg-12 mt-5">
                        <div class="card mb-3 border-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-5">
                                    <img src="<?php echo base_url; ?>assets/kategori/ani.jpg" class="img-fluid rounded-start w-100" alt="BMX Big foot Road 20" style="max-height: 450px; object-fit: contain;"> 
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body d-flex flex-column h-100 p-4">
                                        <h2 class="card-title fw-bold">PERLENGKAPAN YANG PERLU DIPERSIAPKAN SEBELUM BERSEPEDA</h2>
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
    <!-- akhir content -->

    <?php
    include "includes/footer.php"
    ?>