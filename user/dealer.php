<?php
   session_start();
   $_SESSION['title'] = "tamplate"; 

   include "../includes/baseURL.php";
   include "../koneksi.php";
   include "../includes/header_user.php";
?>


    <!-- awal content -->
    <div class="container">
        <h2>menampilkan seluruh dealer</h2>
    </div>
    <!-- akhir content -->

<?php
    include "../includes/footer.php"
?>