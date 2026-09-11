<?php
   session_start();
   $_SESSION['title'] = "tamplate"; 

   include "../includes/baseURL.php";
   include "../koneksi.php";
   include "../includes/header_user.php";
?>


    <!-- awal content -->
    <div class="container">
        <?php
        include "../koneksi.php";
        if(!isset($_GET['id_kategori'])){
            $kategori = $_GET['id_kategori'];
        }
        $sql = "SELECT * FROM tb_sepeda sp INNER JOIN tb_kategori kt ON sp.id_kategori = kt.id_kategori WHERE id_kategori = $id_kategori";
        $sql_eksekusi = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($sql_eksekusi))
        {
        ?>

        <?php 
        }
        ?>
    </div>
    <!-- akhir content -->

<?php
    include "../includes/footer.php"
?>