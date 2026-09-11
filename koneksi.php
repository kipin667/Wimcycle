<?php
 
    $server = "localhost";
    $user = "root";
    $pasword = "";
    $database = "gocycle";

    $koneksi = mysqli_connect($server, $user, $pasword) or die ("gagal terhubung dengan server");

    $db = mysqli_select_db($koneksi, $database) or die ("database tidak ditemukan");

?>