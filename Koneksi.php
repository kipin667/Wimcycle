<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'GOcycle';

$connection = mysqli_connect($server, $user, $password, $database) or die('gagal terhubung dengan server');

$db = mysqli_select_db($connection, $database) or die('Database Tidak ditemukan');
